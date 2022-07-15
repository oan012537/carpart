<script>

    $("#form_edittaxinvoice").on("submit", function (e) 
    {
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData);
        $.ajax({
            type:'POST',
            url: '{{ url("buyer/buyerprofile/taxinvoice/update") }}',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $('#text_tax_invoices_name').text(response.data.name);
                    $('#text_tax_invoices_phone').text(response.data.phone);
                    $('#text_tax_invoices_texid').text(response.data.texid);
                    $('#text_tax_invoices_address').text(response.data.address);
                    $('#text_tax_invoices_district').text(response.data.district.name_th);
                    $('#text_tax_invoices_amphure').text(response.data.amphure.name_th);
                    $('#text_tax_invoices_province').text(response.data.province.name_th);
                    $('#text_tax_invoices_postcode').text(response.data.postcode);
                    $('#btn_tax_invoices_edit').attr('onClick','model_taxinvoice_edit('+response.data.id+')');
                    $('#user_taxinvoice_edit').hide();
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });
    });

    function model_buyerprofileaccount_edit(id)
    {
        $("#buyerprofileaccount_id").val(id);
        $.get("{{url('buyer/buyerprofile/edit')}}/" + id, function(result) {
            $("#account_first_name").val(result.data.first_name);
            $("#account_phone").val(result.data.phone);
            $("#account_address").val(result.data.address);

            $.each(result.province, function(indexInArray, valueOfElement) {
                if(valueOfElement.id == result.data.province){
                    $("#account_province").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                }else{
                    $("#account_province").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                }
            });
            $.each(result.amphure, function(indexInArray, valueOfElement) {
                if(valueOfElement.id == result.data.amphure){
                    $("#account_amphure").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                }else{
                    $("#account_amphure").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                }
            });
            $.each(result.district, function(indexInArray, valueOfElement) {
                if(valueOfElement.id == result.data.district){
                    $("#account_district").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                }else{
                    $("#account_district").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                }
            });
            $("#account_postcode").val(result.data.postcode);
        });

        $("#user_profileaccount_edit").show();
    }

    function model_taxinvoice_edit(id)
    {
        if(id > 0){
            $("#tax_invoices_id").val(id);
            $.get("{{url('buyer/buyerprofile/taxinvoice/edit')}}/" + id, function(result) {
                $("#tax_invoices_name").val(result.data.name);
                $("#tax_invoices_phone").val(result.data.phone);
                $("#tax_invoices_texid").val(result.data.texid);
                $("#tax_invoices_address").val(result.data.address);

                $.each(result.province, function(indexInArray, valueOfElement) {
                    if(valueOfElement.id == result.data.province){
                        $("#tax_invoices_province").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                    }else{
                        $("#tax_invoices_province").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                    }
                });
                $.each(result.amphure, function(indexInArray, valueOfElement) {
                    if(valueOfElement.id == result.data.amphure){
                        $("#tax_invoices_amphure").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                    }else{
                        $("#tax_invoices_amphure").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                    }
                });
                $.each(result.district, function(indexInArray, valueOfElement) {
                    if(valueOfElement.id == result.data.district){
                        $("#tax_invoices_district").append('<option value="' + valueOfElement.id + '" selected>' + valueOfElement.name_th + '</option>');
                    }else{
                        $("#tax_invoices_district").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
                    }
                });
                
                $("#tax_invoices_postcode").val(result.data.postcode);
            });
        }
        $("#user_taxinvoice_edit").show();
    }

    $(document).on("change","#tax_invoices_province", function(e)
    {
        e.preventDefault();
        let id = $(this).val();
        $.get("{{url('fetchamphures')}}/" + id, function(result) {
            $("#tax_invoices_amphure").empty().append('<option disabled selected>Choose</option>');
            $("#tax_invoices_district").empty().append('<option disabled selected>Choose</option>');
            $("#tax_invoices_postcode").val('');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#tax_invoices_amphure").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
    });
    
    $(document).on("change","#tax_invoices_amphure", function(e)
    {
        e.preventDefault();
        let id = $(this).val();
        $.get("{{url('fetchdistricts')}}/" + id, function(result) {
            $("#tax_invoices_district").empty().append('<option disabled selected>Choose</option>');
            $("#tax_invoices_postcode").val('');
            $.each(result, function(indexInArray, valueOfElement) {
                $("#tax_invoices_district").append('<option value="' + valueOfElement.id + '" >' + valueOfElement.name_th + '</option>');
            });
        });
    });

    $(document).on("change","#tax_invoices_district", function(e)
    {
        e.preventDefault();
        let id = $(this).val();
        $.get("{{url('fetchzipcode')}}/" + id, function(result) {
            $("#tax_invoices_postcode").val(result);
        });
    });
    
</script>