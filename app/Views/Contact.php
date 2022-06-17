<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/style.css">
</head>
<body>
       <div class="navbar"> 
            <div class="logo">
                <a href=""><img src="images/logo1.png"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="<?=base_url()?>/home">Home</a></li>
                    <li><a href="<?=base_url()?>/about">About Us</a></li>
                    <li><a href="<?=base_url()?>/hire">Get Hired</a></li>
                    <li><a href="<?=base_url()?>/contact">Contact Us</a></li>
                    <li><a href="<?=base_url()?>/careers">Careers</a></li>
                </ul>
            </nav>
        
            <img src="images/menubar.png" class="menu-icon" 
            onclick="menutoggle()">
        </div>
        <div class="contact-top-bar">
            <div class="contact-links">
               <div class="hire"><a href="<?=base_url()?>/home">Home</a></div>
                <div class="verticalLine vertical-line"></div>
                <div class="hire"><a href="">Contact us</a></div>
            </div>
            <div class="talk-to-us"><h1>Contact Us</h1></div>   
        </div>
        <div class="contact-form">
            <div class="wrap">
                <div class="right-side">
                    <div class="display-table">
                        <div class="vertical-align">
                            <div class="address">
                                <h4>Phone</h4>
                                <p>(+254)769352811</p>
                            </div>
                            <div class="address">
                                <h4>MPESA Paybill</h4>
                                <p>4566262</p>
                            </div>
                            <div class="address">
                                <h4>Business Hours</h4>
                                <p>
                                    "Mondays - Fridays 8.00am to 4.00pm"
                                    <br>
                                    "Suturdays - 8.00am to 12.00pm"
                                    <br>
                                    "Sundays $ Public Holidays - Closed"
                                </p>
                            </div>
                            <div class="address">
                                <h4>Address</h4>
                                <p>
                                    "Virtual Enterprise Business"
                                    <br>
                                    "Machakos Town Kamba Building,"
                                    <br>
                                    "Ground Floor, Uhuru Street,"
                                    <br>
                                    "P.O. Box 136 90400"
                                    <br>
                                    Machakos - Kenya
                                </p>
                            </div>
                            <div class="address">
                                <h4>E-mail</h4>
                                <p>
                                    <a href="mailto:hello@virtualenterprise.co.ke">hello@virtualenterprise.co.ke</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-side">
                    <div class="banner-form-wrapper">
                        <h4>Get in touch for questions, coments, or concerns. </h4>
                        <div class="banner-form-wrapper">
                            <form action="<?=base_url()?>/contact/send" id="frm_contact_us" method="post" novalidate="novalidate">
                                <div class="notification-area-notify-contact" style="display:none;"></div>
                                <input type="hidden" name value>
                                <div class="form_group">
                                    <input type="text" name="name" id="name" placeholder="Name" required>
                                </div>
                                <div class="form_group">
                                    <input type="text" name="email" id="email" placeholder="Email" required>
                                </div>
                                <div class="form_group">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="form_group">
                                    <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="form_group-btn">
                                <input type="submit" value="Send" class="contact_btn">
                                    <!-- <input type="hidden" name="task" value="contact">   
                                    <input id="btn_contact" type="submit" value="Send"> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="success_message contact_success_message" style="display:none;">
                    <img src="https://amicaca.co.ke/wp-content/themes/amica2020/images/success icon.svg" alt="icon">
                    <p>
                        "Thank you for your email"
                        <br>
                        "We will get back to you shortly."
                    </p>
                    </div> -->
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
   <!-- </div> -->
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