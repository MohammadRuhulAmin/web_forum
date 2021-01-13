<div class="list-group">
    @forelse($threads as $thread)
        <div class="jumbotron">
            <a href="{{route('thread.show',$thread->id)}}" class="list-group-item">
                <h4 class="text-danger" class="list-group-item-heading">{{$thread->subject}}</h4>
                <p class="list-group-item-text"><?php echo $thread->subject?></p>
            </a>
        </div>

    @empty
        <h5>No Threads </h5>
    @endforelse

</div>
