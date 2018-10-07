<?PHP
	session_start();

	if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] && $_GET['submit'] === "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>

<html>
<body>
	<form action="index.php" method="GET">
		login: <input type="text" name="login" value="<?PHP echo $_SESSION['login']; ?>" />
		<br/>
		pass: <input type="text" name="passwd" value="<?PHP echo $_SESSION['passwd']; ?>" /> 
		<br/>
		<input type="submit" name="submit" value="OK"/>
	</form>
</body>
</html>