<div class="modal" id="modal-affiliate-change-password" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" class="modal-close-btn" data-dismiss="modal">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </a>
                <div class="modal-title">Change password</div>
                <form action="{{route('affiliates.change-password',['session_id' => $sessionId])}}"
                      method="post">
                    @csrf
                    <div class="form-boxes">
                        <div class="box-md-10">
                            <div class="input-field-group" data-address="1">
                                <div class="input-field">
                                    <input id="new_password_x1" name="password" class="jsPassword" autofocus=""
                                           type="text" placeholder=" " value="" autocomplete="off">
                                    <label for="new_password_x1">NEW PASSWORD</label>
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
