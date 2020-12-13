@extends('layout')
@section('title', 'Edit')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6 ">
            <form method="POST" action="{{ route('projects.update', $project)}}"  class="form bg-white shadow rounded py-3 px-4 ">
            <h3 class="display-4 ">Edit Project</h3>
                <hr>
                @method('PATCH')
                    @include ('projects._formProject',['btnText'=> 'Update'])

                </form>
        </div>
    </div>
</div>

@endsection
