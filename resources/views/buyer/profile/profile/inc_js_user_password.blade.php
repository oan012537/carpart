<script>
    $(document).on("click","#btn_updatepassword", function(e){
        e.preventDefault();
        let current_password = $("#current_password").val();
        let new_password = $("#new_password").val();
        let confirm_password = $("#confirm_password").val();

        if(new_password.length > 7){
            if(new_password === confirm_password){
            $.ajax({
                type:'GET',
                url: '{{ url("buyer/buyerprofile/changepassword/check_currentpassword") }}/' + current_password ,
                cache:false,
                contentType: false,
                processData: false,
                success:function(response){
                    console.log(response);
                    if(response.status == 200){ 
                        $('#mobilenumber_password').text(response.mobilenumber);
                        $('#modal_comfirmchangepassword').show();
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
                alert('Not match');
                return false;
            }
        }else{
            alert('รหัสผ่าน 8 ตัวอักษร');
            return false;
        }

    });


    $("#form_changepassword").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        let new_password = $("#new_password").val();
        let confirm_password = $("#confirm_password").val();
  
        // if(new_password.length > 7){
        //     if(new_password === confirm_password){
        //     console.log(formData);
        //     $.ajax({
        //         type:'POST',
        //         url: '{{ url("buyer/buyerprofile/changepassword/check_currentpassword") }}' ,
        //         data:formData,
        //         cache:false,
        //         contentType: false,
        //         processData: false,
        //         success:function(response){
        //             console.log(response);
        //             if(response.status == 200){ 
        //                 $('#mobilenumber_password').text(response.mobilenumber);
        //                 $('#modal_comfirmchangepassword').show();
        //                 //-- ส่งต่อ OTP
        //             }else{
        //                 alert(response.message);
        //             }
        //         },
        //         error: function(response){
        //             console.log("error");
        //             console.log(response);
        //         }
        //     });
        //     }else{
        //         alert('Not match');
        //         return false;
        //     }
        // }else{
        //     alert('รหัสผ่าน 8 ตัวอักษร');
        //     return false;
        // }
    });
</script>