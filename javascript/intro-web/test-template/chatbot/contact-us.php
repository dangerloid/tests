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
                  <h1 class="title">Contact Us</h1>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <ul>
                     <li class="d-inline"><a href="index.html">Home</a></li>
                     <li class="d-inline active">Contact Us</li>
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
            Contact -->
         <section class="iq-contactbox">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="contact-box">
                        <h3>Get in Touch</h3>
                        <form class="p-0" id="contact">
                           <div class="contact-form mt-4">
                              <div class="row">
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Name</label>
                                       <input type="text" name="name"  class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Email</label>
                                       <input type="text" name="email" class="form-control" id="email" placeholder="Your Email">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Phone</label>
                                       <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group section-field textarea wow fadeInUp" data-wow-duration="2.5s">
                                       <label class="mb-2">Message</label>
                                       <textarea class="input-message w-100" name="message"  id="message" placeholder="Type Your Message Here" rows="5"></textarea>
                                    </div>
                                    <input type="hidden" name="action" value="sendEmail">
                                    <div class="section-field iq-mt-20">
                                     <div class="g-recaptcha" data-sitekey="6LdA3mYUAAAAANpUuZTLbKM_s23tTHlcdJ7dYfgI"></div>
                                    </div>
                                    <button id="submit" name="submit" type="submit" value="Send" class="button pull-right wow fadeInUp mt-3" data-wow-duration="1.0s">Send Message</button>
                                 </div> 
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-6 r-mt3">
                     <div class="contact-bg">
                        <h2>Contact Info</h2>
                        <div class="row">
                           <div class="col-sm-12">
                              <ul class="iq-contact text-white">
                                 <li>
                                    <i class="fas fa-phone"></i>
                                    <p>+0123 456 789</p>
                                 </li>
                                 <li>
                                    <i class="fas fa-envelope"></i>
                                    <p>xyz@gmail.com</p>
                                 </li>
                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Carol J. Stephens 1635 Franklin, Montgomery, AL 36104 USA</p>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-sm-12">
                              <iframe class="w-100 mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44786.41498920801!2d9.186657089822301!3d45.44661446527242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c6a90f42bb29%3A0x3784faf1adc2c57f!2sFedEx%20World%20Service%20Center!5e0!3m2!1sen!2sit!4v1636552870538!5m2!1sen!2sit" allowfullscreen="" loading="lazy"></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--=================================
            Contact -->
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
      <!-- Google captcha code Js -->
      <script src='https://www.google.com/recaptcha/api.js'></script>
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