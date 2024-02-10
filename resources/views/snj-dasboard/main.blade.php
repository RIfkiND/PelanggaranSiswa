<!--

=========================================================
* Argon Dashboard 2 Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/smea-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/smea-icon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>Dasboard Admin - pelanggaran siswa smkn 1 ciamis</title>
    <!--     Fonts and icons     -->
    @vite('resources/css/app.css')
    @include('snj-dasboard.partial.link')
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    @include('snj-dasboard.partial.header')
    <!-- sidenav  -->


    <!-- end Navbar -->

    <!-- cards -->

    <!-- end cards -->
    @yield('content')
    @include('snj-dasboard.partial.footer')
    </main>

</body>
<!-- plugin for charts  -->
@include('snj-dasboard.partial.script')


</html>
