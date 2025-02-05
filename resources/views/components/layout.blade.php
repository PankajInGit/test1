<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<!-- Header -->
<header class="bg-slate-800 text-white py-4 shadow-lg">
    <nav aria-label="Main navigation" class="max-w-6xl mx-auto px-4">
        <ul class="flex justify-center gap-8">
            <x-nav-links>Home</x-nav-links>
            <x-nav-links>Jobs</x-nav-links>
            <x-nav-links>About</x-nav-links>
        </ul>
    </nav>
</header>

<!-- Sidebar -->
<div id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-slate-700 text-white p-6 shadow-xl">
    <div class="text-2xl font-bold text-slate-100 pb-8 border-b border-slate-600">
        <span class="text-indigo-400">Company</span>Logo
    </div>
    <div class="pt-6 space-y-4">
        <div class="text-sm uppercase text-slate-400 tracking-wide mb-2">Navigation</div>
        <ul class="space-y-3">
            <li>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-600 transition-colors text-slate-200">
                    <span class="mr-2">🏠</span>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-600 transition-colors text-slate-200">
                    <span class="mr-2">💼</span>
                    Jobs
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-600 transition-colors text-slate-200">
                    <span class="mr-2">ℹ️</span>
                    About
                </a>
            </li>
        </ul>
    </div>
</div>

{{$slot}}

</body>
</html>
