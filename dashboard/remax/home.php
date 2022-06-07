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
    <link rel="stylesheet" href="https://report.mark1.co.za/css/style.css" target="_parent">
    <link rel="shortcut icon" href="/img/mark1-logo.svg" type="image/x-icon"/>

</head>
<body>


<!-- Nav -->



    <div class="nav-inner">
        <div class="logo-container">
            <img src="/img/Mark1-logo.png" alt="Mark1 Logo" >
        </div>    
        <div class="signout-container">
             <a href="https://report.mark1.co.za/index.html">LOGOUT</a>
        </div>    
    </div>



<!-- Top Image -->



    <div class="main-page-header-container remax-header">

        <div class="client-header-container clearfix">
          <h2>RE/MAX<br>Southern Africa</h2>
        </div>

      <div class="tagline-container">
        <h4>Made to Measure</h4>
      </div>  

      <div class="scroll-down-box">
          <img src="/img/down-arrow.png" width="50px"><br>
          <a href="#mazda-ovrview-section">Scroll Down</a>
      </div>  

    </div>





<!-- RE/MAX report section -->

<div class="mazda-ovrview-section" id="mazda-ovrview-section">
    <div class="mazda-ovrview-section-inner">
        

      <!-------------------- REMAX Digital overview report Section -------------------->

  
      <div class="remax-digital-overview" id="remax-overview">
        <div class="remax-digital-overview-inner" >
          <div class="report-spesific-header clearfix" >
              <h2>RE/MAX DIGITAL<br>MEDIA OVERVIEW</h2>
              <button class="show-report-btn remax-overview-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/remax/digital-media-overview.php'" target="_parent" >SHOW REPORT</button>
          </div>
        </div>  
      </div>


  <!-------------------- REMAX CAMPAIGN SPECIFIC REPORTS -------------------->


      <div class="report-spesific-header clearfix" id="campaign-specific-report">
          <h2>CAMPAIGN SPECIFIC REPORTS</h2>
        </div>
      


      <div class="two-col-2-row" >



          <div class="grid-box-one">
            <div class="recruitment-campaigns">
              <div class="box-inner-container">
                <h3>Recruitment Campaigns</h3>
                <button class="show-report-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/remax/campaign-specific-reports/recruitment-campaigns.php'" target="_parent" >SHOW REPORT</button>
              </div>
            </div> 
          </div>




          <div class="grid-box-one">
          <div class="remax-always-on">
              <div class="box-inner-container">
                <h3>Always On Campaigns</h3>
                <button class="show-report-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/remax/campaign-specific-reports/always-on-campaigns.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>

         

          <div class="grid-box-one">
          <div class="remax-competition-campaigns">
              <div class="box-inner-container">
                <h3>Competition Campaigns</h3>
                <br>
                <button class="show-report-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/remax/campaign-specific-reports/competition-campaigns.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>




          <div class="grid-box-one">
          <div class="remax-sign-you-want">
              <div class="box-inner-container">
                <h3>SIGN YOU WANT</h3>
                <br>
                <button class="show-report-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/remax/campaign-specific-reports/sign-you-want.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>

         

      </div>  
  </div>    




 <!-------------------- Footer -------------------->

 <footer class="footer">
   <a href="https://mark1.co.za/" id="footer logo btn"><img src="/img/MARK1_LOGO_White.svg" alt="Mark1 Logo"></a>
   <p>© <span id="year"></span> Mark1 | All Rights Reserved</p>
  </footer>  

  
<!-- JAVASCRIPT-->

  <script src="/js/main.js"></script>

</body>
</html>
