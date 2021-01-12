@extends('layouts.front')

@section('banner')
    <div class="jumbotron">
        <div class="container">
            <h1>join Webdev Comunity</h1>
            <p>Hands for hends</p>
            <br>
            <p>
                <a class="btn btn-primary btn-lg">Learn More</a>
            </p>
        </div>

    </div>
@endsection

@section('heading',"Threads")

@section('content')

@include('thread.partials.thread-list')

@endsection
