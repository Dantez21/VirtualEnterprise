<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
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
        <div class="top-bar">
            <div class="my-links">
                <div class="hire"><a href="<?=base_url()?>/home">Home</a></div>
                <div class="verticalLine vertical-line"></div>
                <div class="hire"><a href="">Careers</a></div>
            </div>
        </div>
        <div class="border-bottom-bar"></div>
        <div class="container1">
            <div class="org-info">
            <h3 class="desc-title">Get to know more about us...!!!</h3>
                <div class="text-description1">
                    At Virtual Enterprise we believe in building a meaningful workplace where every employee plays an integral role.
                    Our clients are the heart of everything we do.We are extremely passionate about getting new products and services to the market quickly, and making life easy for our customers while remaining reliable and transparent.
                </div>
                <h3 class="desc-title">We are glad and happy to work here. so will you?</h3>
                <div class="text-description">
                    We strive to push through frontlers in everything we do and nothing would make us happier than to have you join us a team that promises you career growth in an innovative, friendly and collaborative environment.
                </div>

                <div class="cad-items">
                    <h3 class="desc-title" style="text-align:center;">Team:</h3>
                    <div class="card-desc" style="font-size:13px;">
                    Virtual Enterprise team we are excited to invites you to be part of our innovative team. We appreciate the importance of collaborations and cooperation in achieving our goals. We also commit to continuous improvement in ourselves, products, services, processes and the way we do things technologically. 
                    </div>
                </div>
            </div>
            <div class="glass">
                <div class="glass-description">
                    <h3 class="glass-title">Our Articles</h3>
                    <ul id="article">
                        <li>Graphics Design</li>
                    </ul>
                    <ul id="article">
                        <li>Data Entry</li>
                    </ul>
                    <ul id="article">
                        <li>Data Integration</li>
                    </ul>
                    <ul id="article">
                        <li>UI/UX Design</li>
                    </ul>
                    <ul id="article">
                        <li>Customer Support</li>
                    </ul>
                    <ul id="article">
                        <li>Email and Social Media Management</li>
                    </ul>
                    <a href="<?=base_url()?>/about" class="btn" style="text-decoration:none;">More details &#8594;</a>
                </div>
            </div>
        </div>
    <div class="footer">
       <div class="container">
           <div class="row">
               <div class="footer-col-1">
               <!-- <ul class="foot-links" style="color:#ffff"> -->
                    <div class="address">
                    <!-- <li class="foot-links-header">Site Map</li> -->
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