<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.6/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style('libs/bootstrap/bootstrap.min.css') }}
    {{ style(mix('css/backend.css')) }}
    @stack('after-styles')
</head>

<body class="with-side-menu">
    @include('backend.includes.header')
    @include('backend.includes.sidebar')
    @stack('sidebar-2')
	<div class="page-content">
		<div class="container-fluid">
            @yield('content')
		</div><!--.container-fluid-->
	</div><!--.page-content-->
    <!-- Scripts -->
    @stack('after-scripts')
    {!! script(mix('js/backend.js')) !!}
    {!! script(('js/backend.js')) !!}
    {!!script('js/lib/jquery/jquery-3.2.1.min.js') !!}
    {!!script('js/lib/popper/popper.min.js') !!}
    {!!script('js/lib/tether/tether.min.js') !!}
    {!!script('js/lib/bootstrap/bootstrap.min.js') !!}
    {!!script('js/plugins.js') !!}
    {!! script('js/app.js') !!}
    @stack('after-scripts')
</body>
</html>
