<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{$seo_title ?? $settings->get('seo_title', config('app.name'))}} | {{config('app.name')}}</title>

    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
    <meta content="#ffffff" name="theme-color"/>

    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="theme-color" content="#ffffff"/>

    <meta name="description"
          content="{{$seo_description ?? $settings->get('seo_description')}}">
    <meta name="keywords"
          content="{{$seo_keywords ?? $settings->get('seo_keywords')}}">
    <meta name="robots" content="index, follow"/>


    <link rel="canonical" href="{{request()->url()}}"/>


    <link rel="alternate" hreflang="en" href="{{request()->url()}}"/>
    <link rel="alternate" hreflang="x-default" href="{{request()->url()}}"/>

    <link rel="apple-touch-icon" sizes="57x57"
          href="/assets/web/images/favicons/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60"
          href="/assets/web/images/favicons/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72"
          href="/assets/web/images/favicons/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="/assets/web/images/favicons/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114"
          href="/assets/web/images/favicons/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120"
          href="/assets/web/images/favicons/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144"
          href="/assets/web/images/favicons/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152"
          href="/assets/web/images/favicons/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180"
          href="/assets/web/images/favicons/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192"
          href="/assets/web/images/favicons/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32"
          href="/assets/web/images/favicons/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96"
          href="/assets/web/images/favicons/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16"
          href="/assets/web/images/favicons/favicon-16x16.png"/>

    <link href="/assets/web/css/styles.min.css" rel="stylesheet"/>
    <script src="/assets/web/packages/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/web/js/scripts.js"></script>
    @stack('css')
</head>
@php($isHome = request()->path() === '/')
<body @class([
    'noscript',
    'bg-dark' => $isHome,
    'bg-light' => !$isHome && !request()->routeIs('tx.*'),
    'bg-default' => request()->routeIs('tx.*'),
])>

<script>
    $('body.noscript').removeClass('noscript');
</script>

<div class="messages-box"></div>

<div class="page">
    @if($isHome)
        <div class="canvas">
            <div class="canvas-inner">
                <canvas id="canvas-meteors" width="2000" height="3000"></canvas>
            </div>
        </div>
    @endif
    <div class="main">
        @if(!request()->routeIs('tx.*'))
            <div class="container">
                <div class="container-inner-hero">
                    <div class="hero">
                        <a class="logo" href="{{url('/')}}">
                            <img class="logo-white" src="/assets/web/images/logo-white.png"
                                 alt="Whir BTC mixer" title="Whir BTC mixer" width="67px" height="66px">
                            <img class="logo-dark" src="/assets/web/images/logo-dark.png"
                                 alt="Whir BTC mixer" title="Whir BTC mixer" width="67px" height="66px">
                        </a>
                        <ul class="top-navigation sm-show">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a class="btn btn-primary btn-send" href="{{route('tx.new-mix')}}"
                                   data-modal="modal-btc-mixer" href="#"><span class="btc-ico">&#x20BF;</span> Mix
                                    Bitcoins</a>
                            </li>
                        </ul>
                        <a href="javascript:void(0)" class="smartnav-btn sm-hide">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <div class="line-3"></div>
                        </a>
                        <div class="smartnav">
                            <ul class="smartnav-links">
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                            </ul>
                            <div class="smartnav-buttons">
                                <a class="btn btn-lg btn-primary btn-smart" href="{{route('tx.new-mix')}}"
                                   data-modal="modal-btc-mixer"><span class="btc-ico">₿</span> Mix Bitcoins</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            {{$slot}}
            @if(!request()->routeIs('tx.*'))
                <footer class="bg-md-light">
                    <div class="container">
                        <div class="container-inner container-block">
                            <div class="boxes boxes-usage md-show">
{{--                                <div class="box-md-2-5">--}}
{{--                                    <strong>WHIR</strong>--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                About </a>--}}
{{--                                        </li>--}}

{{--                                        <li>--}}
{{--                                            <a href="{{url('/affiliates')}}">Affiliates</a>--}}
{{--                                        </li>--}}

{{--                                        <li>--}}
{{--                                            <a href="#">Blog</a>--}}
{{--                                        </li>--}}

{{--                                        <li>--}}
{{--                                            <a href="#">Donate</a>--}}
{{--                                        </li>--}}

{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC Mixers </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="box-md-2-5">--}}
{{--                                    <strong>USE CASES</strong>--}}

{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer for adult content creators </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer for activists </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer for journalists </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer for libertarians </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer for cillionaires </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer for privacy extremists </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer for onlyfans </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer for sugar daddies </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="box-md-2-5">--}}
{{--                                    <strong>SUPPORT</strong>--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                BTC mixer FAQ </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                API </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                Crypto payment processors </a>--}}
{{--                                        </li>--}}

{{--                                        <li>--}}
{{--                                            <a data-modal="modal-tx-check" href="tx/check.html">--}}
{{--                                                Transaction check </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <div class="box-md-2-5">
                                    <strong>FORMALITIES</strong>

                                    <ul>
                                        <li>
                                            <a href="{{url('/terms')}}">
                                                Terms </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/privacy-policy')}}">
                                                Privacy policy </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/bitcoin-white-paper')}}">
                                                Bitcoin white paper </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/affiliates')}}">Affiliates</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-text">
                                <p class="center">
                                    You agree that you won't commit, encourage, or support use of the Whir service or
                                    website
                                    for any other purposes other than those expressly provided by our Terms and Privacy
                                    Policy.
                                    Additionally, you agree that you won't commit, encourage, or support any illegal or
                                    fraudulent activity, as well as the use of the Whir to legalize illegal income,
                                    financing of
                                    terrorism, participation in schemes of phishing, forgery or other such falsification
                                    or
                                    manipulation. For the full disclosure, please read our Terms and Privacy Policy
                                    provided
                                    at
                                    the links above. </p>
                                <p class="md-hide center footer-links">
                                    <a href="{{url('/terms')}}">Terms</a> | <a href="{{url('/privacy-policy')}}">Privacy
                                        policy</a>
                                </p>
                                <p class="center">
                                    &copy; mmxxiii {{$settings['app_name']}} | <a href="{{url('/')}}">English</a>
                                </p>
                                @if($settings['show_share_buttons'] == 1)
                                    <div class="follow-box center md-show">
                                        <a href="{{$settings['twitter_url']}}" target="_blank" class="follow">
                                            FOLLOW
                                            <svg version="1.1" width="20px" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;"
                                                 xml:space="preserve">
                                        <g id="XMLID_826_">
                                            <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
                                                c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
                                                c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
                                                C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
                                                c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
                                                c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
                                                c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
                                                c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
                                                c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
                                                c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
                                                c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
                                                C307.394,57.037,305.009,56.486,302.973,57.388z"/>
                                        </g>
                                    </svg>
                                            US </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </footer>
            @endif
        </div>
        @includeWhen(!$isHome && !request()->routeIs('tx.*'),'includes.fixed_toolbar')
    </div>
</div>

<div class="latest-tx-box">
    <div class="container"><span></span></div>
</div>

<div class="bar-cookies bar-cookies-hide">
    <div class="bar-cookies-inner">
        <div class="cookies-boxes">
            <div class="box-text">
                By using whir, you agree to <span class="nowrap"><a class="link-cookies" target="_blank"
                                                                    href="{{url('/privacy-policy')}}">Privacy policy</a></span>.
            </div>

            <div class="box-btn">
                <a class="btn btn-xs btn-dark" href="javascript:void(0)">Okay</a>
            </div>
        </div>
    </div>
</div>

@include('includes.modals.send_btc')
@include('includes.modals.btc_mixer')
@include('includes.modals.tx_check')
{{$modals ?? null}}
@stack('js')
</body>
</html>
