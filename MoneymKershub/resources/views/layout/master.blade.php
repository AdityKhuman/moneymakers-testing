@php
    $user = \Illuminate\Support\Facades\Auth::user()
@endphp
    <!doctype html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layout.css')
</head>
<body class="hides-sidebar">
<div id="loader-wrapper">
    <div id="loader"></div>
</div>
<nav class="mnb navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <i class="ic fa fa-bars"></i>
            </button>
            <div style="padding: 15px 0;">
                <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
            </div>
        </div>
        <ul id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button style="border: none;margin-top: 15px; margin-right: 20px; margin-left: 20px; background: none" type="submit"><a
                            href="#">{{--<i class="fa fa-arrow-left"></i>--}} Log Out</a>
                    </button>
                </form>
            </ul>
            @php
                if(isset($user)){
                    $messages =  \Illuminate\Support\Facades\DB::table('ch_messages')->where('to_id',$user->id)->where('seen',0)->count();
                    $message =  \Illuminate\Support\Facades\DB::table('ch_messages')->where('to_id',$user->id)->where('seen',0)->first();
                    $sender = $message->from_id ?? '';
                }
            @endphp

            <ul class="nav navbar-nav navbar-right" style="margin-top: 20px; margin-right: 20px; margin-left: 10px;">
                <a href="{{ env('APP_URL').'chatify/'.$sender }}" class="message-icon">
                    <i class="text-primary fa fa-envelope"></i>
                    @if(isset($messages) && $messages>0)
                        <span class="message-count">{{ $messages }}</span>
                    @endif
                </a>
            </ul>
        {{--            <ul class="nav navbar-nav navbar-right" style="display: flex;justify-content: end;">--}}
        {{--                <img class="img-fluid" style="border: none;margin-top: 15px; /*position: relative;*/ margin-right: 15px; background: none;height: 12%;width: 12%;" src="{{ asset('assets/img/chat.png') }}" alt="">--}}
        {{--                <div style="position: absolute; border: 2px solid red;width: 20px;height: 20px; display: flex; justify-content: center;border-radius: 50%">--}}
        {{--                    2--}}
        {{--                </div>--}}
        {{--            </ul>--}}
    </div>
    </div>
</nav>
<div class="msb" id="msb">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <div class="brand-wrapper">
                <div class="brand-name-wrapper ">
                    <a class="navbar-brand">
                        MONEYMKERSHUB
                    </a>
                </div>

            </div>

        </div>
        <div class="side-menu-container">
            @if(isset($user->role) && $user->role == \App\Models\User::TEACHER )
                <ul class="nav navbar-nav">
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a
                            href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="{{ request()->is('dashboard/create') ? 'active' : '' }}"><a
                            href="{{ route('dashboard.create') }}"><i class="fa fa-puzzle-piece"></i>Upload Video</a>
                    </li>
                </ul>
            @elseif(isset($user->role) && $user->role == \App\Models\User::STUDENT)
                <ul class="nav navbar-nav">
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a
                            href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                </ul>
            @elseif(isset($user->role) && $user->role == \App\Models\User::FREELANCER )
                <ul class="nav navbar-nav">
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a
                            href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="{{ request()->is('dashboard/create') ? 'active' : '' }}"><a
                            href="{{ route('dashboard.create') }}"><i class="fa fa-puzzle-piece"></i>Upload Video</a>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav">
                    <li><a
                            href="{{ route('login') }}"><i class="fa fa-dashboard"></i>Login</a></li>
                </ul>
            @endif
        </div>
    </nav>
</div>
@include('layout.script')
</body>
</html>
