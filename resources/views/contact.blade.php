@extends('layout')
@section('title', 'Contact')
@section('content')
<h3>Contact</h3>


<div class="container">
<div class="row">
    <div class="col-sm-12 col-lg-6">
        <form action="{{ route('message.store')}}" class="form" method="POST">
                @csrf
               <!--  @if($errors->any())
                <div class="alert alert-warning" role="alert">
                @foreach($errors-> all() as $error)
                    <p>Error <strong> {{ $error}}</strong> </p>
                @endforeach
                </div>
                @endif -->

            <div class="form-row">
                <div class="form-group">
                    <div class="form-heading">
                        <h3>FORMULARIO DE CONTACTO</h3>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <label for="">
                        Name
                    </label>
                    <input type="text" class="input" name="name" placeholder="name" value="{{old('name')}}" >
                    {!! $errors-> first('name', '<small>:message</small><br>')!!}
                </div>
                <div class="form-group col-sm-12">
                    <label for="">
                        Email
                    </label>
                    <input type="text" class="input" name="email" placeholder="email@hotmil.com" value="{{old('email')}}" >
                    {!! $errors-> first('email', '<small>:message</small><br>')!!}
                </div>
                <div class="form-group col-sm-12">
                    <label for="">
                        Asunto
                    </label>
                    <input type="text" class="input" name="case" placeholder="for example ..." value="{{old('case')}}">
                    {!! $errors-> first('case', '<small>:message</small><br>')!!}
                </div>
                <div class="form-group col-sm-12">
                    <label for="">
                        Asunto
                    </label>
                    <textarea name="content" id="" cols="30" rows="10" value="{{old('content')}}"></textarea>
                    {!! $errors-> first('content', '<small>:message</small><br>')!!}
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                <button type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

@endsection
