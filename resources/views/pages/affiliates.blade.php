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

                <strong class="over-title"></strong>
                <h1>{{$page->seo_title}}</h1>

                <div class="box-compressed-md">

                    {!! $page->content !!}

                    <div class="content-form bg-default">
                        <form action="{{route('affiliates.login')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-boxes">
                                <h2>Sign in or Sign Up</h2>
                                <p>
                                    <strong>First-time user?</strong> Provide the BTC address we send the
                                    commision to and the password to sign up for affiliate program. </p>
                                <p>
                                    <strong>Existing user?</strong> Fill in your credentials to sign in. </p>

                                <div class="box-md-5">
                                    <div class="input-field-group">
                                        <div class="input-field input-field-sm input-field-noshadow">
                                            <input type="text" name="username" placeholder=" " id="_f1" value=""
                                                   autocomplete="off" autofocus/>
                                            <label for="_f1">BTC ADDRESS</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-md-5">
                                    <div class="input-field-group">
                                        <div class="input-field input-field-sm input-field-noshadow">
                                            <input class="jsPassword" type="text" name="password" placeholder=" "
                                                   id="_f2" value="" autocomplete="off"/>
                                            <label for="_f2">PASSWORD</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-md-10">
                                    <button type="submit" class="btn btn-dark btn-xl text-nowrap">LET ME IN</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
