@if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="posts hading-box" onclick="window.location.href='{{ route('bids',$post->id) }}'"
             style="margin: 10px; margin-left: 0">
            <div>
                <img src="{{ asset('assets/img/bg.jpeg') }}" class="img-fluid">
            </div>
            <div style="margin-left: 10px;font-weight: bolder">
                <span>{{ $post->name }}</span>
                <p style="font-weight: normal; margin-top: 5px">
                    {{ $post->description }}
                </p>
                <span>$ {{ $post->amount }}</span>
            </div>
        </div>
    @endforeach
@else
    <p style="font-weight: normal; margin-top: 5px">
        No Post
    </p>
@endif
