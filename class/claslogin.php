<?php
 class login
	{
		private function connect()
		{
			$con= mysql_connect("localhost","covid-19", "12345");
			if(!$con)
			{
				echo 'không kết nối được csdl';
				exit();
			}
			else
			{
				mysql_select_db("covid-19");
				mysql_query("SET NAMES UTF8");
				return $con;
			}
		}
		public function mylogin($user, $pass)
		{
			$pass=md5($pass);
			$link= $this->connect();
			$sql="SELECT * FROM `taikhoan` WHERE `username` like '$user' and `password` = '$pass'";
			$ketqua=mysql_query($sql, $link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
				while($row = mysql_fetch_assoc($ketqua))
				{
					$_SESSION['user']=$row['username'];
					$_SESSION['pass']=$row['password'];
					$_SESSION['role']=$row['role'];
					return true;
				}
				
			}else{
				return false;
			}
			
		}
	}
?>