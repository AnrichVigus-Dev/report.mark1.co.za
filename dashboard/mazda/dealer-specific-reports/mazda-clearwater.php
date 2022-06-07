<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>



  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark1 Report Platform</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/mark1-logo.svg" type="image/x-icon"/>
</head>
<body>


<div id="loading-screen">
    <div class="inner-loading-cont">
        <h3>generating YOUR REPORT</h3><br>
        <img src="/img/basicloader.gif" alt="Mark1 Logo" >
    </div>
</div>    

<!-- Nav -->

    <div class="nav-inner">
        <div class="logo-container">
            <img src="/img/Mark1-logo.png" alt="Mark1 Logo" >
        </div>    
        <div class="signout-container">
             <a href="/dashboard/mazda/home.php/#dealer-reports" target="_parent" class="btn btn-danger ml-3" style="text-align:right">GO BACK</a>
        </div>    
    </div>



    <div class="report-page-header">
        <h2>Mazda Clearwater</h2>
    </div>    


    <div class="iframe-box-reports">
        <iframe src="https://platform-eu.datorama.com/external/dashboard?embedpage=c516069a-4f70-44ec-93ac-6eec31fca5ba" class="report-iframe" id="myIframe"></iframe>
    </div> 
    
    
<!-- JAVASCRIPT-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        setTimeout(function() {
        $('#loading-screen').fadeOut('fast');
    }, 1000); // <-- time in milliseconds

    
    </script>    
    
</body>
</html>

