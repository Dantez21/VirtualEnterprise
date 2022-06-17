<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/style.css">
    <title>About Us</title>
</head>
<body>
    <!-- <div class="container"> -->
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
    <section id="about-top">
        <div class="row">
          <div class="container2">
              <div class="col-2">
                  <div class="hero-content">
                      <div class="hero-content-heading">
                          <h3 class="heading">
                          Virtual Enterprise Inspiring you with opportunities and solutions to grow your business.
                          </h3>
                      </div>
                      <div class="text-content">
                        We highly provide premium IT solutions to our clients to grow and solve their business problems.
                      </div>
                      <a href="<?=base_url()?>/hire" class="btn" style="text-decoration:none;">Get Hired &#8594;</a>
                  </div>
              </div>
              <div class="col-2">
                  <div class="hero-img">
                      <!-- <img src="images/image1.png" alt="Image"> -->
                  </div>
              </div>
          </div>
        </div>
    </section>
    <section id="services">
      <div class="container">
         <h3 class="section-title">Core Values</h3>
            <div class="container-statements">
            <div class="container-services-items">
                <div class="card-title">Vision</div>
                <div class="card-desc">
                Our aim is to be the one-stop provider in IT services and solutions to small business and our clients globally.
                </div>
            </div>
            <div class="container-services-items">
                <div class="card-title">Mission</div>
                <div class="card-desc">
                We aim to promote, organize and administer innovative and accessible IT solutions in order to afford our clients the opportunity to grow in their business.  
                </div>
            </div>
            </div>
            <!-- <h3 class="section-title">Our Services</h3>       -->
      </div>
    </section>
    <h3 class="section-title" style="text-align:center;">Our Services</h3>   
    <div class="container3">
        <div class="card">
            <div class="face face1">
                <div class="content">
                   <img src="images/graphic-des.png" style="margin-left:30px;" alt="">
                    <h3>Graphic Designs</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>At Virtual Enterprise we design premium graphics which fits customers desire.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="images/dataentry.png" style="margin-left:30px;" alt="">
                    <h3>Customer Support</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>At Virtual Enterprise we design premium graphics which fits customers desire.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="images/figma1.png" alt="">
                    <h3>UI/UX Designs</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>At Virtual Enterprise we design premium graphics which fits customers desire.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container3" style="margin-top:-80px;">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="images/data-integration.png" style="margin-left:80px;" alt="">
                    <h3>Data integration and analysis</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>At Virtual Enterprise we design premium graphics which fits customers desire.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="images/dataentry.png" style="margin-left:110px;" alt="">
                    <h3>Data entry and virtual adminstration</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                   <p>At Virtual Enterprise we design premium graphics which fits customers desire.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                   <img src="images/social.png" style="margin-left:110px;" alt="">
                    <h3>Email and social media management</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                   <p>At Virtual Enterprise we design premium graphics which fits customers desire.</p>
                </div>
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