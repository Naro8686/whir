<x-app-layout>
    <x-slot name="seo_title">
        Affiliate details
    </x-slot>
    <x-slot name="seo_description">
        Whir is a BTC mixer that returns privacy to your BTC.
    </x-slot>
    <x-slot name="seo_keywords">
        BTC mixer, mix BTC, BTC privacy
    </x-slot>
    @php($affiliate = new \App\Models\Affiliate($affiliate->resolve()))
    <div class="container">
        <div class="container-inner container-content">
            <div class="boxes">
                <strong class="over-title"></strong>
                <h1>Welcome, affiliate!</h1>

                <div class="box-compressed-md">
                    <p>
                        Refer customers and get a 30% commission from each transaction fee we charge. </p>

                    <div class="content-form bg-default">
                        <div class="form-boxes">
                            <div class="box-md-10">
                                <div class="input-in">
                                    <div class="input-field-group">
                                        <div class="input-field input-with-btn-in">
                                            <input type="text" placeholder=" " id="referralLink"
                                                   value="{{url('?ref='.$affiliate->ref)}}" autocomplete="off"
                                                   readonly="readonly">
                                            <label for="referralLink">REFERRAL LINK TO TRAFFIC TO</label>
                                        </div>
                                    </div>
                                    <a type="button" class="btn btn-xs btn-dark btn-in-input" data-toggle="copy"
                                       data-value="{{url('?ref='.$affiliate->ref)}}">
                                        <span class="content-copy-uncopied">Copy</span>
                                        <em class="content-copy content-copy-copied"></em>
                                    </a>
                                </div>
                            </div>
                            <div class="box-md-10">
                                <div class="input-in">
                                    <div class="input-field-group">
                                        <div class="input-field input-with-btn-in">
                                            <input type="text" placeholder=" " id="btcAddress"
                                                   value="{{$affiliate->username}}"
                                                   autocomplete="off" readonly="readonly">
                                            <label for="btcAddress">BTC ADDRESS FOR COMMISSION PAYOUT</label>
                                        </div>
                                    </div>
                                    <a type="button" class="btn btn-xs btn-dark btn-in-input"
                                       data-modal="modal-affiliate-change-address">
                                        CHANGE </a>
                                </div>
                            </div>
                            <div class="box-md-5">
                                <div class="input-in">
                                    <div class="input-field-group input-with-btn-in">
                                        <div class="input-field">
                                            <input type="text" placeholder=" " id="password" value="********"
                                                   autocomplete="off" readonly="readonly">
                                            <label for="password">PASSWORD</label>
                                        </div>
                                    </div>
                                    <a type="button" class="btn btn-xs btn-dark btn-in-input"
                                       data-modal="modal-affiliate-change-password">
                                        CHANGE </a>
                                </div>
                            </div>
                            <div class="box-md-5">
                                <div class="input-in">
                                    <div class="input-field-group input-with-btn-in">
                                        <div class="input-field">
                                            <input type="text" placeholder=" " id="minPayout"
                                                   value="{{$affiliate->min_payout}}"
                                                   autocomplete="off" readonly="readonly">
                                            <label for="minPayout">MINIMUM PAYOUT</label>
                                        </div>
                                    </div>
                                    <a type="button" class="btn btn-xs btn-dark btn-in-input"
                                       data-modal="modal-affiliate-change-payout">
                                        CHANGE </a>
                                </div>
                            </div>
                        </div>
                        <div class="content-form-end"></div>
                    </div>

                    <div class="table-affiliate-stats-header">
                        <h2>Stats</h2>
                    </div>

                    <div class="table-responsive table-affiliate-stats">
                        <table class="table border-top">
                            <tbody>
                            <tr>
                                <td>
                                    Unique visitors
                                </td>

                                <td class="text-end">
                                    {{$affiliate->referrals_all_count}}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Completed transactions
                                </td>
                                <td class="text-end">
                                    {{$affiliate->referrals_approved_count}}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Transacted amount
                                </td>

                                <td class="text-end">
                                    {{$affiliate->referrals_amount}} BTC
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Commission (not paid)
                                </td>

                                <td class="text-end">
                                    0 BTC
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Commission (paid)
                                </td>

                                <td class="text-end">
                                    0 BTC
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
{{--            <div class="center content-button">--}}
{{--                <a class="btn btn-dark" href="{{url('/help')}}">--}}
{{--                    NEED HELP? <span class="xxs-show">GET IN TOUCH WITH US</span>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="page-delimiter page-delimiter-xl sm-show"></div>
    <x-slot name="modals">
        @include('includes.modals.affiliate_change_address',['address' => $affiliate->username,'sessionId'=>$sessionId])
        @include('includes.modals.affiliate_change_password',['sessionId'=>$sessionId])
        @include('includes.modals.affiliate_change_payout',['min_payout'=>$affiliate->min_payout,'sessionId'=>$sessionId])
    </x-slot>
    @if(Session::has('message'))
        @push('js')
            <script>
                notice('{{ Session::get('message') }}', 'success', true);
            </script>
        @endpush
    @endif
</x-app-layout>
