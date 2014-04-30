<?php

// top继承于spController，从而代替spController的作用
class xunji extends spController
{
	// 构造函数，进行全局操作的位置
	function __construct(){
		// 必须加入启动父类构造函数的操作
		parent::__construct();

		$this->site_name=$this->set('site_name');
		$this->keyword=$this->set('keyword');
		$this->description=$this->set('description');
		$this->site_url=$this->set('site_url');
		$this->tmpurl=$this->site_url . '/index/tpl/index';
		$this->upurl=$this->site_url . '/update';
		// 开始全局操作
	}

	/*
	 *		登录操作
	*		 @param string $username
	*		 @param string $password
	*		 @return string $return
	*		 $return -1 无用户
	*		 		 -2 密码错误
	*				 -3 更新数据库失败
	*		 		 >=0 返还用户id
	*
	*/
	function login($username,$password){
		$user=spClass('user');
		//检测sid是否重复
		$conditions=array('sid'=>$username);
		$sum=$user->findCount($conditions);
		if($sum>0)
		{
			$conditions=array('sid'=>$username);
			$userpasswd=$user->find($conditions);
			$userpassowrd=$userpasswd[password];
			$userid=$userpasswd[id];
			if($userpassowrd==md5($password))
			{
				//获取ip
				$spXunji=spClass('spXunji');
				$loginip=$spXunji->getip();
				//更新登录时间
				$conditions=array('id'=>$userid);
				$contents=array('logintime'=>time(),'loginip'=>$loginip);
				$sql=$user->update($conditions,$contents);
				if($sql)
				{
					$user->incrField(array('id'=>$userid), 'logintimes');
					return $userid;
				}else
				{
					return '-3';
				}
			}else
			{
				return '-2';
			}
		}else{
			return '-1';
		}
	}
	/*
	 * 		登录操作
	*		@param array $userinfo
	* 		@return strin $return
	* 		$return -1 学号重复
	*				-2 email重复
	*				 1 注册成功
	*				 0 插入数据库时失败
	*
	*/
	function sign($userinfo){
		$user=spClass('user');
		//检测sid是否重复
		$conditions=array('sid'=>$userinfo['sid']);
		$sum=$user->findCount($conditions);
		if($sum>0)
		{
			return '-1';
		}
		$conditions=array('email'=>$userinfo['email']);
		$sum=$user->findCount($conditions);
		if($sum>0)
		{
			return '-2';
		}

		//注册时间
		$userinfo['logintime']=time();
		$userinfo['signtime']=time();
		$userinfo['password']=md5($userinfo['password']);
		//数据库插入
		$sql=$user->create($userinfo);
		if($sql)
			return '1';
		else
			return '0';
	}

	/*
	 * 		banner相关操作
	* 		@param string $id 		del的时候用到
	* 		@param string $ope[add]|[del]|[list]
	* 		@param array $banner_post [title]|[url] add的时候用到
	* 		@param array $file file info add的时候用到
	* 		@param string $page list的时候需要用到。
	* 		@return string $return
	* 		@return array $return
	* 			@return 0 失败
	* 				    1 成功
	* 					array 返还取出的数组
	*
	*
	*/
	function banner($id,$ope,$banner_post,$file,$page){
		$banner=spClass('banner');
		$spXunji=spClass('spXunji');
		switch ($ope){
			case 'add':
				$dir=$spXunji->upic($file,'banner',$id);
				if($dir!='-1' && $dir!='0' && $dir!='-2'){
					$url=array('url'=>$dir);
					$banner_post=array_merge($banner_post,$url);
				}else if($dir=='-1'){
					return '-1';
				}else if($dir=='0'){
					return '-2';
				}else {
					return '-3';
				}
				//添加到数据库
				$sql=$banner->create($banner_post);
				if($sql)
					return '1';
				else
					return '0';
				break;
			case 'del':
				$conditions=array('id'=>$id);
				$sql=$banner->delete($conditions);
				if($sql){
					return '1';
				}else{
					return '0';
				}
				break;
			case 'list':
				//取出所有标签
				$page_num='4';
				$set_page=$spXunji->setpage($page,$page_num);
				$sql=$banner->findAll(null,"id desc",null,$set_page);
				if($sql)
				{
					return $sql;
				}else
				{
					return '0';
				}
				break;
		}
	}
	/*
	 * 		获取网站配置
	* 		@param string $title[site_name]|[site_url]|[remind_time]|[overdue_time]|[page_num]|[reply_num]|[keyword]|[description] 设置的名称
	*
	*/
	function set($title){
		$setting=spClass('setting');
		$sql=$setting->find(array('title'=>$title),'','value');
		return $sql[value];
	}
	/*
	 * 失物 寻物的添加删除等操作
	* $id 操作人id
	* $type [xwqs]|[swzl]  要操作的类型
	* $ope [add]|[del]|[modify]|[ok]|[unhand]
	* $info 提交信息 是个数组 
	*/
	function operate($id,$type,$ope,$info,$uid){
		switch ($type){
			case 'swzl':
				$classdb=spClass('swzl');
				break;
			case 'xwqs':
				$classdb=spClass('xwqs');
				break;
			default:
						return '-2';
				break;
		}
		switch ($ope){
			case 'add':
				$info[uid]=$uid;
				$info[time]=time();
				$sql=$classdb->create($info);
				if($sql){
					return '1';
				}else {
					return '0';
				}
				break;
			case'del':
				$sql=$classdb->delete(array('id'=>$id));
				if($sql){
					return '1';
				}else {
					return '0';
				}
				break;
			case'modify':
				$info[time]=time();
				$conditions=array('id'=>$id);
				$sql=$classdb->update($conditions,$info);
				if($sql){
					return '1';
				}else {
					return '0';
				}
				break;
			case'ok':
				$conditions=array('id'=>$id);
				$sql=$classdb->update($conditions,array('ok'=>'1'));
				if($sql){
					return '1';
				}else {
					return '0';
				}
				break;
			case'unhand':
				$conditions=array('id'=>$id);
				$sql=$classdb->update($conditions,array('ok'=>'-1'));
				if($sql){
					return '1';
				}else {
					return '0';
				}
				break;
			default:
				return '-1';
				break;
		}
	}
	function select($type,$page){
		$page_num=$this->set('page_num');
		$spXunji=spClass('spXunji');
		switch ($type){
			case 'swzl':
				$classdb=spClass('swzl');
				break;
			case 'xwqs':
				$classdb=spClass('xwqs');
				break;
			default:
				return '-1';
				break;
		}
		$set_page=$spXunji->setpage($page,$page_num);
		$sql=$classdb->findAll(null,'time desc',null,$set_page);
		if($sql){
			$i=0;
			foreach ($sql as $list)
			{
				$listarr[$i]=$list;
				$listarr[$i][time]=date('m月d日 H:i',$list[time]);
				$i++;
			}
			return $listarr;
		}else {
			return '0';
		}		
	}
	/*
	 * 取出单个失物招领或寻物启事
	 */
	function view($id,$type){
		//获取展示的类型 并且实例化数据库类
		switch ($type){
			case 'swzl':
				$classdb=spClass('swzl');
				break;
			case 'xwqs':
				$classdb=spClass('xwqs');
				break;
			default:
				return '-1';
				break;
		}
		//从数据库取出相应数据
		$conditions=array('id'=>$id);
		$sql=$classdb->findAll($conditions);
		if($sql){
			foreach ($sql as $view)
			{
				$viewarr[0]=$view;
				$viewarr[0][time]=date('m月d日 H:i',$view[time]);
			}
			return $viewarr;
		}else {
			return '0';
		}
	}
	function tag($id,$type,$ope,$tagname){
		$tag=spClass('tag');
		switch ($ope){
			case'search':
				//从数据库中取出tagname
				$conditions=array('id'=>$id);
				$sql=$tag->findAll($conditions,'','tag_name');
				$tag_name=$sql['tage_name'];
				$this->search($type,$tag_name);				
				break;
			case'add':
				$sql=$tag->create(array('tag_name'=>$tagname));
				if ($sql) {
					return '1';
				}else {
					return '0';
				}
				break;
			case'del':
				$conditions=array('id'=>$id);
				$sql=$tag->delete($conditions);
				if ($sql) {
					return '1';
				}else {
					return '0';
				}
				break;
			case'list':
				$sql=$tag->findAll(null,'id desc',null,'0,10');
				if ($sql) {
					return $sql;
				}else {
					return '0';
				}
				break;
			default:
				return '-1';
					
		}
		
	}
	function classes($id,$ope,$classname,$page){
		$class=spClass('classtable');
		switch ($ope){
			case'add':
				$sql=$class->create(array('name'=>$classname));
				if ($sql) {
					return '1';
				}else {
					return '0';
				}
				break;
			case'del':
				$conditions=array('id'=>$id);
				$sql=$class->delete($conditions);
				if ($sql) {
					return '1';
				}else {
					return '0';
				}
				break;
			case'list':
				$sql=$class->findAll(null,'id desc');
				if ($sql) {
					return $sql;
				}else {
					return '0';
				}
				break;
			case'read':
				$conditions=array('id'=>$id);
				$sql=$class->findAll($conditions);
				if($sql)
				{
					$classname=$sql[0][name];
					return $classname;
				}else {
					return '0';
				}
				break;
			default:
				return '-1';
				break;			
		}
	
	}
	function search($type,$keyword,$classid,$pageid){
		switch ($type){
			case'swzl':
				$classdb=spClass('swzl');
				break;
			case'xwqs':
				$classdb=spClass('xwqs');
				break;
			default:
				return '-1';
		}
		if ($classid!='0' && classid!=''){
			$conditions = "name like '%$keyword%' and cid like $classid or info like '%$keyword%' and cid like $classid";
		}else if($classid=='0'){
			$conditions = "name like '%$keyword%' or info like '%$keyword%'";
		}else {
			$conditions = "name like '%$keyword%' or info like '%$keyword%'";
		}
		$set=spClass('setting');
		$page_num=$this->set('page_num');
		$spXunji=spClass('spXunji');
		$set_page=$spXunji->setpage($pageid,$page_num);
		$sql=$classdb->findAll($conditions,'time desc',null,$set_page);
		if($sql){
			return $sql;
		}else {
			return '0';
		}
	}
	function cardsearch($username,$sid){
		$user=spClass('user');
		
		$count=$user->findCount(array('username'=>$username,'sid'=>$sid));
		if($count>0){
			$sql=$user->findAll(array('username'=>$username,'sid'=>$sid));
			$result=$sql[0][phone];
		}else{
			$result="0";
		}
		return $result;
	}
 
}