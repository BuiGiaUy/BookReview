<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
    @include("adminPartial.head")
</head>
<body>
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    @include("adminPartial.sidebar")
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        @include("adminPartial.header")
        <div class="container-fluid">
            @yield("content")
        </div>
        @include("adminPartial.footer")
    </div>
</div>
<!-- Wrapper END -->

@include("adminPartial.bodyJs")
</body>
</html>

