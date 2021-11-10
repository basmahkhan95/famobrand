<div class="login-fail-main user change-pass">
    <div class="featured inner">
        <div class="modal fade bd-example-modal-lg" id="famo-modal-change-password" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lgg conf">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="payment-modal-main">
                        <div class="payment-modal-inner">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-center">Change Password</h1>
                                    <div class="famo-ajax-flash-message" style="display:none"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <form action="{{ route('admin.change-pwd') }}" method="post"
                                          id="famo-change-password-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <label for="">Current Password</label>
                                                <input type="password" name="current_password"
                                                       placeholder="Enter Current Password" class="form-control"
                                                       data-validation="required" required>
                                            </div>
                                            <div class="col-12 form-group">
                                                <label for="">New Password</label>
                                                <input type="password" name="password" placeholder="Enter New Password"
                                                       class="form-control" data-validation="required" required>
                                            </div>
                                            <div class="col-12 form-group pass-change">
                                                <label for="">Re-type Password</label>
                                                <input type="password" name="password_confirmation"
                                                       placeholder="Re-type New Password" class="form-control"
                                                       data-validation="required" required>
                                            </div>
                                            <div class="col-12 form-group text-left">
                                                <button type="submit">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--user profile end here-->
</div>
