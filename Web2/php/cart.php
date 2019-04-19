<?php 
	/**
	 *  
	 */
	class cart
	{
		
		public static function addcart(){
			require('DataProvider.php');
			if(isset($_GET['masach']))
				$MaSach=$_GET['masach'];
			echo $MaSach;
		}
	}
?>