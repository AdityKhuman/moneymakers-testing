<h3>Bids</h3>
@if(count($bids) > 0)
    @foreach($bids as $bid)
        <div class="posts hading-box" style="margin: 10px; margin-left: 0">
            <div>
                <img src="{{ asset('assets/img/bg.jpeg') }}" class="img-fluid">
            </div>
            <div style="display:flex; width: 100%; justify-content: space-between">
                <div style="margin-left: 10px;font-weight: bolder">
                    <span>{{ $bid->name }}</span>
                    <p style="font-weight: normal; margin-top: 5px">
                        {{ $bid->description }}
                    </p>
                    <span>$ {{ $bid->amount }}</span>
                </div>
                <div>
                    <button id="cheating" class="btn btn-primary" data-id="{{$bid->user_id}}">Let's Chat</button>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p>No Bids</p>
@endif
