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



    <div class="main-page-header-container mazda-header">

        <div class="client-header-container clearfix">
          <h2>Mazda Southern Africa MEDIA REPORT</h2>
        </div>

      <div class="tagline-container">
        <h4>Made to Measure</h4>
      </div>  

      <div class="scroll-down-box">
          <img src="/img/down-arrow.png" width="50px"><br>
          <a href="#mazda-ovrview-section">Scroll Down</a>
      </div>  

    </div>





<!-- Mazda Overview report section -->

<div class="mazda-ovrview-section" id="mazda-ovrview-section">
    <div class="mazda-ovrview-section-inner">
        

      <!-------------------- Mazda overview reports Section -------------------->

  
      <div class="report-spesific-header clearfix" id="mazda-overview">
          <h2>MAZDA OVERVIEW REPORTS</h2>
        </div>
      



      <div class="two-col-2-row" >



          <div class="grid-box-one">
            <div class="mazda-digital-overview">
              <div class="box-inner-container">
                <h3>DIGITAL MEDIA OVERVIEW</h3>
                <button class="show-report-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/overview-reports/digital-overview.php'" target="_parent" >SHOW REPORT</button>
              </div>
            </div> 
          </div>




          <div class="grid-box-one">
          <div class="mazda-alwsay-on-brand">
              <div class="box-inner-container">
                <h3>Always On Brand & Retail OR Tabled Comparison</h3>
                <button class="show-report-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/overview-reports/always-on-brand.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>

         

          <div class="grid-box-one">
          <div class="mazda-on-page">
              <div class="box-inner-container">
                <h3>ON PAGE CONTENT</h3>
                <br>
                <button class="show-report-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/overview-reports/on-page-content.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>




          <div class="grid-box-one">
          <div class="digital-search-pilot">
              <div class="box-inner-container">
                <h3>Digital search pilot overview</h3>
                <br>
                <button class="show-report-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/overview-reports/digital-search-pilot-overview.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>

         

      </div>      


      <!-------------------- Nameplate Breakout Report Section -------------------->

      <div class="report-spesific-header clearfix" id="mazda-name-plate">
          <h2>Nameplate Breakout Reports</h2>
        </div>
      





        <div class="two-col-3-row" >

        
        <div class="grid-box-one">
          <div class="mazda2">
              <div class="box-inner-container">
                <h3 class="mazda-motor-names">Mazda2</h3>
                <br>
                <button class="mazda-name-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/nameplate-breakout-reports/mazda2.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>     
          
          <div class="grid-box-one">
          <div class="mazda3">
              <div class="box-inner-container">
                <h3 class="mazda-motor-names">MAZDA3</h3>
                <br>
                <button class="mazda-name-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/nameplate-breakout-reports/mazda3.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>     
          
          <div class="grid-box-one">
          <div class="mazdacx3">
              <div class="box-inner-container">
                <h3 class="mazda-motor-names">MAZDA CX-3</h3>
                <br>
                <button class="mazda-name-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/nameplate-breakout-reports/mazda-cx-3.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>     
          
          <div class="grid-box-one">
          <div class="mazdacx30">
              <div class="box-inner-container">
                <h3 class="mazda-motor-names">MAZDA CX-30</h3>
                <br>
                <button class="mazda-name-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/nameplate-breakout-reports/mazda-cx-30.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>    
          
          <div class="grid-box-one">
          <div class="mazdacx30carbon">
              <div class="box-inner-container">
                <h3 class="mazda-motor-names">CX-30 Carbon</h3>
                <br>
                <button class="mazda-name-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/nameplate-breakout-reports/mazda-cx-30-carbon.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>    
          
          <div class="grid-box-one">
          <div class="mazdacx5">
              <div class="box-inner-container">
                <h3 class="mazda-motor-names"3>Mazda CX-5</h3>
                <br>
                <button class="mazda-name-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/nameplate-breakout-reports/mazda-cx-5.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>    
          
          <div class="grid-box-one">
          <div class="mazdabt50">
              <div class="box-inner-container">
                <h3 class="mazda-motor-names">MAZDA BT-50</h3>
                <br>
                <button class="mazda-name-btn" onclick="window.location.href='https://report.mark1.co.za/dashboard/mazda/nameplate-breakout-reports/mazda-bt-50.php'">SHOW REPORT</button>
              </div>
            </div> 
          </div>     
          

        </div> 

    <!-------------------- Deaker Specific Reports Section -------------------->


        <div class="report-spesific-header clearfix" id="dealer-reports">
          <h2>Dealer SPECIFIC REPORTS</h2>
        </div>
      

        <div class="dealer-spesific-section"> 
          <div class="dealer-box-1">
            <img src="/img/SA-map.svg" alt="SA Map">
          </div>
          <div class="dealer-box-2">
            <ul>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/allen-joss-mazda.php">Allen Joss Mazda</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/barloworld-mazda-bruma.php">Barloworld Mazda Bruma</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/ben-morgenrood-mazda.php">Ben Morgenrood Mazda</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/eagle-mazda.php">Eagle Mazda</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/fury-mazda-fourways.php">Fury Mazda Fourways</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/fury-mazda-woodmead.php">Fury Mazda Woodmead</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/lazarus-mazda.php">Lazarus Mazda</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/mazda-clearwater.php">Mazda Clearwater</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/mazda-east-rand.php">Mazda East Rand</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/mazda-edenvale.php">Mazda Edenvale</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/mazda-johannesburg-south.php">Mazda Johannesburg South</a></li>
              <li><a href="https://report.mark1.co.za/dashboard/mazda/dealer-specific-reports/mazda-vereeniging.php">Mazda Vereeniging</a></li>
              
            <ul>  
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
