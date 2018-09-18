<div class="vertical-align-wrap" style="margin-top: 2%">
    <div class="vertical-align-middle">
        <div class="auth-box" style="width: 40%; height: auto; padding: 20px">
            <div class="content">
                <div class="header">
                    <!--<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>-->
                    <h3 class="title align-center">Create Account</h3>
                </div>
                <?php echo form_open('authentication/createUser')?>
                <div class="form-group">
                    <label for="signin-fname" class="control-label">First Name</label>
                    <input type="text" name="fname" class="form-control" id="signin-fname" placeholder="Enter First Name" required maxlength="20" minlength="5">
                </div>
                <div class="form-group">
                    <label for="signin-lname" class="control-label">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="signin-lname" placeholder="Enter Last Name" required maxlength="20" minlength="5">
                </div>
                <div class="form-group">
                    <label for="signin-uname" class="control-label">User Name</label>
                    <input type="text" name="uname" class="form-control" id="signin-uname" placeholder="Enter User Name" required maxlength="20" minlength="5">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signin-occ" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" id="signin-pass" placeholder="Enter Password" required minlength="6">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signin-org" class="control-label">Confirm Password</label>
                            <input type="password" name="pass-conf" class="form-control" id="signin-pass-conf" placeholder="Confirm Password" required minlength="6">
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-lg btn-block">CREATE ACCOUNT</button>
                <div class="bottom align-center" style="margin-top: 10px;">
                    <span class="helper-text"><i class="fa fa-lock"></i> <a href="login">Already have an account?</a></span>
                </div>
                <?php echo form_close()?>
            </div>
        </div>
    </div>
</div>

