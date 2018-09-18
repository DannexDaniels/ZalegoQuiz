<div class="vertical-align-wrap" style="margin-top: 10%; width: 50%; margin-left:25%;">
    <div class="vertical-align-middle">
        <div class="auth-box">
            <div class="content" style="margin-top: 00px;padding: 8%;">
                <div class="header">
                    <!--<div class="logo text-center"><img src="../../../assets/img/logo-dark.png" alt="Klorofil Logo"></div>-->
                    <center><h2>Login to your account</h2></center>
                </div>
                <?php echo form_open('authenticate','class="form-auth-small"')?>
                <div class="form-group">
                    <label for="signin-email" class="control-label sr-only">Username</label>
                    <input type="text" name="uname" class="form-control" id="signin-email" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="signin-password" class="control-label sr-only">Password</label>
                    <input type="password" name="password" class="form-control" id="signin-password" placeholder="Enter Password">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                <div class="bottom">

                    <span class="helper-text"></i>Don't have an account?</span><br />
                    <span class="helper-text"> <a href="<?php echo base_url()?>">Create a User Account</a></span><br />

                </div>
                <?php echo form_close()?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>