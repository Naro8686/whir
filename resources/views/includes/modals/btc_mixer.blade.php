<div class="modal" id="modal-btc-mixer" tabindex="-1" role="dialog" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" class="modal-close-btn" data-dismiss="modal">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </a>
                <div class="modal-title">
                    Mix BTC now
                </div>

                <form action="{{route('tx.new-mix')}}" class="mixer-form" method="post" id="formuair">
                    @csrf
                    <div class="form-boxes">

                        <div class="box-md-10">
                            <div class="input-field-multi">
                                <div class="input-field-group" data-address="1">
                                    <div class="input-field input-with-button">
                                        <input type="text" autofocus name="addr[0]" placeholder=" " id="_uair_1"
                                               value="" autocomplete="off">
                                        <label for="_uair_1">Enter address to receive mixed BTC</label>
                                        <a class="btn-clean" href="#">
                                            <div class="btn-clean-line1"></div>
                                            <div class="btn-clean-line2"></div>
                                        </a>
                                    </div>
                                    <!--<div class="input-error">Error message</div>-->
                                </div>
                                <div class="input-field-group" data-address="2">
                                    <div class="input-field input-with-button">
                                        <input type="text" autofocus name="addr[1]" placeholder=" " id="_uair_2"
                                               value="" autocomplete="off">
                                        <label for="_uair_2">Second address to receive mixed BTC</label>
                                        <a class="btn-clean" href="#">
                                            <div class="btn-clean-line1"></div>
                                            <div class="btn-clean-line2"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="input-field-group" data-address="3">
                                    <div class="input-field input-with-button">
                                        <input type="text" autofocus name="addr[2]" placeholder=" " id="_uair_3"
                                               value="" autocomplete="off">
                                        <label for="_uair_3">Third address to receive mixed BTC</label>
                                        <a class="btn-clean" href="#">
                                            <div class="btn-clean-line1"></div>
                                            <div class="btn-clean-line2"></div>
                                        </a>
                                    </div>
                                    <!--<div class="input-error">Error message</div>-->
                                </div>
                            </div>
                        </div>


                        <div class="box-sm-10">
                            <div class="input-field-group">
                                <div class="input-field">
                                    <select name="serviceFee" class="form-select">
                                        <option value="0">Standard strength (1%)</option>
                                        <option value="1">Stronger strength (1.5%)</option>
                                        <option value="2">Extreme strength (2%)</option>
                                        <option value="3">Anonymous strength (3%)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="box-sm-5">
                            <div class="input-field-group">
                                <div class="input-field">
                                    <select name="delay" class="form-select">
                                        <option value="0">Mix ASAP</option>
                                        <option value="1">1 Hour</option>
                                        <option value="2">2 Hours</option>
                                        <option value="4">4 Hours</option>
                                        <option value="8">8 Hours</option>
                                        <option value="16">16 Hours</option>
                                        <option value="24">1 day</option>
                                        <option value="48">2 days</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="box-sm-5">
                            <button type="submit" class="btn btn-lg btn-primary">
                                Continue <i class="icon icon-continue"></i>
                            </button>
                        </div>
                    </div>
                    <script>
                        $('#formuair [data-address="2"]').addClass('hide');
                        $('#formuair [data-address="3"]').addClass('hide');
                    </script>
                </form>

            </div>
        </div>
    </div>
</div>
