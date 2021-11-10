<div class="modal fade bd-example-modal-lg" id="famo-modal-edit-testimonial" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lgg conf">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="payment-modal-main">
                <div class="payment-modal-inner  text-left">
                    <div class="row mt-3">
                        <div class="col-12">
                            <form action="{{ route('admin.testimonial.update') }}" method="post"
                                  id="famo-form-edit-testimonial">
                                @csrf
                                <input class="famo-input-id" type="hidden" name="id" value=""/>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="">Client Name</label>
                                        <input type="text" name="client_name" value=""
                                               class="form-control famo-input-client-name"
                                               data-validation="required" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">Testimonial</label>
                                        <textarea name="testimonial" class="form-control famo-input-testimonial"
                                                  data-validation="required" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="can" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="con">Update</button>
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
