<script type="text/javascript">
    $(document).ready(function () {
        $('#add_place_button').click(() => {
            // console.log($('#default_place'));
            $('#places').append($('#default_place').html());
        });
    });
</script>
