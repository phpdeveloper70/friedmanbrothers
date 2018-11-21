<!doctype html>
<html>
   <head>
    <style>.reply-area form a.reply-btn {
    background: #2C2B5E;
    color: #fff;
    text-transform: uppercase;
    padding: 8px 25px;
    font-weight: 700;
    display: inline-block;
}</style>
      <?php $this->load->view('front/layout/head'); ?>
   </head>
   <body>
      <?php $this->load->view('front/layout/header'); ?>
      <!---  Main Inner Wrapper --->
      <div class="page-title">
      	<div class="container">
      		<h4>Contact Us</h4>
      	  <ol class="breadcrumb">
      		<li class="breadcrumb-item"><a href="#">Home</a></li>
      		<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      	  </ol>
      	</div>
      </div>

      <div class="wraper-main-inner">
	<div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="contact-contents">
						<div class="contact-title">
						Contact Info
						</div>

                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="<?php echo base_url('assets/front/images/contact1.png'); ?>" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>address</h3>
                                    <p>135, First Lane, City Street</p>
                                    <p>New Yourk City, USA</p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="<?php echo base_url('assets/front/images/contact2.png'); ?>" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Phone</h3>
                                    <p> +91-11-12345678</p>
                                    <p>+91 0000 0000 00</p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="<?php echo base_url('assets/front/images/contact3.png'); ?>" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>Email</h3>
                                    <p> info@friedmanbrothers.com</p>
                                </div>
                            </div>
                        </div>
						<div class="contact-title">
						Social Links
						</div>

						<div class="social-btm">
							<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
							<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>

							</div>

                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="reply-area">
                            <h3>LEAVE A message</h3>
                            <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem </p>
                            <form id="contact-form"  method="post" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Name</p>
                                        <input type="text" name="name"  id="name">
                                        <?php echo form_error('name'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Email</p>
                                        <input type="text" name="email"  id="email">
                                        <?php echo form_error('email'); ?>
                                    </div>
									 <div class="col-md-6">
                                        <p>Phone</p>
                                        <input type="text" name="mobile" max="10"  id="mobile">
                                        <?php echo form_error('mobile'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Subject</p>
                                        <input type="text" name="subject"  id="subject">
                                         <?php echo form_error('subject'); ?>
									</div>
									  <div class="col-md-12">
                                        <p>Massage</p>
                                        <textarea name="message" id="message" cols="15" rows="5"></textarea>
                                         <?php echo form_error('message'); ?>
                                    </div>
                                </div>
                                <div class="reply-btn">
            <input type="submit" name="submit" class="style-input submit-style" value="send message">
          </div>
                 
                            <!--  <a  class="reply-btn" href="#" data-text="send"><span>send message</span></a>  -->
                                <p class="form-messege"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
      <!-- End -->
      <?php $this->load->view('front/layout/footer'); ?>
   </body>
</html>
