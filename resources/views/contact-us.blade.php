@extends('layouts.app')

@section('title', 'Contact Us – SOOF')

@section('content')

    <!-- Hero Section -->
    <section class="relative bg-[#020d2d] py-20 lg:py-32 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.85), rgba(2, 13, 45, 0.85)), url('{{ asset('images/contact-bg.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight uppercase">
                Contact Us
            </h2>
            <div class="w-16 h-1 bg-[#2563eb] mx-auto mt-4"></div>
        </div>
    </section>

    <!-- Contact Details & Form Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                
                <!-- Left Column: Information & Socials -->
                <div class="space-y-8">
                    <div class="space-y-3">
                        <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                            We Would Love to Hear from You
                        </h3>
                        <p class="text-slate-600 text-sm sm:text-base">
                            Please write or call us with your questions or comments.
                        </p>
                    </div>

                    <div class="space-y-6 pt-2">
                        <div>
                            <h6 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-1">Address</h6>
                            <p class="text-slate-800 font-medium">No 1 Ogun Quarters, Ewoiki, Ugboha,<br>Edo State</p>
                        </div>

                        <div>
                            <h6 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Contact</h6>
                            <ul class="space-y-3 text-slate-800">
                                <li>
                                    <a href="tel:+2348033055951" class="flex items-center space-x-3 hover:text-[#2563eb] transition-colors">
                                        <span class="w-10 h-10 rounded-lg bg-blue-50 text-[#2563eb] flex items-center justify-center">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                        <span class="font-medium">+234 803 305 5951</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@soofoundation.org" class="flex items-center space-x-3 hover:text-[#2563eb] transition-colors">
                                        <span class="w-10 h-10 rounded-lg bg-blue-50 text-[#2563eb] flex items-center justify-center">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="font-medium">info@soofoundation.org</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">Keep In Touch</h6>
                            <div class="flex space-x-3">
                                <a href="https://web.facebook.com/Soofoundation-106399738687482/" target="_blank" class="w-10 h-10 rounded-full bg-[#3b5998] text-white flex items-center justify-center hover:opacity-90 transition-opacity">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/Soo_foundation" target="_blank" class="w-10 h-10 rounded-full bg-[#1da1f2] text-white flex items-center justify-center hover:opacity-90 transition-opacity">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/soofoundation1/" target="_blank" class="w-10 h-10 rounded-full bg-[#262626] text-white flex items-center justify-center hover:opacity-90 transition-opacity">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Clean Laravel Contact Form -->
                <div class="bg-slate-50 p-8 sm:p-10 rounded-2xl border border-slate-200 shadow-sm">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Contact Us</h3>

                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-medium">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">First Name <span class="text-red-500">*</span></label>
                                <input type="text" id="first_name" name="first_name" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb]/20 outline-none transition-all text-sm">
                            </div>
                            <div>
                                <label for="last_name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Last Name <span class="text-red-500">*</span></label>
                                <input type="text" id="last_name" name="last_name" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb]/20 outline-none transition-all text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb]/20 outline-none transition-all text-sm">
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Comment or Message <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb]/20 outline-none transition-all text-sm"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="w-full sm:w-auto px-8 py-4 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md transition-colors">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection

 {{-- route('contact.store') --}} 