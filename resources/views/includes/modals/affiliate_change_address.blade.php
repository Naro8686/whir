<div class="modal" id="modal-affiliate-change-address" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" class="modal-close-btn" data-dismiss="modal">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </a>
                <div class="modal-title">Change address</div>
                <form action="{{route('affiliates.change-address',['session_id' => $sessionId])}}"
                      method="post">
                    @csrf
                    <div class="form-boxes">
                        <div class="box-md-10">
                            <div class="input-field-group" data-address="1">
                                <div class="input-field">
                                    <input id="address_x1" name="address" type="text" autofocus="" placeholder=" "
                                           value="{{$address}}"
                                           autocomplete="off">
                                    <label for="address_x1">BITCOIN ADDRESS FOR COMMISSION PAYOUT</label>
                                </div>
                            </div>
                        </div>
                        <div class="box-sm-5">
                            <button type="submit" class="btn btn-lg btn-primary">
                                Change
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
