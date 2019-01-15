@extends('layouts.web')
@section('banner')
<div class="container banner-contact">
        <div class="row banner-overlay">
            <div class="col-12 welcome-message" align="center">
                <h3 align="center" class="title">Contact Form</h3>
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
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection