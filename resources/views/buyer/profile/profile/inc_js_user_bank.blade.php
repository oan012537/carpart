<script>

    $(document).on("click", "#btn_updtebank", function(e){
        e.preventDefault();
        let banks_accountnumber = $("#banks_accountnumber").val();
        let banks_accountname = $("#banks_accountname").val();
        let banks_branch = $("#banks_branch").val();
        let banks_type = $("#banks_type").val();
        let file_banks_refimage = $("#file_banks_refimage").val();

        if(banks_accountnumber && banks_accountname && banks_branch && banks_type && file_banks_refimage){
            $.ajax({
                type:'GET',
                url: '{{ url("buyer/buyerprofile/bank/request_otp") }}' ,
                cache:false,
                contentType: false,
                processData: false,
                success:function(response){
                    console.log(response);
                    if(response.status == 200){ 
                        $('#mobilenumber_bank').text(response.mobilenumber);
                        $("#modal_otp_insertbank").show();
                        //-- ส่งต่อ OTP
                    }else{
                        alert(response.message);
                    }
                },
                error: function(response){
                    console.log("error");
                    console.log(response);
                }
            });
        }else{
            alert('กรุณากรอกข้อมูลให้ครบ');
        }

    });

    $(document).on("click", ".bank_checked", function(e){
        e.preventDefault();
        var id = $(this).attr("rel");
        console.log(id);
        $.ajax({
            type:'GET',
            url: '{{ url("buyer/buyerprofile/bank/setdefault") }}/'+id,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $("#box_content_bank").empty(); 
                    $('#box_content_bank').append(response.htmltext_banks); // แสดง html
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });
    });

    $(document).on("submit","#form_insertbank", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData);
        $.ajax({
            type:'POST',
            url: '{{ url("buyer/buyerprofile/bank/create") }}' ,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                console.log(response);
                if(response.status == 200){ 
                    $("#box_content_bank").empty(); 
                    $('#box_content_bank').append(response.htmltext_banks); // แสดง html
                    $("#modal_otp_insertbank").hide();
                    $("#modal_insertbank").hide();
                }else{
                    alert(response.message);
                }
            },
            error: function(response){
                console.log("error");
                console.log(response);
            }
        });
    });

</script> 