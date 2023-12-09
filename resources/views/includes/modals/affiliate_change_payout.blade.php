<div class="modal" id="modal-affiliate-change-payout" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" class="modal-close-btn" data-dismiss="modal">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </a>
                <div class="modal-title">Change minimum payout</div>
                <form action="{{route('affiliates.change-min-payout',['session_id' => $sessionId])}}"
                      method="post">
                    @csrf
                    <div class="form-boxes">
                        <div class="box-md-10">
                            <div class="input-field-group" data-address="1">
                                <div class="input-field">
                                    <input id="min_payout_x1" name="min_payout" autofocus="" type="text" placeholder=" "
                                           value="{{$min_payout}}" autocomplete="off">
                                    <label for="min_payout_x1">MINIMUM PAYOUT</label>
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
