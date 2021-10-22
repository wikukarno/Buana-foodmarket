<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
    <title>@yield('title')</title>
</head>

<body>

    <!-- navbar -->
    @include('includes.navbar')
    <!-- end navbar -->


    @yield('content')


    <!-- footer -->
    @include('includes.footer')
    <!-- End footer -->






    <!-- script -->
    @include('includes.script')
    <!-- end script -->

    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
        </div>
    </div>
    <!-- End Modal -->

</body>

</html>