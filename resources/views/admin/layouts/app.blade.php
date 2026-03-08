<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard - SMKN 2 SIMPANG EMPAT Tanah Bumbu')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <!-- Main Content -->
    <div class="ml-64 pb-16">
        <!-- Top Bar -->
        @yield('topbar')

        <!-- Page Content -->
        <main class="p-8">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <div class="fixed bottom-0 left-64 right-0 bg-white border-t px-8 py-4 z-40">
        <p class="text-center text-gray-600 text-sm">
            © 2026 SMKN 2 SIMPANG EMPAT Tanah Bumbu. All rights reserved.
        </p>
    </div>

    @stack('scripts')
</body>

</html>