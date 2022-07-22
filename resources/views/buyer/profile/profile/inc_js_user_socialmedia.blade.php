<script>
    
    $(document).on("click","#btnsocial_disconnect_line", function(e){
        e.preventDefault();
        var provider = $(this).attr("rel");
        console.log(provider);
        buyerprofile_socialmedia_disconnect(provider);
        $("#btnsocial_disconnect_line").hide();
        $("#btnsocial_connect_line").show();
    });


    // $(document).on("click","#btnsocial_connect_line", function(e){
    //     e.preventDefault();
    //     var provider = $(this).attr("rel");
    //     console.log(provider);
    //     buyerprofile_socialmedia_connect(provider);
    //     $("#btnsocial_connect_line").hide();
    //     $("#btnsocial_disconnect_line").hide();
    // });

    function buyerprofile_socialmedia_disconnect(provider){
        $.get("{{ url('buyer/buyerprofile/socialmedia/disconnect') }}/" + provider, function(result) {
            console.log(result);
            return "success";
        });
    }
    

</script>