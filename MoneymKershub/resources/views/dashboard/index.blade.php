@extends('layout.master')
@php
    $user =  \Illuminate\Support\Facades\Auth::user();
@endphp
<div class="modal fade modal-dialog-centered" id="postModel" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
            </div>
            <div class="modal-body">
                <form method="post" id="postForm">
                    @csrf
                    @if(isset($videoCustomer))
                        <input type="hidden" id="videoId" name="video_id" value="{{ $videoCustomer->id }}">
                    @endif
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
                        <button type="submit" class="btn btn-primary">Place post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-dialog-centered" id="checkLoginUser" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sorry</h1>
            </div>
            <div class="modal-body">
                You are not login first you need login
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                </a>
            </div>
        </div>
    </div>
</div>
@if(isset($user->role) && $user->role == \App\Models\User::TEACHER && isset($videos))
    <div class="mcw container" style="padding-top:50px">
        <div class="hading-box">
            <h2 class="Anek">My Video</h2>
        </div>
        <div class="videos" style="margin-top: 10px; display: flex; flex-flow: wrap">
            @if(count($videos) > 0)
                @foreach($videos as $video)
                    <div class="hading-box" style="padding: 0">
                        <iframe style="padding: 10px" src="https://www.youtube.com/embed/{{ $video->url }}" width="250"
                                height="250"
                                title="Bohemian The Muppets" frameborder="0" allowfullscreen></iframe>
                        <div class="action">
                            {{--                        <i class="fa text-primary fa-solid fa-pencil"></i>--}}
                            <i class="fa text-danger fa-solid fa-trash delete-model" data-id="{{ $video->id }}"></i>
                            <a href="{{ route('view.post',$video->id) }}"><i
                                    class="fa text-primary fa-solid fa-eye"></i></a>
                            <i class="fa fa-solid fa-share link-copy"
                               data-id="{{ env('APP_URL').'video/'.$video->url }}"></i>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="hading-box">
                    <h2 class="Anek">No Video</h2>
                </div>
            @endif
        </div>
    </div>
    <div class="modal fade modal-dialog-centered" id="videoDeleteModel" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Video</h1>
                </div>
                <div class="modal-body">
                    Are you sure to delete this item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger"><a class="action-delete" href="" style="color: white">Delete</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@elseif((isset($user->role) && $user->role == \App\Models\User::STUDENT) || $user->role == \App\Models\User::FREELANCER || isset($videoStudent) || isset($videoCustomer))
    @if(isset($videoCustomer))
        <div class="mcw container" style="padding-top:50px">
            <div class="hading-box">
                <h2 class="Anek">Video</h2>
            </div>
            <div class="videos" style="margin-top: 10px; display: flex; flex-flow: wrap">
                <div class="hading-box container" style="padding: 0">
                    <div>
                        <iframe style="padding: 10px" src="https://www.youtube.com/embed/{{ $videoCustomer->url }}"
                                width="100%"
                                height="500"
                                title="Bohemian The Muppets" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="post-parent">
                        <button class="btn btn-primary" style="margin-left: 10px"
                                id="{{ ($user)? 'openPostsModel' : 'openLoginCheckModel' }}">Add Post
                        </button>
                    </div>
                    <div class="already-post" style="margin-top: 20px">
                        <h4 class="Anek">
                            Already Posts
                        </h4>
                        <div id="posts">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="mcw container" style="padding-top:50px">
            <div class="hading-box">
                <h2 class="Anek">My Video</h2>
            </div>
            <div class="videos" style="margin-top: 10px; display: flex; flex-flow: wrap">
                @if(count($videoStudent) > 0)
                @foreach($videoStudent as $video)
                    <div class="hading-box" style="padding: 0">
                        <iframe style="padding: 10px" src="https://www.youtube.com/embed/{{ $video->url }}" width="250"
                                height="250"
                                title="Bohemian The Muppets" frameborder="0" allowfullscreen></iframe>
                        <div class="action">
                            <a href="{{ route('see.video',$video->url) }}"><i
                                    class="fa text-primary fa-solid fa-eye"></i></a>
                            <i class="fa fa-solid fa-share link-copy"
                               data-id="{{ env('APP_URL').'video/'.$video->url }}"></i>
                        </div>
                    </div>
                @endforeach
                @else
                    <div class="hading-box">
                        <h2 class="Anek">No Video</h2>
                    </div>
                @endif
            </div>
        </div>
    @endif
@endif
@section('script')
    @if(session('success'))
        <script>
            $(document).ready(function () {
                $.notify("{{ session('success') }}", "success");
            });
        </script>
    @endif
    <script>
        $(document).ready(function () {
            $('#posts').html('')
            var id = $("#videoId").val();
            $.ajax({
                method: 'get',
                url: '{{ route('get.posts') }}',
                data: {id: id},
                success: function (response) {
                    $('#posts').html(response.html)
                }, error: function (response) {
                    // $.notify(response);
                    console.log(response);
                }
            })
        })
        $(".delete-model").click(function () {
            var id = $(this).attr('data-id');
            var deleteUrl = "{{ route('destroy', ':id') }}".replace(':id', id);
            $(".action-delete").attr("href", deleteUrl);
            $("#videoDeleteModel").modal('show');
        });
        //post section start
        $("#openPostsModel").click(function () {
            $("#postModel").modal('show')
        })
        $(document).on('submit', '#postForm', function (e) {
            e.preventDefault()
            $('#loader-wrapper').fadeIn('slow');
            $('#posts').html('')
            var formData = $(this).serialize()
            $.ajax({
                method: 'post',
                url: '{{ route('post.create') }}',
                data: formData,
                success: function (response) {
                    $('#posts').html(response.html)
                    $.notify(response.massage, "success");
                    $("#postModel").modal('hide')
                    $('#loader-wrapper').fadeOut('slow');
                }, error: function (response) {
                    $.notify(response);
                    $('#loader-wrapper').fadeOut('slow');
                }
            })
        })
        $("#openLoginCheckModel").click(function () {
            $('#checkLoginUser').modal('show')
        })
        $('.link-copy').click(function () {
            var link = $(this).attr('data-id');
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(link);
            tempInput.select();
            tempInput[0].setSelectionRange(0, 99999); // Set selection range
            document.execCommand('copy');
            tempInput.remove();
            $.notify('Link Copy Success', "success");
        });
    </script>
@endsection
