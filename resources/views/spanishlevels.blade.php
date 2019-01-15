@extends('layouts.web')
@section('banner')
    <div class="container level-banner">
        <div class="row banner-overlay">
            <div class="col-12 welcome-message" align="center">
                <h3 align="center" class="title">Spanish Levels</h3>
            </div>
        </div>
    </div>

@endsection
@section('content')
    <div class="container">
        <div class="row space-text-dos">
            <div class="col-12">
                <br>
                <h3 class="title" align="center">Spanish levels at Íbero</h3>
                <hr>
            </div>

            <div class="col-md-6 col-12">
                <p align="justify">Íbero has eight levels of Spanish. Each level is divided into three week segments, and commences every Monday. Audiovisual presentations, accent reduction courses, conversation classes, and more content supplement the learning process.</p>

                <p align="justify">At Íbero, students learn to use Spanish in everyday life – not just the classroom. Our courses focus on giving students the tools and the confidence to deal with Spanish speakers in any situation.</p>

                <p align="justify">NOTE: Íbero customizes private lessons to meet the needs of each individual student according to his/her level and preferences.</p>

                <p align="justify">An initial placement exam determines the level at which the student should start, and each three week segment concludes with a Thursday review and a Friday exam before students progress to the next level. Upon leaving the school, each student receives a diploma indicating his or her final level of study. Our diploma is recognized by national and international authorities.</p>
            </div>

            <div class="col-md-6 col-12">
                <img src="{{url('/')}}/img/levelsclass.jpg" class="img-complete">
            </div>
        </div>
    </div>

    <div class="container space-col grey some-space">
        <div class="row">
            <div class="col-12">
                <br>
                <h3 class="title" align="center">Íbero list of levels</h3>
                <hr>
            </div>

            <div class="col-md-3 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/student.png" class="avatar">
                        <p class="card-text">Beginner <br>(Principiante I)</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">
                            <small class="text-muted"><i class="far fa-bookmark"></i> Apply Now</small>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/student%20(2).png" class="avatar">
                        <p class="card-text">Beginner <br>(Principiante II)</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">
                            <small class="text-muted"><i class="far fa-bookmark"></i> Apply Now</small>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/boy.png" class="avatar">
                        <p class="card-text">Intermediate I <br>(Intermedio I)</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">
                            <small class="text-muted"><i class="far fa-bookmark"></i> Apply Now</small>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/girl.png" class="avatar">
                        <p class="card-text">Intermediate II <br>(Intermedio II)</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">
                            <small class="text-muted"><i class="far fa-bookmark"></i> Apply Now</small>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/teacher.png" class="avatar">
                        <p class="card-text">Intermediate III <br>(Intermedio III)</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">
                            <small class="text-muted"><i class="far fa-bookmark"></i> Apply Now</small>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/student%20(1).png" class="avatar">
                        <p class="card-text">Pre-advanced <br>(Pre-avanzado)</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">
                            <small class="text-muted"><i class="far fa-bookmark"></i> Apply Now</small>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/trophy.png" class="avatar">
                        <p class="card-text">Advanced <br>(Avanzado)</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">
                            <small class="text-muted"><i class="far fa-bookmark"></i> Apply Now</small>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/owl.png" class="avatar">
                        <p class="card-text">Superior <br>(Superior)</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">
                            <small class="text-muted"><i class="far fa-bookmark"></i> Apply Now</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container space-col some-space">
        <div class="row">
            <div class="col-12">
                <br>
                <h3 class="title" align="center">Íbero levels compared to European standards</h3>
                <hr>
                <p class="justify">Íbero levels compare to the Common European Framework of Reference for Languages: Learning, Teaching and Assessment in the following manner:</p>
            </div>

            <div class="col-md-4 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/student.png" class="avatar">
                        <p class="card-text">Beginner I: <br>A1 Breakthrough</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/student%20(2).png" class="avatar">
                        <p class="card-text">Beginner II:<br> A2 Waystage</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/boy.png" class="avatar">
                        <p class="card-text">Intermediate I: <br>B1 Threshold</p>
                    </div>
                </div>
            </div>
        
            <div class="col-md-4 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/student%20(1).png" class="avatar">
                        <p class="card-text">Intermediate II: <br>B2 Vantage</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/trophy.png" class="avatar">
                        <p class="card-text">Intermediate III and Pre-advanced:<br> C1- Effective Operational Proficiency</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-12" align="center">
                <div class="card card-white">
                    <div class="card-body">
                        <img src="{{url('/')}}/img/owl.png" class="avatar">
                        <p class="card-text">Advanced and Superior:<br> C2- Mastery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container grabiente">
        <div class="row backed">
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