{{-- 
<!-- OAT คอมเม้นต์ ใช้ตัวล่าง
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script> 
-->
--}}


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
<script src="{{ asset('assets/js/navbar.js') }}"></script>
<script src="{{ asset('assets/js/add_active.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


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


    $(function() {
        var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");

        if (url != '/') {
            $('.navbar-nav a').each(function() {
                if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                    $(this).addClass('active');
                }
            });
        } else {
            $('.link1').addClass('active');
        }


    });

    $('#msbo').on('click', function() {
        $('body').toggleClass('msb-x');
    });

    $('.nav_list a').click(function() {
        var id = $(this).attr('id');
        $('.nav_list  .item-show-' + id).toggleClass("show");
    });
</script>

<script src="{{ asset('assets/js/slide-homepage.js') }}"></script>
