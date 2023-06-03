<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<link rel="stylesheet" type="text/css" href="style.css">

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/trexistential/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/syedatahura/" class="fab fa-linkedin"></a>
         </div>
         <p>New <a href="login.php">Login</a>|<a href="register.php">Register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">MoneyWise</a>

         <nav class="nav-bar">
        <img src="./pics/logo.png" alt="" />
        <div class="nav-items">
          <a href="homepage.php">Home</a>
          <a href="withdrawal.php">Withdrawal</a>
          <a href="deposit.php">Deposit</a>
          <a href="stockmarketinfo.php">Stock Market</a>
          <a href="mutualfund.php">Mutual Funds</a>
        </div>
        <button>Account</button>
      </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
        
         </div>

         <div class="user-box">
            
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
      </div>
   </div>

</header>

<style> /* Global Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
}

a {
  text-decoration: none;
  color: inherit;
}

/* Header Styles */
.header {
  background: #002147;
  padding: 20px;
  color: #fff;
}

.header-1 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #002147;
}

.flex {
  display: flex;
  align-items: center;
}

.share a {
  margin-right: 10px;
}

.header-2 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 10px;
  background: #002147;

}

.logo {
  font-size: 24px;
  font-weight: bold;
}

.nav-bar {
  display: flex;
  align-items: center;
  background: #002147;

}

.nav-items {
  display: flex;
  margin-left: 20px;
}

.nav-items a {
  margin-right: 10px;
}

.icons {
  display: flex;
  align-items: center;
}

.user-box {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  background-color: #fff;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.user-box a {
  display: block;
  margin-bottom: 5px;
}

.delete-btn {
  color: red;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .header-1 {
    flex-direction: column;
    align-items: flex-start;
  }
  
  .header-2 {
    flex-direction: column;
    align-items: flex-start;
    margin-top: 20px;
    background: #002147;

  }
  
  .nav-bar {
    flex-direction: column;
    align-items: flex-start;
    margin-top: 10px;
  }
  
  .nav-items {
    flex-direction: column;
    margin-top: 10px;
  }
  
  .nav-items a {
    margin-right: 0;
    margin-bottom: 5px;
  }
  
  .user-box {
    position: static;
    margin-top: 10px;
  }
}
</style>