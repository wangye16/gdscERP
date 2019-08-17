<?php
 class UserDao  {
   public function checkUser($username,$password){
     // $json = file_get_contents("php://input");
     // $this->load->helper('url');
     // $username=username;
     // $password=password;

     $sql='select * from member where UserName="'.$username.'", and PassWord = "'.$password.'"';
     $res=$this->db->query($sql);
     var_dump($res)
   }
 }

 ?>
