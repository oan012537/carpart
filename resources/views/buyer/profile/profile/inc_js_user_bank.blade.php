<script>

    $(document).on("submit","#form_insertbank", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        console.log(formData);
        
    });

</script>