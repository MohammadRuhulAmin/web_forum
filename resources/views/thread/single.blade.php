@extends('layouts.front')


@section('content')
    <h4>{{$thread->subject}}</h4>
    <br>
    <div class="thread-details">
        <?php echo $thread->thread ?>

    </div>
    <br><br>
    @if(auth()->user()->id == $thread->user_id)
        <div class="actions" >
            <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>
            <form action="{{route('thread.destroy',$thread->id)}}" method="post" class="inline-it">
                @csrf
                {{method_field('DELETE')}}
                <input class="btn btn-xs btn-danger" type="submit" value="Delete">

            </form>
        </div>
    @endif

{{--    Comments--}}
    <br><br>
    <div class="comment">
        <label>Comments</label>
        @foreach($thread->comments as $comment)
{{--            <h4>{{$comment->body}}</h4>--}}
        <h4><?php echo $comment->body; ?></h4>
{{--            <lead>{{$comment->user->name}}</lead>--}}
            <lead><?php echo $comment->user->name; ?></lead>
        @endforeach
    </div>
    <br><br>
    <div class="comment-form">
        <form action="{{route('threadcomment.store',$thread->id)}}" method="post" role="form">
            @csrf
            <legend>Create Comment</legend>
            <div class="form-group">


                <textarea id="editor" name="body"></textarea>
                <button type="submit" class="btn btn-primary">Comment</button>
            </div>

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
