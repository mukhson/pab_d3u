<?php 
class M_login extends CI_Model{
    function cek_login($user_,$passwd_){     
        #ini hanya contoh;
		$sukses=0;
		if($user_=="admin" && $passwd_== md5("admin")) $sukses=1;
		
		return $sukses;
    }  
}