	 <?php
require 'dc.php';
session_start();
$_SESSION['ocname'];
$_SESSION['ocemail'];
$surname=$_POST['surname'];
$firstname=$_POST['firstname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=sha1($_POST['password']);
$pass=sha1($_POST['passwor']);
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileType = $_FILES['fileToUpload']['type'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ( $target_file > 900000) {
    $msgis="Sorry, your file is too large!!!";

     include'sign.php';
    $uploadOk = 0;
}

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "<script>alert('Sorry, file already exists')</script>.";
//     include 'register.php';
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["fileToUpload"]["size"] > 900000) {
   echo"Sorry, your file is too large!!!";
    include'sign.php';
    $uploadOk = 0;
}

if($imageFileType != 'jpg' and 'png' and 'jpeg' )
{
     $msgit="Sorry, your image type is unknown!!!";
     include'sign.php';
    
   
}
else{
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ;
	$save=mysqli_query($con, "insert into admin_tb(surname,firstname,username,email,password,passport,date,time,church,chmail)values('$surname','$firstname', '$username','$email','$password','$target_file','$date','$time','$_SESSION[cname]','$_SESSION[cemail]')");

}
if ($save) {
        header("location:index.html");
    
}
else{
    echo mysqli_error($con);
}

 ?>`