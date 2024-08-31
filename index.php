<!-- config file is included -->
<?php include("../dhanashree-engineers/php/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dhanashree Engineers Pvt Ltd</title>
      <?php include (S_INCLUDESPATH . "head.php"); ?> 
   </head>
   <body>
      <article id="bussiness-card">
         <!-- profile section  start-->
         <div class="container">
            <section class="profile-section">
               <div class="profile-provider">
                  <img src="<?= S_IMGPATH ?>logo.png" alt="">
                  <img src="<?= S_IMGPATH ?>profilePic.png" alt="">
                  <div class="profile-details">
                     <h2 class="profile-divider-name">D. Y. Yeole</h2>
                     <p>( Director )</p>
                  </div>
               </div>
            </section>
            <!-- profile section  end-->
            <hr>
            <!-- profile-contact section  start-->
            <div class="contact-details-sec">
               <div class="contact-details-with-icon">
                  <div class="contact-details">
                     <div class="contact-icon "> <a href="tel:+917447483023" target="_blank"><i class="fa-solid fa-phone"></i></a></div>
                     <div class="contact-info"> <a href="#" target="_blank">08048965302</a></div>
                  </div>
                  <div class="contact-details">
                     <div class="contact-icon "><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJftMStJGlzDdSpkPWdwPtlnbjzfkZgnsDKFZgDCFgkvfpPRgBBsCXqqNrVTqSgKsPgpGlB" target="_blank"><i class="fa-solid fa-envelope"></i></a></div>
                     <div class="contact-info"> <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJftMStJGlzDdSpkPWdwPtlnbjzfkZgnsDKFZgDCFgkvfpPRgBBsCXqqNrVTqSgKsPgpGlB"" target="_blank">dyyeole07@gmail.com</a></div>
                  </div>
                  <div class="contact-details">
                     <div class="contact-icon "><a href="https://www.google.com/maps/place/Dhanashree+Engineers+Pvt+Ltd/@18.6355316,73.8321286,18z/data=!4m14!1m7!3m6!1s0x3bc2b87109f47cf7:0x5f69da547e166000!2sDhanashree+Engineers+Pvt+Ltd!8m2!3d18.6354096!4d73.8332444!16s%2Fg%2F11gfb579z_!3m5!1s0x3bc2b87109f47cf7:0x5f69da547e166000!8m2!3d18.6354096!4d73.8332444!16s%2Fg%2F11gfb579z_?entry=ttu" target="_blank"><i class="fa-solid fa-location-dot"></i></a></div>
                     <div class="contact-info"><a href="https://www.google.com/maps/place/Dhanashree+Engineers+Pvt+Ltd/@18.6355316,73.8321286,18z/data=!4m14!1m7!3m6!1s0x3bc2b87109f47cf7:0x5f69da547e166000!2sDhanashree+Engineers+Pvt+Ltd!8m2!3d18.6354096!4d73.8332444!16s%2Fg%2F11gfb579z_!3m5!1s0x3bc2b87109f47cf7:0x5f69da547e166000!8m2!3d18.6354096!4d73.8332444!16s%2Fg%2F11gfb579z_?entry=ttu"" target="_blank">W-223, S Block, MIDC, Bhosari, <br>Pune-411026, Maharashtra, India</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contact-end"></div>
         </div>
         <!-- profile-contact section  end-->
         <!-- about section  start-->
         <?php include (S_INCLUDESPATH . "about.php"); ?>  
         <!-- about section  end-->
         <!-- products section start -->
         <div class="container">
            <section class="product-sec">
               <h2 class="sec-heading">Products</h2>
               <div class="products-container">
                  <div class="product">
                     <img src="<?= S_IMGPATH ?>Products/product-1.webp" alt="">
                     <button class="expand-btn" onclick="toggleDetails('details1')">Industrial Bolt</button>
                  </div>
                  <div class="product">
                     <img src="<?= S_IMGPATH ?>Products/product-2.webp" alt="">
                     <button class="expand-btn" onclick="toggleDetails('details2')">Industrial Nut</button>
                  </div>
                  <div class="product" data-name="p-3">
                     <img src="<?= S_IMGPATH ?>Products/product-3.webp" alt="">
                     <button class="expand-btn" onclick="toggleDetails('details3')">Flat Head Rivets</button>
                  </div>
                  <div class="product" data-name="p-4">
                     <img src="<?= S_IMGPATH ?>Products/product-4.webp" alt="">
                     <button class="expand-btn" onclick="toggleDetails('details4')">Round Viser</button>
                  </div>
               </div>
               <div class="products-preview">
                  <div class="preview" id="details1">
                     <img src="<?= S_IMGPATH ?>Products/product-1.webp" alt="">
                     <h3>Industrial Bolt</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                     <p>Superior finish Corrosion resistance Accurate dimensions.</p>
                     <div class="price">&#8377; 90/- kg</div>
                     <button class="enquiry-btn" onclick="scrollToForm()">Enquire Now</button>
                  </div>
               </div>
               <div class="products-preview">
                  <div class="preview" id="details2">
                     <img src="<?= S_IMGPATH ?>Products/product-2.webp" alt="">
                     <h3>Industrial Nut</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                     <p>Simple fitting.Corrosion resistance & Rugged construction.</p>
                     <div class="price">&#8377; 110/- kg</div>
                     <button class="enquiry-btn" onclick="scrollToForm()">Enquire Now</button>
                  </div>
               </div>
               <div class="products-preview">
                  <div class="preview" id="details3">
                     <img src="<?= S_IMGPATH ?>Products/product-3.webp" alt="">
                     <h3>Flat Head Rivets</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                     <p>Durable finish.Corrosion resistance with Weatherproof coating.</p>
                     <div class="price">&#8377; 210/- kg</div>
                     <button class="enquiry-btn" onclick="scrollToForm()">Enquire Now</button>
                  </div>
               </div>
               <div class="products-preview">
                  <div class="preview" id="details4">
                     <img src="<?= S_IMGPATH ?>Products/product-4.webp" alt="">
                     <h3>Round Viser</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                     <p> Grades to meet the diverse requirements of our clients. Our offered Viser can also be customized</p>
                     <div class="price">&#8377; 90/- kg</div>
                     <button class="enquiry-btn" onclick="scrollToForm()">Enquire Now</button>
                  </div>
               </div>
            </section>
         </div>
         <!-- download section start-->
         <div class="container">
            <div class="download-sec">
               <h2 class="sec-heading sec-heading-color ">Downloads</h2>
               <div class="download-container">
                  <div class="download-item">
                     <a href="<?= S_IMGPATH ?>certificate.jpg"><img src="<?= S_IMGPATH ?>certificate.jpg" alt=""></a>
                     <p>Certificate</p>
                  </div>
                  <div class="download-item">
                     <a href="<?= S_IMGPATH ?>brochure.pdf"><img src="<?= S_IMGPATH ?>brochure.png" alt=""></a>
                     <p>Brochure</p>
                  </div>
                  <div class="download-item">
                     <a href="<?= S_IMGPATH ?>manual.pdf"><img src="<?= S_IMGPATH ?>manual.png" alt=""></a>
                     <p>Manual</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- download section end-->
         <!-- news section  start-->
         <?php include (S_INCLUDESPATH . "news.php"); ?>  
         <!-- news section  end-->
         <!-- testimonial section  start-->
         <?php include (S_INCLUDESPATH . "testimonial.php"); ?>  
         <!-- testimonial section  end-->
         <!-- enquiry section  start-->
         <div class="container">
            <section id="enquiry-sec">
               <div class="enquiry-sec">
                  <h2 class="sec-heading sec-heading-color ">Contact Us / Enquiry Form</h2>
                  <div class="enquiry-form">
                     <form  method="post" name="enquiry-from" id="enquiry-from">
                        <div class="mb-3">
                           <label for="name" class="form-label">Name:</label>
                           <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                           <label for="email" class="form-label">Email:</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                           <label for="phone" class="form-label">Phone Number:</label>
                           <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                           <label for="message" class="form-label">Message:</label>
                           <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="button-61" role="button" >Submit</button>
                     </form>
                  </div>
               </div>
            </section>
         </div>
         <!-- enquiry section  start-->
         <!-- Social media links section starts here -->
         <div class="container ">
            <div class="social-link-sec">
               <div><a href="https://www.linkedin.com/in/durgesh-bagul-5b102a17a/" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/linkedin-icon.svg" class="img-fluid"></a>
               </div>
               <div><a href="https://www.facebook.com/" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/facebook-icon.svg" class="img-fluid"></a> 
               </div>
               <div><a href="https://www.instagram.com/" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/instagram-icon.svg" class="img-fluid"></a>  
               </div>
               <div><a href="https://youtu.be/2nm9k5UjeO8?feature=shared" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/youtube-icon.svg" class="img-fluid"></a>
               </div>
            </div>
         </div>
         <!-- Social media links section ends here -->
         <a href="https://www.dhanashreeengineers.net/" style="float:right">Dhanashree Engineers Pvt Ltd.</a>
      </article>
      <!-- footer section  start-->
      <?php include (S_INCLUDESPATH . "footer.php"); ?>  
      <!-- footer section  end-->
      <script>
         // enquiry section 
         const scriptURL = 'https://script.google.com/macros/s/AKfycbz3v8cfZ4p0JkJ5I8MNm-OpbTGGyb21VuQjTTu6X8pK4EzwbujPFmnitd_EK3WZ2ZTy/exec'
         const form = document.forms['enquiry-from']
         
         form.addEventListener('submit', e => {
         e.preventDefault()
         fetch(scriptURL, { method: 'POST', body: new FormData(form) })
         .then(response => alert('Message send Successfully!', response))
         .catch(error => alert('Try again ....message not send...', error.message))
         })
      </script>
   </body>
</html>