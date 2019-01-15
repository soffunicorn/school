@extends('layouts.web')

@section('content')
 <div class="container">
        <div class="row row-new">
            <div class="col-md-8 col-12">
                <a href="{{route('web.details.news', 'details')}}">
                    <div class="card card-img bg-dark text-white">
                        <img class="card-img" src="{{url('/')}}/img/puente-de-la-mujer-em-puerto-madero-bairro-de-buenos-aires-argentina-anton-petrus-istock-516140410.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Ibero Spanis</p>
                        </div>
                    </div>
                </a>

                <h5 class="news-title">Latest news</h5>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-12 mg-b">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12 mg-b">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <h5>Trendig news</h5>

                <div class="col-12 card card-top text-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{url('/')}}/img/puente-de-la-mujer-em-puerto-madero-bairro-de-buenos-aires-argentina-anton-petrus-istock-516140410.jpg" class="img-trending">
                            </div>
                            <div class="col-6">
                                <p class="card-title">Card title</p>
                                <p class="card-text text-element">This card has a regular title...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 card card-top text-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{url('/')}}/img/puente-de-la-mujer-em-puerto-madero-bairro-de-buenos-aires-argentina-anton-petrus-istock-516140410.jpg" class="img-trending">
                            </div>
                            <div class="col-6">
                                <p class="card-title">Card title</p>
                                <p class="card-text text-element">This card has a regular title...</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection