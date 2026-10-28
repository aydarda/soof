@extends('layouts.app')

@section('title', 'Donate – SOOF')

@section('content')

    <!-- Hero / Header Section -->
    <section class="relative bg-[#020d2d] py-20 lg:py-32 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.85), rgba(2, 13, 45, 0.85)), url('{{ asset('images/hero-bg.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Left Column: Inspiring Quote & Ways to Help -->
                <div class="space-y-8 text-white">
                    <div class="space-y-4">
                        <div class="w-16 h-1 bg-[#2563eb]"></div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-snug">
                            To change a life, in large ways and small.
                        </h2>
                    </div>

                    <blockquote class="border-l-7 border-slate-500 pl-6 py-2 text-slate-200 text-base sm:text-lg font-medium leading-relaxed italic">
                        “Never doubt that a small, group of thoughtful, committed citizens can change the world. Indeed, it is the only thing that ever has."
                        <footer class="mt-2 text-sm font-bold text-slate-300 not-italic">— Margaret Mead</footer>
                    </blockquote>

                    <div class="space-y-3 pt-4">
                        <h4 class="text-[#2563eb] font-bold text-sm tracking-wider uppercase">— WAYS TO HELP</h4>
                        <ul class="list-disc pl-5 space-y-2 text-slate-200 text-sm sm:text-base">
                            <li>Individual Giving</li>
                            <li>Monthly Giving Group</li>
                            <li>Sponsorship Opportunities</li>
                            <li>Holiday Projects</li>
                            <li>Events Giving</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column: Donation Form / Portal -->
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl text-slate-800">
                    <div class="give-embed-form-wrapper">
                        <div class="text-center py-8 space-y-4">
                            <div class="w-16 h-16 bg-[#28C77B]/10 rounded-full flex items-center justify-center mx-auto text-[#28C77B]">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 349 348"><path d="M25.1,204.57c-13.38,0-24.47-10.6-24.97-24.08C0.04,178.09,0,175.97,0,174C0,77.78,78.28-0.5,174.5-0.5 c13.81,0,25,11.19,25,25s-11.19,25-25,25C105.85,49.5,50,105.35,50,174c0,1.37,0.03,2.85,0.1,4.65c0.51,13.8-10.27,25.39-24.07,25.9 C25.72,204.56,25.41,204.57,25.1,204.57z"/></svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900">Secure Donation Portal</h3>
                            <p class="text-sm text-slate-600 max-w-sm mx-auto">
                                 You can safely enter your donation details via our secure server or mobile app payment integrations.
                            </p>
                            <a href="#" class="inline-block px-8 py-3 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md transition-colors">
                                Donate Now
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Security & Partnerships Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left: Transaction Security Seal -->
                <div class="text-center bg-slate-50 p-10 rounded-2xl border border-slate-200 space-y-6">
                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">YOUR TRANSACTIONS ARE</h3>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/100-secure-website-seal.jpeg') }}" alt="100% Secure Website Seal" class="w-48 h-48 object-contain">
                    </div>
                </div>

                <!-- Right: Partnership & Impact Description -->
                <div class="space-y-6 text-slate-700 text-sm sm:text-base leading-relaxed">
                    <p>
                         At SOOF, we value our history of strong partnerships with community organizations, individuals, and volunteers. SOOF always strives to help reduce duplication of services and efforts, minimize costs and leverage resources, and provide the highest level of service and commitment to Edo State and to Nigeria.
                    </p>
                    <p>
                         We believe that the global community understands that there are many challenges facing our community but with your help, together, we overcome and inspire.
                    </p>
                    <p>
                         Every gift made today helps someone tomorrow in some way in our community. Your support touches someone’s life, if not many. Thank you for your generosity.
                    </p>
                    <p class="font-medium text-slate-900 pt-2">
                         Make an online donation – You can safely enter your credit card number via the secure server, which encrypts all submitted information. You may also use one of several mobile app donations portals.
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection