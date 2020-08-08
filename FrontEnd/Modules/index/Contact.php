<section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title">          
          <h2>contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="icofont-google-map"></i>
              <h3>Address</h3>
              <address>Medellín, Colombia</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="icofont-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+0573122988419">+57 3122988419</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="icofont-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:djbpuerta349@gmail.com">djbpuerta349@gmail.com</a></p>
            </div>
          </div>
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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