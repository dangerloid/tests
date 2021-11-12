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
                  <h1 class="title">Support</h1>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <ul>
                     <li class="d-inline"><a href="index.html">Home</a></li>
                     <li class="d-inline active">Support</li>
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
            Support -->
         <section class="support">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-sm-8 text-center">
                     <div class="title-box">
                        <h2 class="title text-dark">Welcome to <span>Chatbot Support</span></h2>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-sm-8 text-center">
                     <form class="form-inline justify-content-center mt-4">
                        <div class="form-group mb-2">
                           <input type="email" class="form-control" id="exampleFormControlInput" placeholder="Search Support">
                        </div>
                        <button type="submit" class="button mb-2">Search</button>
                     </form>
                  </div>
               </div>
               <div class="row mt-5">
                  <div class="col-lg-4 col-sm-12">
                     <div class="title-box mt-5">
                        <h3 class="title text-dark">Top <span>Searches</span></h3>
                        <ul class="list-group list-group-flush mt-4">
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">It is a long established fact</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">That a reader will be distracted</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">Contrary to popular belief.</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">There are many variations</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">If you are going to use a passage</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                     <div class="title-box mt-5">
                        <h3 class="title text-dark">New <span>Searches</span></h3>
                        <ul class="list-group list-group-flush mt-4">
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">It is a long established fact</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">That a reader will be distracted</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">Contrary to popular belief.</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">There are many variations</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">If you are going to use a passage</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12">
                     <div class="title-box mt-5">
                        <h3 class="title text-dark"><span>Troubleshooting</span></h3>
                        <ul class="list-group list-group-flush mt-4">
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">It is a long established fact</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">That a reader will be distracted</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">Contrary to popular belief.</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">There are many variations</a></li>
                           <li class="list-group-item pt-2 pb-2 pl-0"><a href="#">If you are going to use a passage</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            Support -->
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