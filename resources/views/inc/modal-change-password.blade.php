<div class="modal fade" id="famo-modal-change-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
            <div class="modal-body">
                <div class="payment-modal-main">
                    <div class="payment-modal-inner">
                        <form action="{{ route('change-pwd') }}" method="post"
                              id="famo-change-password-form">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h1>Change Password</h1>
                                    <div class="famo-ajax-flash-message" style="display:none"></div>
                                </div>
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

