<section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title">          
          <h2>contact</h2>
          <p>I will gladly help you with everything I can</p>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="icofont-google-map"></i>
              <h3>Medellín, Colombia</h3>              
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">  
            <a href="tel:+0573122988419"><i class="icofont-phone"></i></a>
              <h3>Contact with me</h3>         
              </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">              
              <a href="mailto:djbpuerta349@gmail.com"><i class="icofont-envelope" ></i></a> 
              <h3>Send me emalil</h3>            
            </div>
          </div>          
          <form action="<?php echo UrlServer?>/FrontEnd/Pages/forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>    
        </div>
      </div>
    </section>