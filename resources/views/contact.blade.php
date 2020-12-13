@extends('layout')
@section('title', 'Contact')
@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-sm-12 col-lg-6">

        <form action="{{ route('message.store')}}" class="form bg-white shadow rounded py-3 px-4" method="POST">
                @csrf
               <!--  @if($errors->any())
                <div class="alert alert-warning" role="alert">
                @foreach($errors-> all() as $error)
                    <p>Error <strong> {{ $error}}</strong> </p>
                @endforeach
                </div>
                @endif -->

            <div class="form-row">
                <div class="form-group col-sm-12">
                    <div class="form-heading">
                        <h3 class="font-weight-bold text-black display-4">Form Contact</h3>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <label for="name">
                        Name
                    </label>
                    <input type="text" class="input form-control bg-light shadow-sm border-0 @error('name') is-invalid  @enderror" id="name" name="name" placeholder="name" value="{{old('name')}}" >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}}</strong>
                        </span>
                        @enderror

                </div>
                <div class="form-group col-sm-12">
                    <label for="email">
                        Email
                    </label>
                    <input type="text" class="input form-control bg-light shadow-sm border-0 @error('email') is-invalid  @enderror" id="email "name="email" placeholder="email@hotmil.com" value="{{old('email')}}" >
                         @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-group col-sm-12">
                    <label for="case">
                        Asunto
                    </label>
                    <input type="text" class="input form-control bg-light shadow-sm border-0 @error('case') is-invalid  @enderror" id="case" name="case" placeholder="for example ..." value="{{old('case')}}">
                     @error('case')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-group col-sm-12">
                    <label for="content">
                        Asunto
                    </label>
                    <textarea name="content" id="content" cols="5" rows="2" value="{{old('content')}}" class="bg-light shadow-sm border-0 form-control @error('content') is-invalid  @enderror""></textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message}}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                <button class="btn-lg btn-block btn-primary"type="submit">Send</button>
                </div>
            </div>
        </form>

    </div>
</div>
</div>

@endsection
