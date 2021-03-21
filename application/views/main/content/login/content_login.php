<div class="nk-main">
        <div class="nk-gap-2"></div>
        <div class="container">
                <div class="row vertical-gap">
                        <div class="col-lg-12">
                                <h3 class="nk-decorated-h-2"><span class="text-main-1">Login <span class="text-white">Area</span></span></h3>
                                <div class="nk-gap-3"></div>
                                <div class="container">
                                        <div class="col-lg-6 offset-lg-3">
                                                <?php
                                                echo validation_errors("<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>","</em></div>");
                                                if ($this->session->flashdata('error'))
                                                {
                                                        echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                                                        echo $this->session->flashdata('error');
                                                        echo "</em></div>";
                                                }
                                                echo form_open(base_url('login'),' class="form-horizontal"');
                                                ?>
                                                <div class="form-group">
                                                        <label for="Username">Username</label>
                                                        <input type="text" class="form-control" name="username" placeholder="Enter Your Username" minlength="4" maxlength="16" required autocomplete="off" autofocus>
                                                </div>
                                                <div class="form-group">
                                                        <label for="Password">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password" minlength="4" maxlength="16" required>
                                                </div>
                                                <div class="nk-gap"></div>
                                                <div class="form-group text-center">
                                                        <button type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-sign-in"></span> &nbsp;Login</button>
                                                        <button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
                                                </div>
                                                <?php echo form_close(); ?>
                                                <div class="form-group text-center">
                                                        OR
                                                </div>
                                                <div class="form-group text-center">
                                                        <a href="<?php echo base_url('register') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success"><span class="fa fa-user-plus"></span> &nbsp;Register</a>
                                                </div>
                                        </div>
                                </div>
                                <div class="nk-gap-3"></div>
                        </div>
                </div>
        </div>
</div>