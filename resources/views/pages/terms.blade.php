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


                <h1>{{$page->seo_title}}</h1>

                <div class="box-compressed-md">
                    {!! $page->content !!}
                    <div class="center content-button">
                        <a class="btn btn-primary" href="{{route('tx.new-mix')}}" data-modal="modal-btc-mixer"><span
                                class="md-show">GET STARTED NOW - </span>MIX BTC</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-delimiter page-delimiter-xl sm-show"></div>
    </div>
</x-app-layout>
