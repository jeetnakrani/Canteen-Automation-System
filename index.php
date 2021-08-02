<?php
session_start();
?>

<html>

  <head>
    <title> Home | CAS </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Canteen Automation System</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li class="active" ><a href="Locations.php">Our Locations</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    <div class="wide">
        <div class="tagline">Good Food is Good Mood</div>
    </div>
    <!--<center><img src="images/orderimg.png" alt="image" height="50%"></center>-->
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="wide2">
        <div class="col-xs-4 box">
          <img src="images/minimumx.png" height="200px">
        </div>
        <div class="col-xs-4 box">
          <img src="images/locationx.png">
        </div>
        <div class="col-xs-4 box">
          <h2><strong>NO MINIMUM<br> ORDER <br> </strong><hr> </h2>
          <h4>Order any amount<br> you want - no<br> restrictions</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>SUPERFAST<br> <br> </strong><hr> </h2>
          <h4>Hot food served <br> while you Arrive</h4>
        </div>
    </div>

     <div class="col-xs-12 line"><hr></div>

     <div class="paragraph1">
     <h1>Welcome to your Canteen</h1>
    <p>
      Well whatever the shower love on us, we believe Athiti devo bhave... Right as always</h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
     <h1> Good Food is Good Mood</h1>
    <p><br> 
      <h4>
        CAS helps you to choose the dishes from your class room and the food will be served when you Arrive at the Canteen.
      </h4>
    </p>
    <p>
      <h4>
        There are two ways you can <font color="green"><strong>order food online</strong></font> with us. <font color="green"><strong>Browse CAS in the web</strong></font> 
      </h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
          <h1>HOW TO ORDER?</h1>
          <p>
            <h4>
              All it takes is 3 easy steps:
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT YOUR CITY AND Canteen listed in the selection</u>
            </h3>
          </p>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT YOUR Canteen</u>
            </h3>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>CHOOSE YOUR DISHES AND PAY ONLINE/OFFLINE</u>
            </h3>
          </p>
          <p>
            <h4>
              Once you select your Canteen and then on the Menu. Click on the dishes you have been waiting to enjoy and they get added to the cart automatically.
            </h4>
          </p>
          <br>
          <p>
            <h4>
              An ideal way to save your Time
            </h4>
          </p>
      </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
</body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> CAS-SPHT All rights Reserved </p>
  <br>
  </footer>
</html>