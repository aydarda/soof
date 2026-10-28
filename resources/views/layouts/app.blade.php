<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SOOF – Bridging the Gap')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Prevent Alpine flash -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="flex flex-col min-h-full bg-slate-50 font-['Plus_Jakarta_Sans',sans-serif] text-slate-700 antialiased selection:bg-blue-600 selection:text-white">

    <!-- Navigation Header -->
    <header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 shadow-sm transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center gap-3 group">
    <img 
        src="{{ asset('images/logo.png') }}" 
        alt="SOOF Foundation Logo" 
        class="h-10 w-auto object-contain rounded-lg"
    >
    <span class="text-xl font-extrabold tracking-tight text-slate-900 group-hover:text-blue-600 transition-colors">
        SOOF
    </span>
</a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center gap-7 text-xs font-bold tracking-wider uppercase text-slate-700">
                    <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-700 transition-colors">Home</a>
                    
                    <!-- Who We Are Dropdown -->
                    <div x-data="{ open: false }" @click.outside="open = false" class="relative">
                        <button type="button"
                                @click="open = !open"
                                class="flex items-center gap-1 hover:text-blue-600 transition-colors py-2 focus:outline-none"
                                :aria-expanded="open">
                            Who We Are
                            <svg class="w-3.5 h-3.5 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="open"
                             x-cloak
                             x-transition
                             class="absolute left-0 mt-1 w-52 bg-white border border-slate-100 rounded-xl shadow-xl py-2 z-50 text-left normal-case font-medium">
                            <a href="{{ url('/who-we-are') }}" class="block px-4 py-2.5 text-xs text-slate-700 hover:bg-blue-50 hover:text-blue-600">About Us</a>
                            <a href="{{ url('/letter-from-founder') }}" class="block px-4 py-2.5 text-xs text-slate-700 hover:bg-blue-50 hover:text-blue-600">Letter from Founder</a>
                        </div>
                    </div>

                    <!-- What We Do Dropdown -->
                    <div x-data="{ open: false }" @click.outside="open = false" class="relative">
                        <button type="button"
                                @click="open = !open"
                                class="flex items-center gap-1 hover:text-blue-600 transition-colors py-2 focus:outline-none"
                                :aria-expanded="open">
                            What We Do
                            <svg class="w-3.5 h-3.5 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="open"
                             x-cloak
                             x-transition
                             class="absolute left-0 mt-1 w-52 bg-white border border-slate-100 rounded-xl shadow-xl py-2 z-50 text-left normal-case font-medium">
                            <a href="{{ url('/what-we-do') }}" class="block px-4 py-2.5 text-xs text-slate-700 hover:bg-blue-50 hover:text-blue-600">Our Projects</a>
                            <a href="{{ url('/project-list') }}" class="block px-4 py-2.5 text-xs text-slate-700 hover:bg-blue-50 hover:text-blue-600">Project List</a>
                        </div>
                    </div>

                    <a href="{{ url('/development-plan') }}" class="hover:text-blue-600 transition-colors">Development Plan</a>
                    <a href="{{ url('/testimonials') }}" class="hover:text-blue-600 transition-colors">Testimonials</a>
                    <a href="{{ url('/faq') }}" class="hover:text-blue-600 transition-colors">FAQs</a>
                    <a href="{{ url('/contact-us') }}" class="hover:text-blue-600 transition-colors">Contact Us</a>
                </nav>

                <!-- Desktop CTA -->
                <div class="hidden lg:flex items-center gap-4">
                    <a href="{{ url('/donate') }}" class="px-5 py-2.5 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors normal-case font-semibold text-sm shadow-md shadow-blue-500/20">Donate</a>
                </div>

                <!-- Mobile Hamburger -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="lg:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100 focus:outline-none" aria-label="Toggle navigation">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-cloak class="lg:hidden border-b border-slate-200 bg-white px-4 pt-2 pb-6 space-y-2 text-sm font-semibold">
            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-blue-600 bg-blue-50/50">Home</a>
            
            <div x-data="{ subOpen: false }" class="space-y-1">
                <button @click="subOpen = !subOpen" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-slate-700 hover:bg-slate-50">
                    <span>Who We Are</span>
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': subOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="subOpen" x-cloak class="pl-6 space-y-1">
                    <a href="{{ url('/who-we-are') }}" class="block px-3 py-1.5 rounded-md text-xs font-medium text-slate-600 hover:text-blue-600">About Us</a>
                    <a href="{{ url('/letter-from-founder') }}" class="block px-3 py-1.5 rounded-md text-xs font-medium text-slate-600 hover:text-blue-600">Letter from Founder</a>
                </div>
            </div>

            <div x-data="{ subOpen: false }" class="space-y-1">
                <button @click="subOpen = !subOpen" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-slate-700 hover:bg-slate-50">
                    <span>What We Do</span>
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': subOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="subOpen" x-cloak class="pl-6 space-y-1">
                    <a href="{{ url('/what-we-do') }}" class="block px-3 py-1.5 rounded-md text-xs font-medium text-slate-600 hover:text-blue-600">Our Projects</a>
                    <a href="{{ url('/project-list') }}" class="block px-3 py-1.5 rounded-md text-xs font-medium text-slate-600 hover:text-blue-600">Project List</a>
                </div>
            </div>

            <a href="{{ url('/development-plan') }}" class="block px-3 py-2 rounded-md text-slate-700 hover:bg-slate-50">Development Plan</a>
            <a href="{{ url('/testimonials') }}" class="block px-3 py-2 rounded-md text-slate-700 hover:bg-slate-50">Testimonials</a>
            <a href="{{ url('/faq') }}" class="block px-3 py-2 rounded-md text-slate-700 hover:bg-slate-50">FAQs</a>
            <a href="{{ url('/contact-us') }}" class="block px-3 py-2 rounded-md text-slate-700 hover:bg-slate-50">Contact Us</a>
            
            <a href="{{ url('/donate') }}" class="block text-center w-full mt-4 px-5 py-3 rounded-xl font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-md">
                Donate Now
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-16 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div class="space-y-4">
                <span class="text-2xl font-extrabold text-white tracking-tight">SOOF<span class="text-blue-500">.</span></span>
                <p class="text-sm leading-relaxed text-slate-400">
                    Bridging the gap by empowering communities, driving accessible opportunities, and delivering sustainable social development.
                </p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/who-we-are') }}" class="hover:text-white transition-colors">About Mission</a></li>
                    <li><a href="{{ url('/what-we-do') }}" class="hover:text-white transition-colors">Programs</a></li>
                    <li><a href="{{ url('/donate') }}" class="hover:text-white transition-colors">Get Involved</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Legal</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Transparency Report</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Newsletter</h4>
                <p class="text-xs mb-4 text-slate-400">Stay updated with our latest field reports and impact metrics.</p>
                <form class="flex gap-2">
                    <input type="email" placeholder="Your email" class="w-full px-3 py-2 rounded-lg bg-slate-800 border border-slate-700 text-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-lg text-sm transition-colors">Join</button>
                </form>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 mt-12 border-t border-slate-800 text-xs text-center text-slate-500">
            &copy; {{ date('Y') }} SOOF Foundation. All rights reserved.
        </div>
    </footer>
</body>
</html>