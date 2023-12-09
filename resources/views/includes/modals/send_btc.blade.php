<div class="modal" id="modal-send-btc" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" class="modal-close-btn" data-dismiss="modal">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </a>
                <div class="modal-title">
                    Send BTC privately
                </div>
                <p>Hide your BTC balance and previous transactions from the recipient.</p>

                <form action="{{route('tx.new-mix')}}" id="send-btc-form" method="post">
                    <div class="form-boxes">
                        <div class="box-10">
                            <div class="input-field-group">
                                <div class="input-field input-with-button">
                                    <input id="_maddr" name="addr" type="text" placeholder=" " value=""
                                           autocomplete="off"/>
                                    <label for="_maddr">RECIPIENT BTC ADDRESS</label>
                                </div>
                                <!--<div class="input-error">Error message</div>-->
                            </div>
                        </div>
                        <div class="box-sm-5">
                            <div class="input-field-group">
                                <div class="input-field input-with-button">
                                    <input id="_mamt" name="amt" type="text" class="field-btc field-btc-amount"
                                           placeholder=" " value="" autocomplete="off"/>
                                    <label for="_mamt">BTC AMOUNT</label>
                                </div>
                                <!--<div class="input-error">Error message</div>-->
                            </div>
                        </div>
                        <div class="box-sm-5">
                            <div class="input-field-group">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    Continue <i class="icon icon-continue"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="send-btc-terms">
                    <a href="{{url('/terms')}}" target="_blank">Sending the payment to a cryptoprocessor? Read this
                        first.</small>
                </div>
            </div>
        </div>
    </div>
</div>
