<?
class admin extends spController
{
	//sign page
	function sign(){
		echo "yyyy";
		$this->display('admin/sign.htm');
	}
	
	//login page
	function login(){
		$this->display('admin/login.htm');
	
	}
	
	//-----------------------------------------
	//sign aition
	function signaction(){
	
	}
	
	//login action
	function loginaction(){
	
	}
	
}