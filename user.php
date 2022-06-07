<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<script>
    //function redirect to page
function redirect(){
  var id= <?php echo $_GET['id'];?>;
  if(id==1){
    window.location.href = "https://report.mark1.co.za/dashboard/mazda/home.php";
  }
  if(id==2){
    window.location.href = "https://report.mark1.co.za/dashboard/remax/home.php";
  }
}
redirect();
</script>


record set up en dan quaries 

post and not get