@extends('layouts.front')


@section('content')
    <div class="content-wrap well">

    <div class="jumbotron">

        <h4>{{$thread->subject}}</h4>
        <br>
        <div class="thread-details">
            <?php echo $thread->thread ?>
        </div>
        <br>
        <p>By</p> <lead>Someone</lead>
        <br>
        <lead>{{$thread->created_at}}</lead>
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
    </div>

{{--    Comments--}}
    <br><br>
    <div class="comment">
        <label>Comments</label>
        @foreach($thread->comments as $comment)

            <div class="jumbotron comment-list well well-lg" >
                <h4><?php echo $comment->body; ?></h4>

                <lead>By : <?php echo $comment->user->name; ?></lead>
                <br><br>
                <lead>Commented at :  {{$comment->created_at}}</lead>
            </div>
        <hr>
        <br>
        @if(auth()->user()->id == $comment->user_id)
{{--            Comment Editing Modal--}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Edit
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Comment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="comment-form">
                                <form action="{{route('comment.update',$comment->id)}}" method="post" role="form">
                                    @csrf
                                    {{method_field('put')}}
                                    <legend>Edit Comment</legend>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="body" placeholder="input.." value="{{strip_tags($comment->body)}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary" >Save changes</button>


                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
{{--End comment editig modal--}}
            <form action = "{{route('comment.destroy',$comment->id)}}" method = "post" class="inline-it">
                @csrf
                {{method_field('DELETE')}}
                <input type = "submit" class="btn btn-xs btn-danger" value="Delete">
            </form>
            <br><br>
        @endif
            {{--Reply To Comment --}}

            @foreach($comment->comments as $reply)
                <div class="small well text-info reply-list" style="margin-left:50px">
                    <p>{{$reply->body}}</p>
                    <lead>by {{$reply->user->name}}</lead>
                    <br>
                    <div class="alert-danger">
                        <lead > Replied At: {{$reply->created_at}}</lead>
                    </div>

                    <br>
                </div>
                <hr>
                <br><br>
            @endforeach
            {{--                reply form--}}
            <div class="reply-form">
                <form action="{{route('replycomment.store',$comment->id)}}" method="post" role="form">
                    @csrf
                    <legend>Reply</legend>
                    <div class="form-group">
                        <input type="text" class="form-control" name="body" placeholder="input">
                    </div>
                    <button type="submit" class="btn btn-primary">Reply</button>

                </form>

            </div>
        @endforeach
    </div>

    <br><br>
{{--    comment form--}}
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

