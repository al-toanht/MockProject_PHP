    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>Change Password</h2>
                                <form class="forms-sample" method="POST"
                                    action="<?php echo _WEB_ROOT?>/admin-changepassword">
                                    <div class="form-group row">
                                        <label for="InputCurrentPassword" class="col-sm-3 col-form-label">Current
                                            password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="current_password"
                                                id="InputCurrentPassword" placeholder="Enter current password">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <?php  echo $data['currentPasswordError']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="InputNewPassword" class="col-sm-3 col-form-label">New
                                            Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="new_password"
                                                id="InputNewPassword" placeholder="Enter new password">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <?php  echo $data['newPasswordError']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>