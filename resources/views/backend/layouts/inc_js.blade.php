<script src="{{asset('backends/assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="{{asset('backends/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backends/assets/js/slick.min.js')}}"></script>
<script src="{{asset('backends/assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
<script src="{{asset('backends/assets/js/navbar.js')}}"></script>


<script>
    // to top
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $("#toTop").fadeIn();
        } else {
            $("#toTop").fadeOut();
        }
    });
    $("#toTop").click(function() {
        $("html, body").animate({
                scrollTop: 0,
            },
            1800
        );
    });

    $('#msbo').on('click', function() {
        $('body').toggleClass('msb-x');
    });
</script>