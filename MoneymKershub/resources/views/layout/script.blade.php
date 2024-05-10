<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/notify.js') }}"></script>
<script>
    var baseUrl = 'http://localhost:8000/';
    $(window).on('load', function() {
        $('#loader-wrapper').fadeIn('slow');
    });
    $(document).ready(function() {
        $(window).on('load', function() {
            $('#loader-wrapper').fadeOut('slow');
        });
        var width = $(window).width();
        if (width < 784){
            $(".hides-sidebar").addClass('msb-x')
        }else{
            $(".hides-sidebar").removeClass('msb-x')
        }
    });
    $(window).resize(function() {
        var width = $(window).width();
        if (width < 784){
            $(".hides-sidebar").addClass('msb-x')
        }else{
            $(".hides-sidebar").removeClass('msb-x')
        }
    });
</script>
@yield('script')
