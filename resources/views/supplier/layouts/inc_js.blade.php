<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
<script src="{{asset('assets/js/navbar.js')}}"></script>
<script src="{{asset('assets/js/add_active.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('daterangepicker-master/daterangepicker.js')}}"></script>
<script src="{{asset('daterangepicker-master/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/dropzone.js') }}"></script>

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
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    function toastralert(type,msg) {
        // if(type == 'info'){
        //     toastr.info(msg);
        // }else if(type == 'warning'){
        //     toastr.warning(msg);
        // }else if(type == 'success'){
        //     toastr.success(msg);
        // }else if(type == 'error'){
        //     toastr.error(msg);
        // }else{
        //     toastr.clear()
        // }
        toastr[type](msg)
    }
    $('.number').keypress(function(event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
    $("input[type='number']").attr('inputmode','numeric');
</script>
