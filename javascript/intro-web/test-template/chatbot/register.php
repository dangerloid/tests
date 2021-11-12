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
                  <h1 class="title">Register</h1>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <ul>
                     <li class="d-inline"><a href="index.html">Home</a></li>
                     <li class="d-inline active">Register</li>
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
         <div class="main-content">
            <!--================================
               Register -->
            <section class="iq-login-regi">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Register</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 r-mt3">
                        <form>
                           <div class="form-group">
                              <label class="mb-0" for="exampleInputName">Name</label>
                              <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                           </div>
                           <div class="form-group">
                              <label class="mb-0" for="exampleInputEmail">Email</label>
                              <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <label class="mb-0" for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                           </div>
                           <div class="form-group">
                              <label class="mb-0" for="exampleInputPassword1">Confirm Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                           </div>
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">By signing up for Databox, you agree to our <a href="#">Terms of Service</a>
                              and <a href="#">Privacy Policy.</a></label>
                           </div>
                           <button type="submit" class="button mt-2 mb-2 w-100">Register</button>
                        </form>
                     </div>
                  </div>
               </div>
            </section>
            <!--================================
               Register -->
         </div>
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