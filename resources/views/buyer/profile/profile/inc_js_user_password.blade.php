<script>
     $("#form_changepassword").on("submit", function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        let new_password = $("#new_password").val();
        let confirm_password = $("#confirm_password").val();

        if((new_password) && (confirm_password) && (new_password === confirm_password)){
            console.log(formData);
            $('#modal_comfirmchangepassword').show();
            // $.ajax({
            //     type:'POST',
            //     url: '{{ url("buyer/buyerprofile/add") }}',
            //     data:formData,
            //     cache:false,
            //     contentType: false,
            //     processData: false,
            //     success:function(response){
            //         console.log(response);
            //         if(response.status == 200){ 
            //             $("#box_content_profile_account").empty(); 
            //             $('#box_content_profile_account').append(response.htmltext_account); // แสดงหน้า account

            //             $("#box_content_address").empty(); 
            //             $('#box_content_address').append(response.htmltext); //- แสดงร้าน user address ใหม่
            //             $('#id06').hide();
            //         }
            //     },
            //     error: function(response){
            //         console.log("error");
            //         console.log(response);
            //     }
            // });
        }else{
            alert('Not match');
            return false;
        }
        
    });
</script>