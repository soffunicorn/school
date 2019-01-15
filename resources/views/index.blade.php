@extends('layouts.web')
@section('banner')
<div class="container banner-home">
 <div class="row">
            <div class="col-md-7 col-12 welcome-message">
                <h3 align="center" class="title">WELCOME TO ÍBERO SPANISH SCHOOL!</h3>
                <p class="banner-text">Don’t miss out on the best rate in town for academic Spanish group classes! Thanks to many years of experience...</p>
                <center>
                    <button type="button" class="btn btn-more">Learn More</button>
                </center>
            </div>
        </div>
    </div>
@endsection
@section('content')
 <div class="container space-col">
        <div class="row">
            <div class="col-12 grey-text">
                <h3 class="title" align="center">Best Buenos Aires Spanish Classes!</h3>
                <hr>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-12 mg-b" align="center">
                <div class="card blue-card">
                    <div class="card-body">
                        <i class="far fa-check-circle checki" align="center"></i><br>
                        <h5 class="card-title title">30 hour per week, Combination course</h5>
                        <p class="card-text">These Spanish classes have all the benefits of a group class...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 mg-b" align="center">
                <div class="card orange-card">
                    <div class="card-body">
                        <i class="far fa-check-circle checki" align="center"></i><br>
                        <h5 class="card-title title">10 hour per week Private Class</h5>
                        <p class="card-text">You can study Spanish in private classes for 10 hours per week, 2...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mg-b" align="center">
                <div class="card green-card">
                    <div class="card-body">
                        <i class="far fa-check-circle checki" align="center" style="width:120px;"></i><br>
                        <h5 class="card-title title">20 hour Spanish group class</h5>
                        <p class="card-text">You can study Spanish for 20 hours per week in order to gain...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container about-back">
        <div class="row">
            <div class="col-md-6 col-12 space-about-us-text">
                <h3 align="center" class="title">About Us</h3>
                <hr class="hr-text">
                <p align="justify">We are committed to providing excellence in the tuition of Spanish as a foreign language while caring for the educational and social needs of each individual student. We are a group of linguists, graduated from Universidad de Buenos Aires and Universidad del Salvador, as well as University of Leeds in...</p>
                <center>
                    <button type="button" class="btn btn-more">Read More</button>
                </center>
            </div>

            <div class="col-md-6 col-12  no-space-vertical">
                <img src="{{url('/')}}/img/welcome.jpg" class="about-img">
            </div>
        </div>
    </div>

    <div class="container space-col">
        <div class="row">
            <div class="col-12 grey-text">
                <h3 class="title" align="center">Learn Our Most Valuable Courses Here</h3>
                <hr>
            </div>
        </div>

        <div class="row justify-content-center some-space">
            <div class="col-md-4 col-12">
                <div class="card card-white">
                    <img class="card-img-top" src="{{url('/')}}/img/curso.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">30 hour per week, Combination course</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="far fa-clock"></i> 16th agosto 2018</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card card-white">
                    <img class="card-img-top" src="{{url('/')}}/img/curso2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">10 hour per week Private Class</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="far fa-clock"></i> 16th agosto 2018</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card card-white">
                    <img class="card-img-top" src="{{url('/')}}/img/curso3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">20 hour Spanish group class</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="far fa-clock"></i> 16th agosto 2018</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card card-white">
                    <img class="card-img-top" src="{{url('/')}}/img/curso4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Spanish Classes at all Levels!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="far fa-clock"></i> 16th agosto 2018</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card card-white">
                    <img class="card-img-top" src="{{url('/')}}/img/curso5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">TEFL Course</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="far fa-clock"></i> 16th agosto 2018</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="card card-white">
                    <img class="card-img-top" src="{{url('/')}}/img/curso6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Spanish Classes</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="far fa-clock"></i> 16th agosto 2018</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.carrousel')

    <div class="container space-col apply">
        <div class="row">
            <div class="col-12">
                <h3 class="title apply-text" align="center">Application Form</h3>
                <hr>
                <center>
                    <a href="{{route('web.apply')}}" class="btn btn-more">Apply now</a>
                </center>
            </div>
        </div>
    </div>

@endsection
