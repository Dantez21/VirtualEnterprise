<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Hired</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
        <div class="topbar">
            <div class="mylinks">
               <div class="hire"><a href="<?=base_url()?>/home">Home</a></div>
                <div class="verticalLine vertical-line"></div>
                <div class="hire"><a href="">Get hired</a></div>
            </div>
            <!-- <div class="call"><img src="images/call.png" alt=""></div>
            <div class="email"><img src="images/emm.png" alt=""></div>
            <div class="sms"><img src="images/sms.png" alt=""></div>
            <div class="location"><img src="images/location.png" alt=""></div> -->
        </div>
    <section id="subscribe">
        <div style="height:30px;"></div>
        <div class="sub-form">
            <h2 class="sub-heading">Want to be part of virtual enterprise?</h2>
            <p class="center">Don't hesitate, fill the form below to apply for your suitable job.</p>

            <form action="<?=base_url()?>/hire/submit" method="POST" class="application-form">
              
                <div class="frm-group">
                    <label for="job" class="frm-label">Choose job title</label> <br><br>
                    <input type="text" name="job-title" list="items" class="frm-input" id="product" placeholder="Select your desired job"><br><br>
                    <datalist id="items">
                        <option value="Data Entry">Data Entry and Virtual Adminstration</option>
                        <option value="Customer Support">Customer Support</option>
                        <option value="UI/UX Design">UI/UX Design</option>
                        <option value="Graphic Designs">Graphic Designs</option>
                        <option value="Data Integration">Data Integration and Analysis</option>
                        <option value="Email and Social Media Management">Email and Social Media Management</option>
                    </datalist>
                </div>
                    <label for="fname" class="frm-label">First Name</label><br><br>
                    <input type="text" name="fname" class="frm-input" placeholder="Enter your first name" required><br><br>

                    <label for="lname" class="frm-label">Last Name</label><br><br>
                    <input type="text" name="lname" class="frm-input" placeholder="Enter your last name" required><br><br>

                    <label for="phoneNumber" class="frm-label">Phone Number</label>
                    <input type="text" name="phone-no" class="frm-input" placeholder="Enter your phone number" required><br><br>

                    <label for="email" class="frm-label">Email</label><br><br>
                    <input type="text" name="email" class="frm-input" placeholder="Enter your email" required><br><br>

                    <!-- <label for="password" class="frm-label">Password</label><br><br>
                    <input type="password" name="password" class="frm-input" placeholder="Enter your password" required><br><br> -->

                    <div class="preference">
                        <label for="name">Upload CV (*pdf)</label> <br><br>
                        <div class="upload-preference" style="width: 93%; height: 40px;border-radius: 3px;margin-top:0px; border: 1px solid #3b3464;">
                            <p id="input-placeholder" style="font-size:15px; margin-left:-100px;">upload your cv here...</p>
                            <label for="fileToUpload"><img src="images/files.png" class="filesIcon" id="file-icon" alt=""></label>
                            <input type="file" class="frm-input" value="" style="width: 320px; height: 35px; display:none;" name="cvUrl" id="fileToUpload" placeholder="upload your cv here..." onchange="fileupload()" required><br><br>
                            <input type="text" class="frm-input" name="cvURL" id="cvurl" value="" hidden>
                        </div>
                    </div>
                    <input type="submit" value="submit" id="hire-btn" class="btn cta">
            </form>
        </div>
        <div style="height:30px;"></div>
     </section>
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

       function fileupload(){
            var input1 = document.getElementById('fileToUpload').value.replace('C:\\fakepath\\', '');
            document.getElementById('input-placeholder').innerHTML=input1;
            document.getElementById('file-icon').style.display='none';
            document.getElementById('cvurl').value(input1)
       }
   </script>
</body>
</html>