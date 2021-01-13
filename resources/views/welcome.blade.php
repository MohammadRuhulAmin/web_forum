@extends('layouts.front')

@section('banner')
    <div class="jumbotron">
        <div class="container">
            <h1>join Alokito Hridoy Foundation </h1>
            <b>Alokito Ridoy Forum</b>
            <br>
            <p>
                <a class="btn btn-primary btn-lg" href="https://alokitohridoy.org/">Learn More</a>
            </p>
        </div>

@endsection

@section('heading',"Threads")

@section('content')

@include('thread.partials.thread-list')

@endsection
