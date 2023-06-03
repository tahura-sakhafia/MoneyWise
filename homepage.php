<?php

include 'config.php';

session_start();

$email = $_SESSION['email'];

if(!isset($email)){
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'header.php'; ?>
    <title>MoneyWise</title>
  </head>
  <body> 
      
    
    
    <header class="hero-section">
      <div class="hero-text-container">
        <h1
          >Your all-in-one digibank!</h1
        >
        <p
          >We pride ourselves on being the ultimate destination for all your banking needs in the digital age. 
          Our all-in-one digital bank brings together the convenience of traditional banking services with cutting-edge technology, providing you with a seamless and secure banking experience right at your fingertips</p
        >
        <button>Account</button>
      </div>
      <div class="hero-text-container">
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_0032e"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "width": 1000,
  "height":800,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_0032e"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
      </div>
      
    </header>
    <div class="container">
      <section class="why-us">
        <h1>Why choose us?</h1>
        <p
          >We leverage open banking to turn your bank account into your
          financial hub.<br />Control your finances like never before.</p
        >
      </section>
      <section class="features-section">
        <div class="feature-item">
          <img src="./pics/icon-online.svg" alt="" />
          <h1>Online Banking</h1>
          <p
            >Our modern web and mobile<br />
            applications allow you to keep<br />
            track of your finances where ever<br />
            you are in the world.</p
          >
        </div>
        <div class="feature-item">
          <img src="./pics/icon-budgeting.svg" alt="" />
          <h1>Simple Budgeting</h1>
          <p
            >See exactly where your money<br />
            goes every month.Recieve<br />
            notifications when you're close to<br />
            hitting your limits./p >
          </p></div
        >

        <div class="feature-item">
          <img src="./pics/icon-onboarding.svg" alt="" />
          <h1>Fast Onboarding</h1>
          <p
            >We don't do branches.Open your<br />
            accound minutes online and start<br />
            taking controll of your finances<br />
            right away.</p
          >
        </div>
        <div class="feature-item">
          <img src="./pics/icon-api.svg" alt="" />
          <h1>Open API</h1>
          <p
            >Manage your savings, investments,<br />
            pension and much more from one<br />
            account.Tracking your money has<br />
            never been easier.</p
          >
        </div>
      </section>
      <section class="blog-section">
        <h1>Latest Articles</h1>
        <div class="article-container">
          <div class="article">
            <img src="finfree.jpg" alt="" />
            <div class="content">
              <p>Achieving financial freedom requires a strategic plan, diligent saving, and smart investment choices," says John Smith<br /></p>
              <h4> John Smith</h4>
            
            </div>
          </div>
          <div class="article">
            <img src="mutualfund.jpg" alt="" />
            <div class="content">
              <p>Unleashing the Potential of Mutual Funds: A Guide to Smart Investing</p>
              <h4>Sarah Thompson</h4>
              
            </div>
          </div>
          <div class="article">
            <img src="./images/image-plane.jpg" alt="" />
            <div class="content">
              <p></p>
              <h4></h4>
              
              
            </div>
          </div>
          <div class="article">
            <img src="stock.jpg" alt="" />
            <div class="content">
              <p>Emily Johnson
</p>
              <h4>Navigating the Volatile Waters of the Stock Market</h4>
              
              
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer">
      <div class="footer-container">
        <div class="social-container">
          <img src="./pics/icon-facebook.svg" alt="" />
          <img src="./pics/icon-instagram.svg" alt="" />
          <img src="./pics/icon-twitter.svg" alt="" />
          <img src="./pics/icon-pinterest.svg" alt="" />
        </div>
        <div class="menu">
          <a href="#">About us</a>
          <a href="#">Contact us</a>
          <a href="homepage.php">Articles</a>
        </div>
        
        </div>
      </div>
    </footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

<style>/* Reset default browser styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Set a default font */
body {
  font-family: Arial, sans-serif;
}

/* Header */
.hero-section {
  background-color: #002147;
  color: #fff;
  padding: 20px;
}

.hero-text-container h1 {
  color: #fff;
}

.hero-text-container p {
  color: #fff;
}

.hero-text-container button {
  background-color: #fff;
  color: #002147;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

/* Why choose us section */
.why-us {
  padding: 20px;
}

.why-us h1 {
  color: #002147;
}

.why-us p {
  color: #002147;
}

/* Features section */
.features-section {
  display: flex;
  justify-content: space-between;
  padding: 20px;
}

.feature-item {
  text-align: center;
  margin-bottom: 20px;
}

.feature-item img {
  width: 100px;
  height: 100px;
}

.feature-item h1 {
  color: #002147;
}

.feature-item p {
  color: #002147;
}

/* Blog section */
.blog-section {
  padding: 20px;
}

.blog-section h1 {
  color: #002147;
}

.article-container {
  display: flex;
  justify-content: space-between;
}

.article {
  flex-basis: 24%;
  padding: 10px;
  border: 1px solid #ccc;
}

.article img {
  width: 100%;
  height: auto;
}

.article .content {
  padding: 10px;
}

.article p {
  color: #002147;
}

.article h4 {
  color: #002147;
}

/* Footer */
.footer {
  background-color: #002147;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.social-container img {
  width: 20px;
  height: 20px;
  margin-right: 10px;
}

.menu a {
  color: #fff;
  margin-right: 10px;
}


</style>
