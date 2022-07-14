<script>

    $("#form_insertaddress").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: '{{ url("buyer/buyerprofile/add") }}',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $("#box_content_address").empty();
                    $('#box_content_address').append(response.htmltext);
                    $('#id06').hide();
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });
    });

    $("#form_editaddress").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData);
        $.ajax({
            type:'POST',
            url: '{{ url("buyer/buyerprofile/update") }}',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $("#box_content_address").empty();
                    $('#box_content_address').append(response.htmltext);
                    $('#user_address_edit').hide();
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });
    });

    function buyerprofile_delete(id){
        $.ajax({
            type:'GET',
            url: '{{ url("buyer/buyerprofile/delete") }}/'+id,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $("#box_content_address").empty();
                    $('#box_content_address').append(response.htmltext);
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });
    }

    function model_buyerprofile_edit(id){
        $("#buyerprofile_id").val(id);
        $.get("{{url('buyer/buyerprofile/edit')}}/" + id, function(result) {
            $("#first_name_edit").val(result.data.first_name);
            $("#phone_edit").val(result.data.phone);
            $("#address_edit").val(result.data.address);

            $.each(result.province, function(indexInArray, valueOfElement) {
                if(valueOfElement.id == result.data.province){
                    $("#province_edit").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                }else{
                    $("#province_edit").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                }
            });
            $.each(result.amphure, function(indexInArray, valueOfElement) {
                if(valueOfElement.id == result.data.amphure){
                    $("#amphure_edit").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                }else{
                    $("#amphure_edit").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                }
            });
            $.each(result.district, function(indexInArray, valueOfElement) {
                if(valueOfElement.id == result.data.district){
                    $("#district_edit").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                }else{
                    $("#district_edit").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                }
            });
            $("#postcode_edit").val(result.data.postcode);
        });

        $("#user_address_edit").show();
    }

    $(document).on("change","#province", function(e){
        e.preventDefault();
        let id = $(this).val();
        $.get("{{url('fetchamphures')}}/" + id, function(result) {
            $("#amphure").empty().append('<option disabled selected>Choose</option>');
            $("#district").empty().append('<option disabled selected>Choose</option>');
            $("#postcode").val('');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#amphure").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
    });
    
    $(document).on("change","#amphure", function(e){
        e.preventDefault();
        let id = $(this).val();
        $.get("{{url('fetchdistricts')}}/" + id, function(result) {
            $("#district").empty().append('<option disabled selected>Choose</option>');
            $("#postcode").val('');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#district").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
    });

    $(document).on("change","#district", function(e){
        e.preventDefault();
        let id = $(this).val();
        $.get("{{url('fetchzipcode')}}/" + id, function(result) {
            $("#postcode").val(result);
        });
    });
    
</script>