@php
    $merch = config('merch');
    $comics = config('comics');
@endphp

<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    @include('includes.header')
    @include('includes.thumb')
    @yield('main-content')
    @include('includes.footer')
</body>

</html>
