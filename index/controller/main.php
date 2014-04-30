<?php
class main extends xunji
{	
	function __construct(){
		// 一些操作
		parent::__construct();
	}
	
	function index(){
		
		//列出最新banner
		$this->bannerarr=$this->banner('', 'list', '', '', '1');
		//列出class
		$this->classarr=$this->classes('', 'list', '', 'all');
		//列出swzl
		$this->swzlarr=$this->select('swzl', '1');
		//列出xwqs
		$this->xwqsarr=$this->select('xwqs', '1');
		//列出tag
		$this->tagarr=$this->tag('', '', 'list', '');
		
		$this->display('index/index.html');
	}
	//搜索页面
	function s(){
		$keyword=$this->spArgs('keyword');
		$classid=$this->spArgs('classid');
		$swzlarr=$this->search('swzl', $keyword, $classid, '1');
		$this->swzlarr=$swzlarr;
		$xwqsarr=$this->search('xwqs', $keyword, $classid, '1');
		$this->xwqsarr=$xwqsarr;
		//模板变量
		$this->keyword=$keyword;
		$this->classname=$this->classes($classid,'read');
		$this->display('index/search.html');
	}
	//更多失物招领
	function swzl(){
		$page=$this->spArgs('p');
		if(empty($page)){
			$page='1';
		}
		//列出swzl
		$this->swzlarr=$this->select('swzl', $page);
		$this->display('index/swzl.html');
	}
	//更多寻物启事
	function xwqs(){
		$page=$this->spArgs('p');
		if(empty($page)){
			$page='1';
		}
		//列出swzl
		$this->swzlarr=$this->select('xwqs', $page);
		$this->display('index/swzl.html');
	}
	//添加失物招领的页面
	function addswzl(){
		//列出class
		$this->classarr=$this->classes('', 'list', '', 'all');
		
		$this->display('index/addswzl.html');
	}
	//添加寻物启事的页面
	function addxwqs(){
		//列出class
		$this->classarr=$this->classes('', 'list', '', 'all');
		
		$this->display('index/addxwqs.html');
	}
	//展示失物招领页面
	function viewswzl(){
		$id=$this->spArgs('id');
		$swzlarr=$this->view($id, 'swzl');
		$this->swzlarr=$swzlarr;
		if($swzlarr!=0){
		$this->name=$swzlarr[0][name];
		}
		$this->display('index/viewswzl.html');
	}
	//展示寻物启事页面
	function viewxwqs(){
		$id=$this->spArgs('id');
		$xwqsarr=$this->view($id, 'xwqs');
		$this->xwqsarr=$xwqsarr;
		if($xwqsarr!=0){
		$this->name=$xwqsarr[0][name];
		}
		$this->display('index/viewxwqs.html');
	}
	
	//添加失物招领的动作
	function addswzlaction(){
		$info=$_POST;
		$sql=$this->operate('', 'swzl', 'add', $info, '');
		if($sql=='1'){
			echo '成功';
		}
	}
	//添加寻物启事的动作
	function addxwqsaction(){
		$info=$_POST;
		$sql=$this->operate('', 'xwqs', 'add', $info, '');
		if($sql=='1'){
			echo '成功';
		}
	}
	//上传寻物启事的图片
	function uploadswzlpic(){
		$file=$_FILES;
		$Xunji=spClass('spXunji');
		echo $Xunji->upic($file,'swzl');
	}
	
	//上传失物招领的图片
	function uploadxwqspic(){
		$file=$_FILES;
		$Xunji=spClass('spXunji');
		echo $Xunji->upic($file,'xwqs');
	}
}