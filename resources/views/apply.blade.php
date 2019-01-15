@extends('layouts.web')
@section('banner')
<div class="container level-banner">
        <div class="row banner-apply">
            <div class="col-12 welcome-message" align="center">
                <h3 align="center" class="title">Apply now</h3>
            </div>
        </div>
    </div>
@endsection
@section('content')
   <div class="container">
        <div class="row row-space">
            <div class="col-12">
                <h4 align="center">Personal Information</h4>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Date of Birth:</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Femenine</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Masculine</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Write your email again, please:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write your email again, please">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nationality:</label>
                        <select class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nationality:</label>
                        <select class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">Google</option>
                            <option value="3">Google Ads</option>
                            <option value="3">Facebook</option>
                            <option value="4">Instagram</option>
                            <option value="5">Twitter</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Emergency Contact:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Emergency Contact">
                    </div>
                    
                    <br>
                    <h4 align="center">Classes</h4>
                    <br>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Spanish Level:</label>
                        <select class="custom-select">
                            <option selected>Open this select menu</option>
                            <option value="1">Absolu Beginner </option>
                            <option value="3">Beginner</option>
                            <option value="3">Intermediate</option>
                            <option value="4">Advanced</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">What Language(s) do You Speak?:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="What Language(s) do You Speak?">
                    </div>
                    
                    <br>
                    <h4 align="center">Group course starting date</h4>
                    <br>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Spanish group course ending date:</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Weeks of Spanish Group Classes?:</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Would you like to take private lessons as well?:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hours of Private Classes Only:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">10</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">20</label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">30</label>
                        </div>
                    </div>
                    <hr>
                    
                    <div class="col-12"><button type="submit" class="btn btn-primary btn-apply">Submit</button></div>
                </form>
            </div>
        </div>
    </div>

@endsection