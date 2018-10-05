<?PHP
	if (($_SERVER['PHP_AUTH_USER'] != "zaz") || ($_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys")){
        header('HTTP/1.0 401 Unauthorized');
        header('WWW-Authenticate: Basic realm=\'\'Members only\'\'');
        echo "<html><body>This area is only accessible to members/admins.</body></html>\n";
    } else {
    	$img = file_get_contents('../img/42.png');
    	echo "<html><body>\nHello Zaz<br />\n<img src='data:image/jpeg;base64,".base64_encode($img)."'>\n</body></html>\n";
	}
?>