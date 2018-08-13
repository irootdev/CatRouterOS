<?php
	session_start();

	if (strlen($_GET['logout']) > 0) { unset($_SESSION['auth']); header("Location: index.php"); }
	
	include('db.php');
	if ((!isset($_POST['login'])) || (!isset($_POST['password']))) {
		$error_message = "";
	} else {
		$log  = $_POST['login'];
		$pass = $_POST['password'];
		
		if ((strlen($log) > 1) && (strlen($pass) > 1)) {
			if ( ($log === $usr) && ($pass === $pas)) {
				$_SESSION['auth'] = 'true';
			} else {
				$error_message = "Cat's fuck you XD";
			}
		} else {
			$error_message = "Pls enter login and password...";
		}
	}

	
	if (!isset($_SESSION['auth'])) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CatRouter router configuration page</title>
<style type="text/css">
body {
font-family: Verdana, Geneva, sans-serif;
font-size: 11px;
}
img {border: none}
img:hover {opacity: 0.8;}
h1 {
font-size: 1.7em;
display: inline;
margin-bottom: 10px;
}
fieldset {
margin-top: 20px;
background: #fff;
padding: 20px;
border: 1px solid #c1c1c1; 
}
#container {
width: 70%;
margin: 10% auto;
}
#box {
background-color: #fff; 
-moz-border-radius: 7px; 
-webkit-border-radius: 7px; 
border: 1px solid #c1c1c1; 
padding: 30px;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f3f3f3'); /* for IE */
background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#f3f3f3)); /* for webkit browsers */
background: -moz-linear-gradient(top,  #fff,  #f3f3f3); /* for firefox 3.6+ */
}
.floater {float: left; margin-right: 10px;}
.floater label {display: block; text-align: center;}

#login {
    margin: 2em 0 4em 0;
}
#login h2 {
    font-weight: normal;
    font-size: 14px;
    margin: 0 0 0.5em 1em;
}
#login td {
    padding: 0 4px 0 0;
}
#login td.label {
    text-align: right;
}
#login td.toolbar {
    padding: 0 0 0 1em;
    vertical-align: top;
}
#login ul.toolbar {
    margin: 0;
}
#login input {
    margin: 2px;
    padding: 2px;
    border: 1px solid #888;
    box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    -webkit-box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    -moz-box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
}
#error {
    display:none;
    color:red;
    padding: 1em 0 0 0;
}
ul.toolbar {
    font-size: 11px;
    text-align: left;
    list-style-type: none;
    padding: 0;
    margin: 2px 0 4px 2px;
}
ul.toolbar li {
    float: left;
    vertical-align: middle;
}
ul.toolbar a {
    float: none;
    display: block;
    margin: 2px 4px 2px 0;
    padding: 5px;

    background: #ddd;
    border: 1px solid #888;
    border-radius: 3px;
    -moz-border-radius: 3px;
    box-shadow:
        1px 1px 2px rgba(255,255,255,0.8) inset,
	0 10px 10px -5px rgba(255,255,255,0.5) inset, /* top gradient */
	1px 1px 2px rgba(0,0,0,0.2); /* shadow */
    -webkit-box-shadow:
        1px 1px 2px rgba(255,255,255,0.8) inset,
	0 10px 10px -5px rgba(255,255,255,0.5) inset,
	1px 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow:
        1px 1px 2px rgba(255,255,255,0.8) inset,
	0 10px 10px -5px rgba(255,255,255,0.5) inset,
	1px 1px 2px rgba(0,0,0,0.2);
    color: #000;

    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    cursor: inherit;
    min-width: 4em;

    -webkit-transition: background 0.2s linear, box-shadow 0.2s ease-out;
    -moz-transition: background 0.2s linear, box-shadow 0.2s ease-out;
}
ul.toolbar a:hover {
    background: #eee;
}
ul.toolbar a:active {
    background: #aaa;
    box-shadow: 1px 1px 2px #999 inset;
    -webkit-box-shadow: 1px 1px 2px #999 inset;
    -moz-box-shadow: 1px 1px 2px #999 inset;
}
</style>

</head>

<body>

<div id="container">

    <div id="box">
    <a href="#"><img src="stf.png" style="float: right;" /></a>

    <br style="clear: both;"/>
    
		<h1>CatOS v1.1.1</h1>
        
        <p>You have connected to a router. Administrative access only. If this device is not in your possession, please contact your local network administrator. </p>
      <form action="index.php" method="POST">  
      <table id="login">
		<tr><td colspan="3"><h2>CatOS Login:</h2>
			<tr><td class="label">Login: <td><input id="name" type="text" name="login" tabindex="1">
		 <td class="toolbar" rowspan="2">
			 <ul class="toolbar">
		   <li><input type="submit"></li>
			 </ul>
			 <tr><td class="label">Password: <td><input id="password" type="password" name="password" tabindex="2">
		<tr>
			<div style="color:red;"><?php if (strlen($error_message) > 1) echo $error_message; ?></div>
      </table>
      </form>      
           
            <br style="clear: both"/> 
                            <div style="float: right">&copy; Scriptop Hacker Quest III</div>

    </div>
</div>

</div>

</body>
</html>

<?php
	} else {

?>
// TODO...
<a href="index.php?logout=1">Logout</a>
// TODO...
// TODO...
<?php
	}
?>
