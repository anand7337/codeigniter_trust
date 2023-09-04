
<body>
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(../assets/images/background/bg-13.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <h1>Get Touch With Us</h1>
                <!-- <ul class="bread-crumb">
                    <li><a class="home" href="index.html"><span class="fa fa-home"></span></a></li>
                    <li>Contact</li>
                </ul> -->
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="default-form-area">
                        <div class="sec-title">
                            <h1>Do you have any Queries? Please Contact Us</h1>
                        </div>
                        <form id="contact-form" name="contact_form" class="contact-form" action="<?=base_url('main/contact_form')?>" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea required" placeholder="Message...."></textarea>
                                    </div>
                                    <div class="form-group flex-box">
                                        <div class="submit-btn">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit" value="send message" data-loading-text="Please wait..."><span>Send Message</span></button>
                                        </div>
                                        <!-- <span class="hint">*Get answers to common questions through our help center.</span> -->
                                    </div>
                                </div>                                            
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-three">
                        <div class="single-info">
                            <h4>Location</h4>
                            <div class="text">Jayson Charitable trust, 7, 3rd St, Venkatachalam Nagar, Thirumullaivoyal, Chennai, Tamil Nadu 600062</div>
                            <!-- <a class="link-btn" href="#">Your Nearest Location</a>                             -->
                        </div>
                        <div class="single-info">
                            <h4>Quick Contact</h4>
                            <div class="wrapper-box">
                                <a href="mailto: trustjayson@gmail.com"> trustjayson@gmail.com</a> <br>
                                <a href="tel:+088258 21681">+088258 21681</a>
                            </div>
                            <!-- <a class="link-btn" href="#">Get Call Back</a> -->
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </section>

    <!-- Google Map -->
    <div class="google-map">
        <div class="container">
        <div class="map-canvas mt-0 mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.2780867288443!2d80.13325757514421!3d13.144850911056073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5262e7676f4cdf%3A0xc85d9933bfc3a054!2sJayson%20Charitable%20trust!5e0!3m2!1sen!2sin!4v1683801513394!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
    </div>
</body>
