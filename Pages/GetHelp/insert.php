<?php
$file = 'insert.php';
$remote_file = 'PRO.txt';
$ftp_server='ftp.alleviate.5gbfree.com';
$ftp_user_name = 'chati@alleviate.5gbfree.com';
$ftp_user_pass = 'password';

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// upload a file
if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
 echo "successfully uploaded $file\n";
} else {
 echo "There was a problem while uploading $file\n";
}

// close the connection
ftp_close($conn_id);
?>