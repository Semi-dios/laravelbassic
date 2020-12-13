@extends('layout')
@section('title', 'Create')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-sm-12 col-lg-6 ">
            <form method="POST"  class="form bg-white shadow rounded py-3 px-4 "action="{{ route('projects.store')}}">
            <h3 class="display-4 ">Create Project</h3>
            <hr>


                @include ('projects._formProject', ['btnText'=> 'Create'])

            </form>
        </div>
    </div>
</div>

@endsection
