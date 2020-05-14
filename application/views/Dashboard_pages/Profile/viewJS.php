<script>
    $(function(){
        $(document).on('click','.add-foto',function (){
            $idPhoto = $(document).find('#photo').val();
            $('#examplePositionCenter').modal('show');
        });
    });
    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );
</script>