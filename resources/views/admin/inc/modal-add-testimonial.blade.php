<div class="modal fade bd-example-modal-lg" id="famo-modal-add-testimonial" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lgg conf">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.testimonial.store') }}" method="post" id="famo-form-add-testimonial">
                        @csrf
                        <div class="payment-modal-main">
                            <div class="payment-modal-inner  text-left">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="text-center">Add Testimonial</h1>
                                        <div class="famo-ajax-flash-message" style="display:none"></div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-12 form-group">
                                                    <label for="">Client Name</label>
                                                    <input type="text" name="client_name" placeholder="Enter Client Name" class="form-control" maxlength="50" data-validation="required" required>
                                                </div>
                                                <div class="col-12 form-group">
                                                    <label for="">Testimonial</label>
                                                    <textarea placeholder="Enter Testimonial" name="testimonial" class="form-control" data-validation="required" required></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" class="can" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="con">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
