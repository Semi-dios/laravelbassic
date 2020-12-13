@extends('layout')
@section('title', 'Home')

@section('content')


    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-lg-6">
            <img  class="img-fluid" src="/img/developer.svg" alt="Web Developer">
        </div>
            <div class="col-sm-12 col-lg-6">
                <h1 class="display-4 text-primary">Web Developer</h1>
                <p class="lead text-secondary">
                   Junior Web Development with 1 year old of experience able to build Php('Laravel')  web applications from the ground up. Extremely passionate to wards software architecture and desing combined with sensitivity  to serve the needs of the business
                </p>


                <a  class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contact me</a>
                <a  class="btn btn-lg btn-block btn-outline-primary" href="{{route('contact')}}">Projects</a>
            </div>
        </div>
    </div>
@endsection

