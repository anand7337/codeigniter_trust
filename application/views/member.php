<body>
	
    <!-- Volunteer -->
    <section class="volunteer-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Become a Club Member</h1>
                <div class="text">Please Fill Up Your Details Below<br>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="side_girl">
                        <img src="<?=base_url()?>assets/images/background/girl_img.png" alt="" class="side_img">
                    </div> -->
                    <!-- <div class="image-wrapper-one wow fadeInLeft" data-wow-delay="400ms">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-4.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-5.jpg" alt=""></div>
                            <div class="image"><img src="images/resource/image-6.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-7.jpg" alt=""></div>
                        </div>
                    </div> -->
                <!-- </div> -->
                <!-- <div class="col-lg-3 order-lg-2">
                    <div class="image-wrapper-two wow fadeInRight" data-wow-delay="600ms">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-8.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-9.jpg" alt=""></div>
                            <div class="image"><img src="images/resource/image-10.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-11.jpg" alt=""></div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-sm-12">
                    <div class="default-form-area wow fadeInUp" data-wow-delay="200ms">
                        <form id="contact-form" name="contact_form" class="contact-form" action="<?=base_url('main/membership_check')?>" method="post">
                            <div class="row clearfix">
							    <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                      <p class="text">Already Have Club Member ID? Login Here..
                                    </div>
                                </div>	
                                <div class="col-lg-12 col-md-12 column">        
                                    <div class="form-group">
                                        <input type="text" name="check_membname" class="form-control" value="" placeholder="Enter Your Username" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 column">        
                                    <div class="form-group">
                                        <input type="password" name="check_membpass" class="form-control" value="" placeholder="Enter Your Password" required="">
                                    </div>
                                </div>
								<div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                      <p class="text"><a href="" class="text-primary">Forget ID?</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-section-btn">
                                <div class="row m-0 justify-content-md-between align-items-end">	
								<div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Login</span></button>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-8 col-sm-12">
                    <div class="default-form-area wow fadeInUp" data-wow-delay="200ms">
                        <form id="contact-form" name="contact_form" class="contact-form" action="<?=base_url('main/membership_create')?>" method="post">
                            <div class="row clearfix">
							    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                      <p class="text">Don't have member Id? Create Now...
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="memb_user" class="form-control" value="" placeholder="Create Username*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="password" name="memb_password" class="form-control" value="" placeholder="Create Password*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="memb_gender">
                                            <option value="*">Gender*</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="memb_email" class="form-control required email" value="" placeholder="Email*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="memb_dob" class="form-control" placeholder="Enter Your DOB" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="memb_mobile" class="form-control" value="" placeholder="Enter Your 10 digits mobile number" required="">
                                    </div>
                                </div>
								<div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="memb_proof" class="form-control" value="" placeholder="Enter Your Any Of ID Proof" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="memb_address" class="form-control" value="" placeholder="Enter Your Address" required>
                                    </div>
                                </div> 
								<div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="memb_pincode" class="form-control" value="" placeholder="Enter Your Pincode" required>
                                    </div>
                                </div>    
                                <!-- <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                    <label for="exampleFormControlFile1">Profile Photo Upload</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>                                              -->
                            </div>
                            <div class="contact-section-btn">
                                <div class="row m-0 justify-content-md-between align-items-end">
								<div class="col-lg-6 col-md-6 pt-5 column">
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Create</span></button>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
