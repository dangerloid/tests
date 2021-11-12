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
                  <h1 class="title">Feedback</h1>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <ul>
                     <li class="d-inline"><a href="index.html">Home</a></li>
                     <li class="d-inline active">Feedback</li>
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
         <!--=================================
            Feedback -->
         <section class="feedback">
            <div class="container">
               <div class="row justify-content-md-center">
                  <div class="col-lg-8 col-md-12 col-sm-12 text-center position-relative">
                     <div class="counter">
                        <div class="title-box">
                           <h2 class="title text-dark"><span class="timer" data-to="575" data-speed="5000">575</span> Up Customer <span>Feedback</span></h2>
                           <p class="mt-4">It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active feedback-box">
                        <div class="row mt-5 align-items-center">
                           <div class="col-lg-6 col-md-12 col-sm-12">
                              <h5 class="title text-dark"><i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</i></h5>
                              <div class="name mt-5 ml-5">
                                 <h4 class="sub-title">Peter Deo</h4>
                                 <p>CEO-Vizion</p>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-12 col-sm-12">
                              <img class="img-fluid" src="images/feedback/feedback-img1.png" alt="image">
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item feedback-box">
                        <div class="row mt-5 align-items-center">
                           <div class="col-lg-6 col-md-12 col-sm-12">
                              <h5 class="title text-dark"><i>Variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</i></h5>
                              <div class="name mt-5 ml-5">
                                 <h4 class="sub-title">Rose Parker</h4>
                                 <p>CEO-Vizion</p>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-12 col-sm-12">
                              <img class="img-fluid" src="images/feedback/feedback-img2.png" alt="image">
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <i class="fas fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <i class="fas fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </section>
         <!--=================================
            Feedback -->
      </div>
      <!--=================================
         MAIN CONTENT -->
            <!--=================================
         Footer -->
      <?php include('footer.php');?>
      <!--=================================
         Footer -->  
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