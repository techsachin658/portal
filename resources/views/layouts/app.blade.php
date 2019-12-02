<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} </title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<?php $route = Route::currentRouteName();?>

<body <?php if($route == 'home'){ ?> class="home" <?php }else { ?>class="height_vh"<?php } ?>>
     <div id="app">
      
     @include('partials.user-header')   
          @yield('content')
    @include('partials.user-footer')
    </div>


<script src="{{asset('js/app.js')}}"></script> 
 @yield('scripts')

</body>
</html>