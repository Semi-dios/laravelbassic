@extends('layout')
@section('title', 'Home')

@section('content')
<h3>Home</h3>
Bienvenid@
<?php
    echo $name ?? 'invitado';
?>
@endsection

