<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', config('app.name')) | {{ config('app.name', 'Polo Store Dashboard') }}</title>

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet">

    <!-- iCheck style -->
    <link href="{{ asset('backend/css/plugins/iCheck/custom.css') }}" rel="stylesheet">

    <!-- Toaster style -->
    <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    {{-- style --}}
    @stack('style')

    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/custom-style.css') }}" rel="stylesheet">
</head>

<body class="fixed-sidebar">
<div id="wrapper">

    {{-- sidebar --}}
    @include('admin.includes.sidebar')

    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('admin.includes.header')
        </div>

        <div class="wrapper wrapper-content">
            @yield('content')
        </div>

        @include('admin.includes.footer')
    </div>
    @include('admin.includes.right-sidebar')
</div>

<!-- Mainly scripts -->
<script src="{{ asset('backend/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('backend/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.js') }}"></script>
<script src="{{ asset('backend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('backend/js/inspinia.js') }}"></script>
<script src="{{ asset('backend/js/plugins/pace/pace.min.js') }}"></script>

<!-- iCheck -->
<script src="{{ asset('backend/js/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('backend/js/plugins/toastr/toastr.min.js') }}"></script>

{{--Sweetalert--}}
<script src="{{ asset('backend/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!--Axios-->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

{{-- script --}}
@stack('script')

<!-- our custom js-->
<script>
    $(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        @foreach(['success', 'warning', 'error', 'info'] as $item)
            @if(session($item))
            toastr['{{ $item }}']('{{ session($item) }}');
        @endif
        @endforeach
    });

    //show confirm message when delete table row
    function deleteRow(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            type: "warning",
            showCancelButton: true,
            allowOutsideClick: true,
            confirmButtonColor: "#1ab394",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: true
        }, function () {
            document.getElementById('row-delete-form' + id).submit();
        });
    }

    // change publication status
    function changeStatus(e) {

        let id = $(e).attr('id'),
            route = $(e).data('route')

        axios.get(route + '/' + id)
            .then(function (response) {
                let statusBtn = $(e).find('span');

                if ($(statusBtn).hasClass('badge-primary')) {
                    $(statusBtn).removeClass('badge-primary').addClass('badge-danger')
                    $(statusBtn).text('Disable')
                } else {
                    $(statusBtn).removeClass('badge-danger').addClass('badge-primary')
                    $(statusBtn).text('Active')
                }

                toastr.success('Status has been updated successful.');
            })
            .catch(function (error) {
                toastr.error('Status could not be update.');
            })
    }
</script>
</body>
</html>
