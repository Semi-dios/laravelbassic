@extends('layout')
@section('title', 'Create')

@section('content')
<div class="container">

<div class="row justify-content-center">
<div class="col-sm-12">
<section>
    <div class="title">
    <h3>Create Project</h3>
    </div>
    <article>
        <div class="row">
            <div class="col-sm-12">
                @if($errors->any())
                    <ul class="list-group">
                        @foreach($errors-> all() as $error)
                            <li class="list-item">
                            <div class="alert alert-danger" role="alert">
                                <p>{{$error}}</p>
                            </div>
                            </li>
                        @endforeach
                    </ul>

                @endif
            </div>
            <div class="col-sm-12">
                <form method="POST" action="{{ route('projects.store')}}">
                @csrf
                   <div class="form-row">
                        <div class="form-group col-sm-12">
                          <label for="">Title project</label>
                            <input type="text" name="title">
                        </div>
                        <div class="form-group col-sm-12">
                          <label for="">Url project</label>
                            <input type="text" name="url">
                        </div>
                        <div class="form-group col-sm-12">
                          <label for="">Description</label>
                            <textarea type="text" name="description"></textarea>
                        </div>
                   </div>
                   <div class="form-row">
                    <div class="form-group col-sm-12">
                        <button type="">Create</button>
                    </div>
                   </div>
                </form>
            </div>
        </div>
    </article>
</section>

</div>
</div>
</div>

@endsection
