<?php 

ob_start();
session_start();
require 'classes/admin_class.php';
$obj_admin = new Admin_Class();

if(isset($_GET['logout'])){
	$obj_admin->admin_logout();
}

/*

Author: MH RONY
CompunyName: Code Camp BD
Facebook Profile: https://www.facebook.com/mh.rony.dhanvi
GitHub Link: https://github.com/dev-mhrony
Youtube Channel: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
Personal Website: https://developerrony.com
Video Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw


*/