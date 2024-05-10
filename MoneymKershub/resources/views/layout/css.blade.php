<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sidebar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<style>
    .message-icon {
        position: relative;
        display: inline-block;
    }
    .message-icon:hover{
        cursor: pointer;
    }
    .message-count {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: -8px;
        right: -8px;
        background-color: red;
        color: white;
        border-radius: 50%;
        /*padding: 5px 5px;*/
        font-size: 10px;
        min-width: 15px;
        text-align: center;
    }
    @media only screen and (max-width: 461px) {
        .responsive {
            flex-direction: column;
        }
    }
</style>
@yield('css')
