@extends('layouts.front')

@section('heading')
    <a href="{{route('thread.create')}}" class="btn btn-primary pull-right">Create Thread</a>
@endsection

@section('content')


    @include('layouts.partials.success')
@include('thread.partials.thread-list')


@endsection
