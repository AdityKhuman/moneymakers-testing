@extends('layout.master')
<div class="mcw container" style="padding-top:50px">
    <div class="hading-box">
        <h2 class="Anek">Upload Video</h2>
    </div>
    <div class="hading-box">
        <form method="post" action="{{ route('dashboard.store') }}">
            @csrf
            <label for="Name">Enter Youtube Video Url</label>
            <input class="form-control" placeholder="Video Url" name="url">
            @error('url')
             <p class="text-danger" style="margin-top: 10px">{{ $message }}</p>
            @enderror
            <button class="btn btn-primary" type="submit" style="margin-top: 10px">Submit</button>
        </form>
    </div>
</div>
