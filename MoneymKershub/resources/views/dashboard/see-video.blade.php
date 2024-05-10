@extends('layout.master')
<div class="mcw container" style="padding-top:50px">
    <div class="hading-box">
        <h2 class="Anek">Video</h2>
    </div>
    <div class="videos" style="margin-top: 10px; display: flex; flex-flow: wrap">
        <div class="hading-box container" style="padding: 0">
            <div>
                <iframe style="padding: 10px" src="https://www.youtube.com/embed/{{ $video->url }}" width="100%"
                        height="500"
                        title="Bohemian The Muppets" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="post-parent">
                <button class="btn btn-primary" style="margin-left: 10px" id="openPostsModel">Add Post</button>
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
@session('script')
<script>
    $(document).ready(function () {
        $('#posts').html('')
        $.ajax({
            method: 'get',
            url: '{{ route('get.posts') }}',
            success: function (response) {
                $('#posts').html(response.html)
            }, error: function (response) {
                $.notify(response);
            }
        })
    })
</script>
@endsession
