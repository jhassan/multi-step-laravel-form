<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    @include('includes.head')

<body>

    <!-- Header -->
    @include('includes.header')

    <!-- main page -->
    @yield('content')

    <!-- Footer -->
    @include('includes.footer')

    <!-- Script -->
    @include('includes.script')

</body>

</html>