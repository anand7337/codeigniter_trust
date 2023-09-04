<body>
<?php

if ($user = $this->session->userdata('user')) {
    extract($user);
    ?>
    <!-- Volunteer -->
    <section class="volunteer-section">
        <div class="auto-container">
            <div class="row">
				<div class="col-lg-12 col-sm-12">
                    <div class="default-form-area wow fadeInUp" data-wow-delay="200ms">
                        <form id="contact-form" name="contact_form" class="contact-form" action="<?=base_url('main/user_profile_update')?>" method="post">
                            <div class="row clearfix">
							    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                      <!-- <p class="text">Don't have member Id? Create Now...</p> -->
                                      <h4>User Profile Setting</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <p class="text">Change Name:</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="hidden" name="form_id_edit" class="form-control" value="<?= $id?>">
                                        <input type="text" name="form_name_edit" class="form-control" value="<?= $name?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <p class="text">Change Email</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="form_email_edit" class="form-control"  value="<?= $email?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                      <p class="text">Change Password:</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="form_password_edit" class="form-control" value="<?= $password?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Update</span></button>
                                    </div>
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
}
?>

</body>

