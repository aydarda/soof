@extends('layouts.app')

@section('title', 'Development Plan – SOOF')

@section('content')

    <!-- Hero / Header Section -->
    <section class="relative bg-[#020d2d] py-32 lg:py-40 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.75), rgba(2, 13, 45, 0.75)), url('{{ asset('images/soof_dev_plan.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">DEVELOPMENT PLAN</h1>
            <div class="w-24 h-1 bg-[#2563eb] mx-auto"></div>
            <p class="text-base sm:text-lg text-slate-200 font-semibold leading-relaxed max-w-2xl mx-auto">
                To Support individuals to reach their full potential
            </p>
        </div>
    </section>

    <!-- Development Plan Stages -->
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <div class="text-center space-y-4 max-w-3xl mx-auto">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Our Strategic Development Roadmap
                </h2>
                <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    SOOF’s development plan is organised into eight progressive stages designed to build lasting infrastructure, capacity and opportunity across the communities we serve.
                </p>
            </div>

            <div class="space-y-6">

                <!-- Stage 1 -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-[#020d2d] px-6 py-4 flex items-center gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-[#2563eb] text-white font-bold text-sm">1</span>
                        <h3 class="text-lg font-bold text-white">Stage One: Capital Campaigns</h3>
                    </div>
                    <div class="p-6">
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base">
                            <li>ICT Centers and E-Library in Universities</li>
                            <li>University Hostels</li>
                            <li>Classroom space</li>
                            <li>Hospital and clinic expansions (emergency rooms, bed space, physician housing)</li>
                        </ul>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-[#020d2d] px-6 py-4 flex items-center gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-[#2563eb] text-white font-bold text-sm">2</span>
                        <h3 class="text-lg font-bold text-white">Stage Two: Water / WASH Development</h3>
                    </div>
                    <div class="p-6">
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base">
                            <li>Bore holes</li>
                            <li>Water Stations</li>
                            <li>Sanitation Education</li>
                        </ul>
                    </div>
                </div>

                <!-- Stage 3 -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-[#020d2d] px-6 py-4 flex items-center gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-[#2563eb] text-white font-bold text-sm">3</span>
                        <h3 class="text-lg font-bold text-white">Stage Three: Power Development</h3>
                    </div>
                    <div class="p-6">
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base">
                            <li>Solar farm development</li>
                            <li>Shared solar energy development (revenue generation)</li>
                        </ul>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-[#020d2d] px-6 py-4 flex items-center gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-[#2563eb] text-white font-bold text-sm">4</span>
                        <h3 class="text-lg font-bold text-white">Stage Four: Farm / Ranch Expansion</h3>
                    </div>
                    <div class="p-6">
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base">
                            <li>Small plot development and training for farmers</li>
                            <li>Advanced farm techniques</li>
                            <li>Farm to market processing</li>
                        </ul>
                    </div>
                </div>

                <!-- Stage 5 -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-[#020d2d] px-6 py-4 flex items-center gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-[#2563eb] text-white font-bold text-sm">5</span>
                        <h3 class="text-lg font-bold text-white">Stage Five: Maintenance Development</h3>
                    </div>
                    <div class="p-6">
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base">
                            <li>Cadre of paid locals to provide grounds and service maintenance</li>
                            <li>Skilled staff paid to provide ongoing technical maintenance</li>
                        </ul>
                    </div>
                </div>

                <!-- Stage 6 -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-[#020d2d] px-6 py-4 flex items-center gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-[#2563eb] text-white font-bold text-sm">6</span>
                        <h3 class="text-lg font-bold text-white">Stage Six: Social Impact / Revenue Generation</h3>
                    </div>
                    <div class="p-6">
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base">
                            <li>Fabrication, packaging and marketing</li>
                            <li>Crop development and market development</li>
                            <li>Art Marketing and sales</li>
                        </ul>
                    </div>
                </div>

                <!-- Stage 7 -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-[#020d2d] px-6 py-4 flex items-center gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-[#2563eb] text-white font-bold text-sm">7</span>
                        <h3 class="text-lg font-bold text-white">Stage Seven: Job Training / Work Readiness</h3>
                    </div>
                    <div class="p-6">
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base">
                            <li>Skills training and education</li>
                            <li>STEAM education</li>
                            <li>Educational scholarships</li>
                        </ul>
                    </div>
                </div>

                <!-- Stage 8 -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-[#020d2d] px-6 py-4 flex items-center gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-full bg-[#2563eb] text-white font-bold text-sm">8</span>
                        <h3 class="text-lg font-bold text-white">Stage Eight: Medical / Clinical Equipment and Staffing</h3>
                    </div>
                    <div class="p-6">
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base">
                            <li>Prioritization of clinical/medical equipment in primary, secondary and tertiary clinics</li>
                            <li>Clinical staff development</li>
                            <li>Mental health service development</li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Optional CTA -->
            <div class="text-center pt-8">
                <a href="{{ url('/what-we-do') }}" 
                   class="inline-flex items-center px-8 py-3.5 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md transition-colors">
                    Explore Our Projects
                </a>
            </div>

        </div>
    </section>

@endsection