@extends('layout.master')
<div class="modal fade modal-dialog-centered" id="bidModel" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Place bid</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('bid.create') }}" id="bidForm">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Enter Name :</label>
                        <input type="text" name="name" class="form-control" required id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Amount :</label>
                        <input type="number" name="amount" class="form-control" required id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description :</label>
                        <textarea class="form-control" required id="message-text" name="description"></textarea>
                    </div>
                    <div class="modal-footer" style="padding-bottom: 0px">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Place bid</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mcw container" style="padding-top:50px">
    <div class="hading-box">
        <h2 class="Anek">Video</h2>
    </div>
    <div class="posts hading-box" style="margin: 10px; margin-left: 0">
        <div class="already-post">
            <img style="height: 100px;width: 100px" src="{{ asset('assets/img/bg.jpeg') }}" class="img-fluid">
        </div>
        <div style="display: flex; justify-content: space-between; margin-left: 10px;font-weight: bolder; width: 100% ">
            <div>
                <h3>{{ $post->name}}</h3>
                <p style="font-weight: normal; margin-top: 5px">
                    {{ $post->description}}</p>
                <span>$ {{ $post->amount }}</span>
            </div>
            <div style="margin: 10px">
                <h3>Bids : {{ $totalBids }}</h3>
                <button style="margin-top: 5px" class="btn btn-primary"
                        id="placeBid">{{--<a href="" style="color: white; text-decoration: none"> Pleas Bid </a>--}}
                    Place Bid
                </button>
            </div>
        </div>
    </div>
    <div class="hading-box">
        <div class="already-post" style="margin-top: 20px">
            <h4 class="Anek">
                Already Bids
            </h4>
            @if(count($bids)>0)
                @foreach($bids as $bid)
                    <div class="posts hading-box" onclick="" style="margin: 10px; margin-left: 0">
                        <div>
                            <img src="{{ asset('assets/img/bg.jpeg') }}" class="img-fluid">
                        </div>
                        <div style="margin-left: 10px;font-weight: bolder">
                            <span>{{ $bid->name }}</span>
                            <p style="font-weight: normal; margin-top: 5px">
                                {{ $bid->description }}
                            </p>
                            <span>$ {{ $bid->amount }}</span>
                        </div>
                    </div>
                @endforeach
            @else
                <p style="font-weight: normal; margin-top: 5px">
                    No bids
                </p>
            @endif
        </div>
    </div>
</div>
@section('script')
    @if(session('success'))
        <script>
            $(document).ready(function () {
                $.notify("{{ session('success') }}", "success");
            });
        </script>
    @endif
    <script>
        $('#placeBid').click(function () {
            $('#bidModel').modal('show')
        })
    </script>
@endsection
