<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Vizion - Al/ML - Chatbot Responsive HTML5 Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Magnific Popup CSS-->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Chatbot -->
      <link rel="stylesheet" href="css/chatbot.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
      <!-- loading -->
      <div id="loading">
         <div id="loading-center">
            <img src="images/nascar.gif" alt="loder">
         </div>
      </div>
      <!-- loading End -->
      <!--=================================
         Header -->
      <?php include('header.php');?>
      <!--=================================
         Header -->
      <!--=================================
         Banner -->
      <div class="breadcrumbs">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6 col-sm-12">
                  <h1 class="title">Login</h1>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <ul>
                     <li class="d-inline"><a href="index.html">Home</a></li>
                     <li class="d-inline active">Login</li>
                  </ul>
               </div>
            </div>
         </div>
         <img class="img-fluid breadcrumbs-after" src="images/banner/banner-after.png" alt="image">
      </div>
      <!--=================================
         Banner -->
      <!--=================================
         MAIN CONTENT -->
      <div class="main-content">
         <!--================================
            Login -->
         <section class="iq-login-regi">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <h2>Login</h2>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                     <h5 class="mt-5">You can Login With <i class="fa fa-hand-o-down" aria-hidden="true"></i></h5>
                     <ul class="iq-media mt-3">
                        <li><a href="#" class="fb"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus"><i class="fab fa-google"></i></a></li>
                        <li><a href="#" class="lkd"><i class="fab fa-linkedin"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 r-mt3">
                     <form>
                        <div class="form-group">
                           <label class="mb-0" for="exampleInputEmail1">Email Address</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                           <label class="mb-0" for="exampleInputPassword1">Password</label>
                           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                              </div>
                           </div>
                           <div class="col-sm-6 text-right">
                              <a href="#" class="link">Forgot Password?</a>
                           </div>
                        </div>
                        <button type="submit" class="button mt-2 mb-2 w-100">Login</button>
                        <div class="text-center">
                           <div class="small-text mt-1 link">Don't Have an Account? <a href="register.html">Register Now</a></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
         <!--================================
            Login -->
      </div>
      <!--=================================
         MAIN CONTENT -->
            <!--=================================
         Footer -->
      <?php include('footer.php');?>
      <!--=================================
         Footer -->     
      <!--=================================
         Chatbot -->     
      <div id="body">
         <div id="chat-circle" class="btn btn-raised">
            <i class="ion-chatbubble-working"></i>
         </div>
         <div class="chat-box">
            <div class="chat-box-header">
               <h5 class="title">ChatBot</h5>
               <span class="chat-box-toggle"><i class="ion-close-round"></i></span>
            </div>
            <div class="chat-box-body">
               <div class="chat-box-overlay">   
               </div>
               <div class="chat-logs">
               </div>
               <!--chat-log -->
            </div>
            <div class="chat-input">
               <form>
                  <input type="text" id="chat-input" placeholder="Send a message..."/>
                  <button type="submit" class="chat-submit" id="chat-submit"><i class="ion-ios-paperplane"></i></button>
               </form>
            </div>
         </div>
      </div>
      <!--=================================
         Chatbot --> 
      <!--=================================
         Cookies -->
      <div id="cookie_div" class="align-items-center"> We use cookies to give you tailored experiences on our website.
         <a class="button grey text-right ml-3" href="#" role="button" id="cookie">Accept </a>
      </div>
      <!--=================================
         Cookies -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Owl Carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Wow -->
      <script src="js/wow.min.js"></script>
      <!-- App Min -->
      <script src="js/app.min.js"></script>
      <!-- Chatbot -->
      <script src="js/chatbot.js"></script>
      <!-- main -->
      <script src="js/main.js"></script>
      <!-- Custom -->
      <script src="js/custom.js"></script>
   </body>
</html>