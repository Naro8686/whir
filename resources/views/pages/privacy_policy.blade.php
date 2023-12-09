<x-app-layout>
    <x-slot name="seo_title">
        {{$page->seo_title}}
    </x-slot>
    <x-slot name="seo_description">
        {{$page->seo_description}}
    </x-slot>
    <x-slot name="seo_keywords">
        {{$page->seo_keywords}}
    </x-slot>
    <div class="container">
        <div class="container-inner container-content container-body">
            <div class="boxes">


                <strong class="over-title"> </strong>


                <h1>Privacy policy</h1>

                <div class="box-compressed-md">
                    <p>
                        To deliver the stated services, Whir is liable to collect and temporarily store private
                        identification information in various forms in the case where a user visits the website,
                        uses the service, or interacts with the help desk. </p>


                    <p>If considered necessary, a user can voluntarily provide us with a name, e-mail address, and
                        information on used bitcoin addresses, for example, in solving issues by our <a
                            href="/help" target="_blank" rel="noopener">help center</a>. This information is
                        not mandatory, and we will collect it only if provided voluntarily.</p>
                    <h2>How do we use collected information (NO-LOGS policy)</h2>
                    <p>Whir can collect and use private user data to deliver services under and not beyond the
                        determined liability. Once the services are provided, all data is deleted.</p>
                    <p>All transaction information is deleted after 24 hours. Upon a voluntary initiative of a user,
                        this period may be prolonged for a time required for the settlement of various questions
                        that a user may face.</p>
                    <h2>Non-personal identification information</h2>
                    <p>Whir does not collect non-personal identification information on visitors when they interact
                        with our website. Non-personal identification information may include but are not limited
                        to:</p>
                    <ul>
                        <li>computer type,</li>
                        <li>mobile device,</li>
                        <li>smartphone model,</li>
                        <li>operating system,</li>
                        <li>internet access provider,</li>
                        <li>cellular service provider.</li>
                    </ul>
                    <p>In order to enhance privacy when interacting with our site, we do detect the web browser
                        type. Upon detecting the Tor browser, we display a pop-up window, suggesting you can switch
                        to the Tor (onion) version of our site.</p>
                    <h2>Collection of information by third-party apps</h2>
                    <p>In order to protect your privacy, we do not use third-party apps, such as Google Analytics or
                        Google Webmaster Tools. However, in order to ehnance your privacy when using Whir, you can
                        use the Tor mirror of our website, accessible only through a Tor browser. The main
                        functionality of our service is preserved in the Tor version.</p>
                    <h2>Cookies in web browsers</h2>
                    <p>Whir uses a temporary wh_session cookie file that is automatically deleted when you close
                        your web browser.</p>
                    <h2>How do we protect user information</h2>
                    <p>Whir takes all necessary measures to protect your data in terms of collection, storing and
                        processing, and also security measures to prevent unauthorized access, change, disclosure,
                        or destruction of private identification information and transactional data.</p>
                    <p>Sensitive information and private data exchange between the website and its users is
                        accomplished via the secure SSL channel for communication and encrypted with digital
                        signatures, or via the encrypted Tor network.</p>
                    <h2>Shared use of personal user information</h2>
                    <p>We do not sell, impart, or rent out personal user information to third parties. Please, note
                        that any transactions in the bitcoin network are publicly available, and we have no
                        opportunity to exclude those transactions from the blockchain.</p>
                    <h2>Privacy Policy changes</h2>
                    <p>Whir has a right to update this Privacy Policy at its own and sole discretion at any time. We
                        encourage users to check this page for any changes frequently. You acknowledge and agree
                        that it is your responsibility to view this Privacy Policy and be aware of changes
                        periodically.</p>
                    <h2>Your acceptance of these terms</h2>
                    <p>By using Whir, its Tor mirror, and services, you indicate your consent to this Policy. If you
                        do not agree to this Privacy Policy, please do not use the Whir website or services. Your
                        continued use of the site or services following changes in this Policy constitutes your
                        agreement to such changes.</p>
                    <p>May 1, 2022</p>

                    <div class="center content-button">
                        <a class="btn btn-primary" href="{{route('tx.new-mix')}}" data-modal="modal-btc-mixer"><span
                                class="md-show">GET STARTED NOW - </span>MIX BITCOINS</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-delimiter page-delimiter-xl sm-show"></div>
    </div>
</x-app-layout>
