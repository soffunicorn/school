@extends('layouts.web')

@section('content')
<div class="container">
        <div class="row row-new">
            <div class="col-md-8 col-12">
                <div class="card card-img bg-dark text-white">
                    <img class="card-img" src="{{url('/')}}/img/puente-de-la-mujer-em-puerto-madero-bairro-de-buenos-aires-argentina-anton-petrus-istock-516140410.jpg" alt="Card image">
                </div>
                <br><br>
                <h5>Card title</h5>
                
                <p>Autor: Ibero</p>
                
                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat sed felis quis dictum. Nullam vel pharetra velit, sit amet placerat lectus. Donec mollis eros turpis, a aliquam mi placerat quis. Pellentesque vulputate bibendum facilisis. Suspendisse a consectetur turpis. Mauris eu turpis est. Curabitur vulputate mauris eget arcu interdum ullamcorper ac auctor lectus. Integer ex velit, pellentesque vel dictum aliquet, bibendum eget nisi. Proin consectetur sit amet nulla sit amet vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. In ultrices dictum dolor at bibendum. Donec ut pellentesque orci. Integer in enim ut sem accumsan gravida. Nam lobortis quam metus, sed feugiat nibh euismod vitae. Aenean sem urna, finibus sit amet est nec, fermentum semper magna.</p>

                <p align="justify">Aenean vestibulum quis metus a sollicitudin. Nulla facilisi. Integer lobortis faucibus felis, non pulvinar augue suscipit nec. Ut sagittis at massa ultricies tincidunt. Vivamus scelerisque vulputate malesuada. Vivamus condimentum euismod ullamcorper. Curabitur ornare elit quis urna fermentum, at scelerisque magna malesuada. Morbi placerat at tellus eu molestie.</p>

                <p align="justify">Curabitur sed neque mi. Integer lobortis tortor nec eros semper auctor. Aliquam eget eros accumsan, tincidunt elit nec, euismod turpis. Proin eu nulla quis lacus placerat venenatis. Aenean sed gravida diam, at ultricies elit. Aliquam turpis odio, vestibulum et suscipit et, euismod et tellus. Phasellus commodo dignissim enim non finibus.</p>
            </div>


            <div class="col-md-4 col-12">
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

                <h5 class="news-title">Latest news</h5>



                <div class="col-12 card card-top text-center">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="col-12 card card-top text-center">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection