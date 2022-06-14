<script src="{{asset('backends/assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="{{asset('backends/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backends/assets/js/slick.min.js')}}"></script>
<script src="{{asset('backends/assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
<script src="{{asset('backends/assets/js/navbar.js')}}"></script>
<script src="{{asset('backends/assets/js/add_active.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
</script>