@extends('layouts.front')



@section('content')

    <h2>Threads</h2>
    @include('layouts.partials.success')
@include('thread.partials.thread-list')


@endsection
