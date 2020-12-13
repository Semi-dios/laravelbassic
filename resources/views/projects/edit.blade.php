@extends('layout')
@section('title', 'Edit')

@section('content')
<div class="container">

<div class="row justify-content-center">
<div class="col-sm-12">
<section>
    <div class="title">
    <h3>Edit Project: </h3>
    </div>
    <article>
        <div class="row">
        @include ('partials.validation-errors')
            <div class="col-sm-12">

                <form method="POST" action="{{ route('projects.update', $project)}}">
                 @method('PATCH')

                   @include ('projects._formProject',['btnText'=> 'Update'])

                </form>
            </div>
        </div>
    </article>
</section>

</div>
</div>
</div>

@endsection
