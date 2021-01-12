<div class="list-group">
    @forelse($threads as $thread)
        <a href="{{route('thread.show',$thread->id)}}" class="list-group-item">
            <h4 class="list-group-item-heading">{{$thread->subject}}</h4>
            <p class="list-group-item-text">{{$thread->thread}}</p>


        </a>
    @empty
        <h5>No Threads </h5>
    @endforelse

</div>
