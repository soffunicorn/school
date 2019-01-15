@extends('layouts.web')
@section('banner')
<div class="banner-about" style="margin:0;">
 <div class="row" style="margin:0;">
            <div class="row banner-overlay">
            <div class="col-12 welcome-message" align="center">
                <h3 align="center" class="title">About Us</h3>
            </div>
        </div>
        </div>
    </div>
@endsection
@section('content')

  <div class="container">
        <div class="row space-text"  style="margin:0;"> 
            <div class="col-12">
                <br>
                <h3 class="title" align="center">Wellcome to Íbero Spanish School</h3>
                <hr>
                <p align="justify">We are committed to providing excellence in the tuition of Spanish as a foreign language while caring for the educational and social needs of each individual student.</p>
                
                <p align="justify">We are a group of linguists, graduated from Universidad de Buenos Aires and Universidad del Salvador, as well as University of Leeds in the UK. We are University Professors and researchers and count with vast experience in the Spanish immersion language teaching skills and methods and have been running the school for 19 years. We have vast experience in Spanish immersion language teaching skills and methods. All Íbero employees know how to enable a student to learn more in less time and we keep our promise by offering a wide variety of innovative Spanish programs for many different learning needs. Being located in Buenos Aires, Íbero strives to also expose students to slang and terminologies that are frequently used in Argentina and Latin America. Students who master the Spanish language will easily be able to find jobs using their new skills.</p>
            </div>
        </div>
    </div>
    
    <div class="container grabiente">
        <div class="row backed" style="margin:0;">
            <div class="col-12">
                <h3 class="title apply-text" align="center">Aplication Form</h3>
                <hr>
                <center>
                    <a href="{{route('web.apply')}}" class="btn btn-more">Apply now</a>
                </center>
            </div>
        </div>
    </div>
        @include('layouts.carrousel')
    @endsection