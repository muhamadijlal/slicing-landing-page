<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ env(APP_NAME) }}</title>
        @include('assets.css')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('partials.navbar')
        <!-- Masthead-->
        @include('partials.header')
        <!-- About-->
        @include('sections.about')
        <!-- Services-->
        @include('sections.services')
        <!-- Portfolio-->
        @include('sections.portfolio')
        <!-- Call to action-->
        @include('sections.action')
        <!-- Contact-->
        @include('sections.contact')
        <!-- Footer-->
        @include('partials.footer')
        <!-- Script js-->
        @include('assets.js')
    </body>
</html>
