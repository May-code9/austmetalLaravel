<!DOCTYPE html>
<html lang="en" data-ng-app="website">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <title>
    @yield('title')
  </title>
  @yield('meta')
  @include('partials.header.header')
</head>
<body class="moto-background">
  <div class="page">
    @include('partials.navigation')

    @yield('content')

    @if(Route::currentRouteName() == 'aust_home' || Route::currentRouteName() == 'aust_contact')
    @include('partials.footer.footer')
    @else
    @include('partials.footer.footer2')
    @endif

    <div data-moto-back-to-top-button class="moto-back-to-top-button"></div>
    <script src="mt-includes/js/website.assets.min68be.js" type="text/javascript" data-cfasync="false"></script>
    <script type="text/javascript" data-cfasync="false">
    var websiteConfig = websiteConfig || {};
    websiteConfig.address = 'index.html';
    websiteConfig.apiUrl = 'api.json';
    websiteConfig.preferredLanguage = 'en';
    websiteConfig.back_to_top_button = {"enabled":true,"topOffset":300,"animationTime":500};
    angular.module('website.plugins', []);
    </script>
    <script src="mt-includes/js/website.min6857.js?_build=1487660411" type="text/javascript" data-cfasync="false"></script>
  </body>
  </html>
