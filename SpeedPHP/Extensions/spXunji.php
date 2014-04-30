<?php
class spXunji{

	/*
	 * 图片上传操作
	 * @param $files 
	 * @param $ope[banner]|[pic]
	 * @return 0 上传失败
	 * 		  -1 格式大小不对
	 * 		  -2 无操作
	 *    string 返还上传位置
	 */
	function upic($file,$ope,$id){
		switch ($ope){
			case 'banner':
				if ((($file["file"]["type"] == "image/gif")
						|| ($file["file"]["type"] == "image/jpeg")
						|| ($file["file"]["type"] == "image/pjpeg"))
						&& ($file["file"]["size"] < 10000000)){
						$pic_name='/banner/' . $id . "_" . time();
						echo 'aaa';
						if($file['file']['type']=='image/jpeg' or $file['file']['type']=='image/pjpeg'){
							$update=move_uploaded_file($file["file"]["tmp_name"],UP_PATH . $pic_name . '.jpg');
							if($update){
								return $pic_name . '.jpg';								
							}else{
								return '0';
							}
						}else if($file["file"]["type"] == "image/gif"){
							$update=move_uploaded_file($file["file"]["tmp_name"],UP_PATH . $pic_name . '.gif');
							if($update){
								return $pic_name . '.gif';
							}else{
								return '0';
							}
						}
					}else {
					return '-1';
				}
				break;
			case 'swzl':
				if ((($file["file"]["type"] == "image/gif")
						|| ($file["file"]["type"] == "image/jpeg")
						|| ($file["file"]["type"] == "image/pjpeg"))
						&& ($file["file"]["size"] < 10000000)){
					$pic_name='/swzl/' . $id . "_" . time();
						if($file['file']['type']=='image/jpeg' or $file['file']['type']=='image/pjpeg'){
							$update=move_uploaded_file($file["file"]["tmp_name"],UP_PATH . $pic_name . '.jpg');
							if($update){
								return $pic_name . '.jpg';								
							}
						}else if($file["file"]["type"] == "image/gif"){
							$update=move_uploaded_file($file["file"]["tmp_name"],UP_PATH . $pic_name . '.gif');
							if($update){
								return $pic_name . '.gif';
							}
						}
					}else {
					return '-1';
				}
				break;
			case 'xwqs':
				if ((($file["file"]["type"] == "image/gif")
						|| ($file["file"]["type"] == "image/jpeg")
						|| ($file["file"]["type"] == "image/pjpeg"))
						&& ($file["file"]["size"] < 10000000)){
					$pic_name='/xwqs/' . $id . "_" . time();
						if($file['file']['type']=='image/jpeg' or $file['file']['type']=='image/pjpeg'){
							$update=move_uploaded_file($file["file"]["tmp_name"],UP_PATH . $pic_name . '.jpg');
							if($update){
								return $pic_name . '.jpg';								
							}
						}else if($file["file"]["type"] == "image/gif"){
							$update=move_uploaded_file($file["file"]["tmp_name"],UP_PATH . $pic_name . '.gif');
							if($update){
								return $pic_name . '.gif';
							}
						}
					}else {
					return '-1';
				}
				break;
			default:
				return '-2';
				break;
		}
	}
	function setpage($page,$pagenum){
		if($page=="all"){
			$set_page=null;
		}else if($page=='1'||$page==''||$page=='0'){
			$start='0';
			$set_page= $start . ',' . $pagenum;
		}else if($page>'1'){
			$start=($page-1)*$pagenum;
			$set_page= $start . ',' . $pagenum;
		}else {
			return '0';
		}
		return $set_page; 
	}
	function getip(){
		if (@$_SERVER["HTTP_X_FORWARDED_FOR"])
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		else if (@$_SERVER["HTTP_CLIENT_IP"])
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		else if (@$_SERVER["REMOTE_ADDR"])
			$ip = $_SERVER["REMOTE_ADDR"];
		else if (@getenv("HTTP_X_FORWARDED_FOR"))
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		else if (@getenv("HTTP_CLIENT_IP"))
			$ip = getenv("HTTP_CLIENT_IP");
		else if (@getenv("REMOTE_ADDR"))
			$ip = getenv("REMOTE_ADDR");
		else
			$ip = "Unknown";
		return $ip;
	}
		
}