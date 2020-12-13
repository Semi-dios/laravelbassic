@extends('layout')
@section('title', 'About')
@section('content')
<div class="container">
        <div class="row">
        <div class="col-sm-12 col-lg-6">
            <img  class="img-fluid" src="/img/desing.svg" alt="Web About">
        </div>
            <div class="col-sm-12 col-lg-6">
                <h1 class="display-4 text-primary">About</h1>
                <p class="lead text-secondary">
                   Junior Web Development with 1 year old of experience able to build Php('Laravel')  web applications from the ground up. Extremely passionate to wards software architecture and desing combined with sensitivity  to serve the needs of the business
                </p>
                <h1 class="display-4 text-primary">Skills</h1>
                <ul class="list-group mb-3">
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                                Html
                           </p>
                    </li>
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                                Css
                           </p>
                    </li>
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                               JavaScript
                           </p>
                    </li>
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                                Php
                           </p>
                    </li>
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                               Laravel
                           </p>
                    </li>
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                               Sass
                           </p>
                    </li>
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                               Vue
                           </p>
                    </li>
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                               Onsen Ui
                           </p>
                    </li>
                    <li class="list-group-item ">
                           <p class="lead text-black-50 mb-0">
                               Bootstrap
                           </p>
                    </li>
                </ul>
                <a  class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contact me</a>
                <a  class="btn btn-lg btn-block btn-outline-primary" href="{{route('contact')}}">Projects</a>
            </div>
        </div>
    </div>

@endsection
