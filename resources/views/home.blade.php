@extends("layouts.master")

@section("contenu")
<div class="row">
    <div class="p-4 col-12">
        <div class="jumbotron">
            <h1 class="display-3">Bienvenue, <strong>{{ userFullName() }}</strong></h1>
            <p class="lead">This is a simple hero unit, a simple jumbotrom-style component for calling extra attention
                to featured content or information</p>
            <hr class="my-4">
            <p>It uses utiity classes for typography and spancing to space ontent out within the larger container</p>
            <p class="lead"></p>
            <a href="#" class="btn btn-primary btn-lg" role="button">Learn more</a>
        </div>
    </div>
</div>
@endsection


{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div>
@endsection
--}}
