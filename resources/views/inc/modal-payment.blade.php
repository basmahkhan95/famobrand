<div class="modal fade" id="famo-payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
            <div class="modal-body">
                <div class="payment-modal-main">
                    <div class="payment-modal-inner">
                        <form action="{{ route('payment.store') }}" method="post" id="famo-payment-form">
                            @csrf
                            <input type="hidden" name="package_id" value="" id="famo-input-package-id"/>
                            <div class="row">
                                <div class="col-12">
                                    <h1>Payment Info</h1>
                                </div>
                                <div class="col-12 form-group">
                                    <span>Package Name:</span>&nbsp;<span id="famo-package-name"></span>
                                </div>
                                <div class="col-12 form-group">
                                    <span>Package Fee:</span>&nbsp;<span id="famo-package-amount"></span>
                                </div>
                                <hr>
                                <div class="col-12 form-group">
                                    <label>Card Holder Name:</label>
                                    <input name="card_holder_name" type="text" class="form-control" spellcheck="true"
                                           placeholder="Card Holder Name" required>
                                </div>
                                <div class="col-12 form-group">
                                    <label>Credit Card No.</label>
                                    <input name="credit_card_no" type="text"
                                           class="form-control famo-input-mask-credit-card-number"
                                           spellcheck="true"
                                           placeholder="Credit Card No." required>
                                </div>
                                <div class="col-12 form-group">
                                    <label>CVV:</label>
                                    <input name="cvv" type="text" class="form-control famo-input-mask-cvv"
                                           spellcheck="true"
                                           placeholder="CVV" required>
                                </div>
                                <div class="col-12 form-group">
                                    <label>Expiry Date:</label>
                                    <input name="expiry_date" type="text"
                                           class="form-control famo-input-mask-credit-card-expiry-date"
                                           spellcheck="true" placeholder="Expiry Date" required>
                                </div>
                                <div class="col-12 form-group text-center">
                                    <button type="submit" class="pink-btn" id="cont2">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
