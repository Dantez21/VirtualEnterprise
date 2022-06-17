<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/style.css">

     <!-- Mainly scripts -->
    <!-- <script src="<?=base_url(); ?>/js/jquery.min.js"></script> 
    <script src="<?=base_url(); ?>js/bootstrap/css/bootstrap.min.css"></script>
    <script src="<?=base_url(); ?>js/bootstrap/js/bootstrap.min.js"></script> -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
   <div class="header">
    <!-- <div class="container"> -->
        <div class="navbar"> 
            <div class="logo">
                <a href=""><img src="images/logo1.png"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="<?=base_url()?>/home" class="exact-active">Home</a></li>
                    <li><a href="<?=base_url()?>/about" class="exact-active">About Us</a></li>
                    <li><a href="<?=base_url()?>/hire" class="exact-active">Get Hired</a></li>
                    <li><a href="<?=base_url()?>/contact" class="exact-active">Contact Us</a></li>
                    <li><a href="<?=base_url()?>/careers" class="exact-active">Careers</a></li>
                </ul>
            </nav>
            <img src="images/menubar.png" alt="#" class="menu-icon" 
            onclick="menutoggle()">
        </div>
        <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>Virtual Enterprise A Cloud Based!</h1>
                <p>Success is not always about greatness. It's about consistency.Consistent hard work gains success.Greatness will come.We provide high quality, secure, affordable and reliable IT services. We focus on modern technology to ensure our clients have the best products and services they need to run their busisness.</p>
                <a href="<?=base_url()?>/hire" class="btn" style="text-decoration:none;margin-bottom:20px;">Get Hired &#8594;</a>
            </div>
               <div class="col-2">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img style="margin-top:-150px;" src="images/image1.png" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                <h3 style="margin-top:-60px;">Customer Support</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img style="margin-top:-150px;" src="images/image3.png" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                <h3 style="margin-top:-60px;">Data entry</h3>
                                </div>
                            </div>
                            
                            <div class="item">
                                <img style="margin-top:-150px;" src="images/image4.png" alt="" style="width:100%;">
                                <div class="carousel-caption">
                                <h3 style="margin-top:-60px;">Graphic Designs</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
   </div>
   
   <!-- <div class="offer">
       <div><h3 style="text-align:center;">ABOUT US</h3></div>
           <div class="row">
               <div class="col-2">
                   <img src="images/image4.png" class="offer-img">
               </div>
               <div class="col-2">
                   <span>Graphic Designs</span>
                    <div class="graphic-desc">
                    The Smart designs features 39.9% larger
                    AMOLED color full-touch display with adjustable 
                    brightness,so everything is clear as can be.
                    </div>
                   <br>  
                   <a href="<?=base_url()?>/about" class="btn" style="text-decoration:none;">Explore &#8594;</a>
               </div>
           </div>
       </div>
   </div> -->
   <div class="offer">
       <!-- <div class="small-container"> -->
       <!-- <div><h3 style="text-align:center;">Our Testimonials</h3></div> -->
           <div class="row">
               <div class="col-2">
                   <img src="images/tesmonial1.png" id="testimonial-img" class="offer-img">
               </div>
               <div class="col-2">
                   <span>Our Testimonials</span>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="carousel-desc">
                            <img src="images/white-double-quotes.png" style="width:70px;" alt=""><br>
                            At Virtual Enterprise we believe in building a meaningful workplace where every employee plays an integral role.
                            Our clients are the heart of everything we do.We are extremely passionate about getting new products and services to the market quickly, and making life easy for our customers while remaining reliable and transparent.
                            </div>
                        </div>

                        <div class="item">
                            <div class="carousel-desc">
                                <img src="images/white-double-quotes.png" style="width:70px;" alt=""><br>
                                At Virtual Enterprise we believe in building a meaningful workplace where every employee plays an integral role.
                                Our clients are the heart of everything we do.We are extremely passionate about getting new products and services to the market quickly, and making life easy for our customers while remaining reliable and transparent.
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="carousel-desc">
                                <img src="images/white-double-quotes.png" style="width:70px;" alt=""><br>
                                At Virtual Enterprise we believe in building a meaningful workplace where every employee plays an integral role.
                                Our clients are the heart of everything we do.We are extremely passionate about getting new products and services to the market quickly, and making life easy for our customers while remaining reliable and transparent.
                            </div>
                        </div>
                    </div>
                    <div class="owl-dots">
                        <button role="button" class="owl-dot">
                            <span></span>
                        </button>
                        <button role="button" class="owl-dot">
                            <span></span>
                        </button>
                        <button role="button" class="owl-dot">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
           </div>
       </div>
   </div>
   <div class="footer">
       <div class="container">
           <div class="row">
               <div class="footer-col-1">
                    <div class="address">
                    <h4>Site Map</h4>
                    <ul>
                    <li class="foot-links-item"><a href="<?=base_url()?>/about" class="link-text">About Us</a></li>
                    <li class="foot-links-item"><a href="<?=base_url()?>/hire" class="link-text">Get Hired</a></li>
                    <li class="foot-links-item"><a href="<?=base_url()?>/contact" class="link-text">Contact Us</a></li>
                    <li class="foot-links-item"><a href="<?=base_url()?>/careers" class="link-text">Carees</a></li>
                    </ul>
                    </div>
                <!-- </ul> -->
               </div>
               <div class="footer-col-2">
                    <div class="address">
                        <h4>Business Solutions</h4>
                        <p>
                            Data Entry
                            <br>
                            Graphic Designs
                            <br>
                            Data Integration
                            <br>
                            Customer Support
                            <br>
                            Email and Social Media Management
                        </p>
                    </div>
               </div>
               <div class="footer-col-3">
                      <div class="address">
                          <h4>Useful Links</h4>
                        <ul>
                            <li class="foot-links-item"><a href="" class="link-text">Blog Post</a></li>
                        </ul>
                      </div>
               </div>
               <div class="footer-col-4">
                    <div class="address">
                        <h4>Follow Us</h4>
                        <ul>
                            <li class="foot-links-item"><a href="/facebook" class="link-text">Facebook</a></li>
                            <li class="foot-links-item"><a href="/twitter" class="link-text">Twitter</a></li>
                            <li class="foot-links-item"><a href="/instagram" class="link-text">Instagram</a></li>
                        </ul>
                    </div>
               </div>
           </div>
           <hr>
           <div class="copyright">
                <div class="with-love">Virtual Enterprise Business Solutions &nbsp;</div>
                <div class="copy">&copy; 2022 &nbsp;</div>
                <div class="rights">All Rights Reserved</div>
            </div>
       </div>
   <script>
       var MenuItems = document.getElementById("MenuItems");
       MenuItems.style.maxHeight = "0px";

       function menutoggle(){
           if(MenuItems.style.maxHeight == "0px")
           {
               MenuItems.style.maxHeight = "200px"
           }
           else{
               MenuItems.style.maxHeight = "0px"
           }
       }
   </script>
</body> 
</html>