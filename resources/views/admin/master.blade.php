<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
@yield('style')
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/admin_style.css')}}">

</head>
<body>
<!-- header section starts  -->
@include('admin.header')
    <!-- header section ends -->

@yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/admin_script.js')}}"></script>
@yield('script')


</body>
</html>
