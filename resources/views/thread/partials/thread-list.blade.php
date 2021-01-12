<div class="list-group">
    @foreach($threads as $thread)
        <a href="" class="list-group-item">
            <h4 class="list-group-item-heading">{{$thread->subject}}</h4>
            <p class="list-group-item-text">{{$thread->thread}}</p>

        </a>
    @endforeach

</div>
