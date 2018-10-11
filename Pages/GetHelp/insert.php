<?php
$file = 'insert.php';
$remote_file = 'PRO.txt';
$ftp_server='ftp.alleviate.5gbfree.com';
$ftp_user_name = 'chati@alleviate.5gbfree.com';
$ftp_user_pass = 'password';

$filename = "ftp://$ftp_user_name:$ftp_user_pass*@ftp.alleviate.5gbfree.com"; 
$handle = fopen($filename, "PRO.txt"); 
$contents = fread($handle, filesize($filename)); 
fclose($handle); 
echo "<form method=post name=form id=form action=".$_PHP['SELF']."><textarea name='newd' cols='50' rows='40'>".$contents."</textarea><input type=submit name=submit value=Log In>"; 
if ($submit) { 
$newdata = $_POST['email']; 
$fw = fopen('PRO.txt', 'w+') or die('Could not open file!'); 
$fb = fwrite($fw,stripslashes($newdata)) or die('Could not write to file'); 
fclose($fw); 
 
$conn_id = ftp_connect('ftp.alleviate.5gbfree.com'); 
# ftp_pasv($conn_id,TRUE);  
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// upload a file
if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
 echo "successfully uploaded $file\n";
} else {
 echo "There was a problem while uploading $file\n";
}

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password


// close the connection
ftp_close($conn_id);
?>