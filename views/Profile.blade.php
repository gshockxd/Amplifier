<!DOCTYPE html>
<html>
<head>
    @include('layouts.Parts.head')
</head>
<header>
    @include('layouts.Parts.navigation')
<br>
<br>

</header>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
    @yield('body')
</body>
<br>
<br>
    @include('layouts.Parts.footer')
    @include('layouts.Parts.footer-scripts')

</html>