@extends('layouts.front')

@section("heading","Create Thread")

@section('content')
@include('layouts.partials.error')

@include('layouts.partials.success')
    <div>
            <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form" id="create-thread-form">
                @csrf
                <div class="jumbotron">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="" placeholder="Input..." value="{{old('subject')}}">
                </div>
                <hr>

                <div class="jumbotron">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="" placeholder="Input..." value="{{old('type')}}">
                </div>
                <hr>
                <div class="jumbotron">
                    <label for="thread">Thread</label>
                    <textarea id="editor" name="thread"></textarea>
                </div>
                <hr>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>




    </div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    window.onload = function(){
        CKEDITOR.replace('editor',{
            filebrowserBrowserUrl:filemanager.ckBrowseUrl
        })
    }
</script>
@endsection
