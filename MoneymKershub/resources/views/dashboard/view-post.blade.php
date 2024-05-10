@extends('layout.master')
<div class="mcw container" style="padding-top:50px">
    <div class="hading-box">
        <h2 class="Anek">Posts</h2>
    </div>
    @foreach($posts as $key => $post)
        <div class="posts hading-box" style="margin: 10px; margin-left: 0">
            <div class="already-post">
                <img style="height: 100px;width: 100px" src="{{ asset('assets/img/bg.jpeg') }}" class="img-fluid">
            </div>
            <div class="responsive"
                style="display: flex; justify-content: space-between; margin-left: 10px;font-weight: bolder; width: 100% ">
                <div>
                    <h3>{{ $post->name}}</h3>
                    <p style="font-weight: normal; margin-top: 5px">
                        {{ $post->description}}</p>
                    <span>$ {{ $post->amount }}</span>
                </div>
                <div style="margin: 10px">
                    <button style="margin-top: 5px" data-id="{{ $key }}" data-post-id = '{{$post->id}}' class="btn btn-primary show-bid">
                        Show Bids
                    </button>
                </div>
            </div>
        </div>
        <div class="hading-box already-post append-bids-{{ $key }}" style="display: none">

        </div>
    @endforeach
</div>
@section('script')
    <script>
        var bidCount =0;
        $('.show-bid').click(function () {
            $('#loader-wrapper').fadeIn('slow');
            var id = $(this).attr('data-id');
            var postId = $(this).attr('data-post-id');
            if(bidCount == 0){
                $(this).text('Hide Bids')
                $('.append-bids-' + id).html('')
                $.ajax({
                    method:'GET',
                    url:'{{ route('get.bid.html') }}',
                    data: {id: postId},
                    success:function (response){
                        $('.append-bids-' + id).html(response.html);
                        $('.append-bids-' + id).css('display', 'block')
                        bidCount++;
                        $('#loader-wrapper').fadeOut('slow');
                    }
                })
            }else{
                $(this).text('Show Bids')
                $('.append-bids-' + id).html('')
                $('.append-bids-' + id).css('display', 'none')
                bidCount--;
                $('#loader-wrapper').fadeOut('slow');
            }
        })
        $(document).on('click','#cheating',function (){
           var id = $(this).attr('data-id');
          window.location.href = baseUrl+'chatify/'+id;
        })
    </script>
@endsection
