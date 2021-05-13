<script>
    // if need later
    {{--$('#' + '{{ $modal_id }}').on('show.bs.modal', function (e) {--}}
    {{--    $('.error_msg').html('');--}}

    {{--    $("#productOfferModal").fadeOut(2000, function () {--}}
    {{--        $(this).modal('hide');--}}
    {{--    });--}}
    {{--})--}}

    $('#' + '{{ $form }}').on('submit', function (e) {
        showLoading();
        e.preventDefault();

        $.ajax({
            headers: {
                accept: 'application/json',
            },
            url: $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                hideLoading()

                location.reload()

                // if need later
                {{--if ('{{ $modal_id }}' === 'resetPasswordModal') {--}}
                {{--    location.href = '{{ route('home') }}'--}}
                {{--} else {--}}
                {{--    location.reload()--}}
                {{--}--}}
            },
            error: function (error) {
                hideLoading()
                $('.invalid-feedback').html('');

                let errorResponse = error.responseJSON

                if (errorResponse.errors) {
                    $.each(errorResponse.errors, function (input, error) {
                        $(`input[name=${input}]`).parents('.input-group').next('div').html(error[0]);
                    });
                }
            }
        });
    });

    // Remove error handle
    $("input, select").on('keyup change', function (e) {
        $(e.target).parents('.form-group').find('.invalid-feedback').html('')
    });

</script>
