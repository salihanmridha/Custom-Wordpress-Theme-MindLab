<!-- Contact Section-->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>contact us</h3>
        <p>Feel free to contact us. A business has to be involving, it has to be fun, and it has to exercise your creative instincts. Start where you are. Use what you have. Do what you can. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <hr>
        <h5><i class="fa fa-map-marker fa-fw fa-lg"></i> 1234 Some Avenue, New York, NY 56789
        </h5>
        <h5><i class="fa fa-envelope fa-fw fa-lg"></i> info@youwebsite.com
        </h5>
        <h5><i class="fa fa-phone fa-fw fa-lg"></i> (123) 456-7890
        </h5>
      </div>
      <div class="col-md-5 col-md-offset-2">
        <h3>Say hello</h3>

        <form id="mindlab-contact-form" action="#" method="POST" name="mindlabContactForm" novalidate="" data-url="<?= admin_url( 'admin-ajax.php' ); ?>">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label for="mindlab-contact-name-id" class="sr-only control-label">You Name</label>
              <input id="mindlab-contact-name-id" name="mindlabContactName" type="text" placeholder="You Name" required="required" data-validation-required-message="Please enter name" class="form-control input-lg"><span class="help-block text-danger"></span>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label for="mindlab-contact-email-id" class="sr-only control-label">You Email</label>
              <input id="mindlab-contact-email-id" name="mindlabContactEmail" type="email" placeholder="You Email" required="required" data-validation-required-message="Please enter email" class="form-control input-lg"><span class="help-block text-danger"></span>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label for="mindlab-contact-phone-id" class="sr-only control-label">You Phone</label>
              <input id="mindlab-contact-phone-id" name="mindlabContactPhone" type="tel" placeholder="You Phone" required="" data-validation-required-message="Please enter phone number" class="form-control input-lg"><span class="help-block text-danger"></span>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label for="mindlab-contact-msg-id" class="sr-only control-label">Message</label>
              <textarea id="mindlab-contact-msg-id" name="mindlabContactMsg" rows="2" placeholder="Message" required="required" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control input-lg"></textarea><span class="help-block text-danger"></span>
            </div>
          </div>
          <div id="success"></div>

          <button id="mindlabContactBtn" type="submit" class="btn btn-dark">Send</button>

          <div style="margin-top: 20px;" id="msg_deliver">

          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<!-- Map Section-->
<div id="map"></div>
<!-- Action Section-->
<section class="action section-small bg-gray2">
  <div class="container wow fadeIn">
    <div class="row">
      <div class="col-md-10">
        <h3 class="no-pad"><span class="bold">Universal</span> is the perfect template for your next project!
        </h3>
      </div>
      <div class="col-md-2 text-right"><a href="httpss://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark">get it now</a></div>
    </div>
  </div>
</section>
