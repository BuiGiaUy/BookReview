<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    @include('partial.head')
</head>
<!-- END: Head -->
<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
<!-- BEGIN: Mobile Menu -->
@include('partial.sidebarMobi')
<!-- END: Mobile Menu -->
<div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">
    <!-- BEGIN: Simple Menu -->
    @include('partial.sidebar')
    <!-- END: Simple Menu -->
    <!-- BEGIN: Content -->
    <div class="content ">
        <!-- BEGIN: Top Bar -->

        <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
            @include('partial.header')

            @yield('content1')
        </div>
    </div>

    <!-- END: Content -->
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div data-url="simple-menu-dark-faq-layout-1.html"
     class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
    <div class="dark-mode-switcher__toggle border"></div>
</div>
<!-- END: Dark Mode Switcher-->

<!-- BEGIN: JS Assets-->
    @include('partial.bodyJs')
<!-- END: JS Assets-->
</body>
</html>
