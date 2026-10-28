@extends('layouts.app')

@section('title', 'SOOF – Bridging the Gap')

@section('content')

    <!-- Hero Section (Dark Area set to exact dark navy #020d2d) -->
    <section class="relative bg-[#020d2d] py-32 lg:py-40 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.75), rgba(2, 13, 45, 0.75)), url('{{ asset('images/Annual-Rice-Distribution-To-Widows-2020_3.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-6">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight">BRIDGING THE GAP</h1>
            <p class="text-sm sm:text-base lg:text-lg text-slate-200 leading-relaxed max-w-3xl mx-auto">
                Our goal is to support individuals to reach their full potential by creating improved conditions and opportunities for residents to achieve better incomes, better housing, improved education and improved medical care.
            </p>
            <div class="pt-4">
                <a href="{{ url('/what-we-do') }}" class="inline-block px-7 py-3 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded shadow-md transition-colors">
                    READ MORE &gt;
                </a>
            </div>
        </div>
    </section>

    <!-- The Gap Section -->
    <section id="gap" class="py-24 bg-white text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">THE GAP</h2>
            <p class="text-sm sm:text-base text-slate-600 leading-relaxed max-w-3xl mx-auto">
                The people of Nigeria are still faced with a number of devastating challenges, from insufficient access to clean water and sanitation facilities, to inadequate access to healthcare and medications, to a lack of formal education and literacy development.
            </p>
            <div class="pt-2">
                <a href="{{ url('/who-we-are') }}" class="inline-block px-7 py-3 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded shadow-md transition-colors">
                    READ MORE &gt;
                </a>
            </div>
        </div>
    </section>

    <!-- SOOF Development Plan Section (Dark Area set to exact dark navy #020d2d) -->
    <section id="development-plan" class="relative py-32 bg-[#020d2d] bg-cover bg-center text-white text-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.8), rgba(2, 13, 45, 0.8)), url('{{ asset('images/soof_dev_plan.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 relative z-10 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">SOOF DEVELOPMENT PLAN</h2>
            <p class="text-sm sm:text-base text-slate-200 leading-relaxed max-w-3xl mx-auto">
                SOOF has an 8 stage development plan that covers infrastructural development, educational development, sanitary improvement, power generation, food sustainability, skill acquisition and health/medical development. Find out more here.
            </p>
            <div class="pt-4">
                <a href="{{ url('/development-plan') }}" class="inline-block px-8 py-3.5 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded shadow-md transition-colors">
                    SEE OUR DEVELOPMENT PLAN &gt;
                </a>
            </div>
        </div>
    </section>

     <!-- SOOF Achievements Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">SOOF ACHIEVEMENTS</h2>

            <!-- Grid of 4 Achievements -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-left">
                
                <!-- Card 1 -->
                <div class="bg-white flex flex-col justify-between space-y-4">
                    <div class="overflow-hidden rounded shadow-sm">
                        <img src="{{ asset('images/achievement-1.jpg') }}" alt="NECO Scholarship" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-sm font-bold text-slate-900 leading-snug">
                            Annual Free NECO Enrollment/Scholarship grants (2019-2026)
                        </h3>
                        <a href="#" class="inline-block text-xs font-bold text-[#2563eb] hover:text-[#1d4ed8]">
                            Read More &gt;
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white flex flex-col justify-between space-y-4">
                    <div class="overflow-hidden rounded shadow-sm">
                        <img src="{{ asset('images/achievement-2.jpg') }}" alt="Medical Outreaches" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-sm font-bold text-slate-900 leading-snug">
                            Annual free Medical Outreaches
                        </h3>
                        <a href="#" class="inline-block text-xs font-bold text-[#2563eb] hover:text-[#1d4ed8]">
                            Read More &gt;
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white flex flex-col justify-between space-y-4">
                    <div class="overflow-hidden rounded shadow-sm">
                        <img src="{{ asset('images/achievement-3.jpg') }}" alt="Widow Empowerment" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-sm font-bold text-slate-900 leading-snug">
                            Annual widow's empowerment programs
                        </h3>
                        <a href="#" class="inline-block text-xs font-bold text-[#2563eb] hover:text-[#1d4ed8]">
                            Read More &gt;
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white flex flex-col justify-between space-y-4">
                    <div class="overflow-hidden rounded shadow-sm">
                        <img src="{{ asset('images/achievement-4.jpg') }}" alt="Notebooks Distribution" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-sm font-bold text-slate-900 leading-snug">
                            Annual free notebooks distribution
                        </h3>
                        <a href="#" class="inline-block text-xs font-bold text-[#2563eb] hover:text-[#1d4ed8]">
                            Read More &gt;
                        </a>
                    </div>
                </div>

            </div>

            <!-- See More Projects Button -->
            <div class="pt-6">
                <a href="{{ url('/what-we-do#projects') }}" class="inline-block px-8 py-3.5 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded shadow-md transition-colors">
                    SEE MORE PROJECTS &gt;
                </a>
            </div>
        </div>
    </section>

    <!-- Donate to SOOF Section (Dark Area set to exact dark navy #020d2d) -->
    <section class="relative py-32 bg-[#020d2d] bg-cover bg-center text-white text-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.75), rgba(2, 13, 45, 0.75)), url('{{ asset('images/SOOF-MOCK-NECO-EXAMINATION-TO-SELECT-BEST-600-STUDENTS_3.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 relative z-10 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">DONATE TO SOOF</h2>
            <p class="text-sm sm:text-base text-slate-200 leading-relaxed max-w-3xl mx-auto">
                At SOOF, our MISSION is dedicated to improving the living conditions of individuals and families across Nigeria through increased access to health care, education, wealth creation and economic sustainability.
            </p>
            <div class="pt-4">
                <a href="{{ url('/donate') }}" class="inline-block px-8 py-3.5 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded shadow-md transition-colors">
                    DONATE NOW &gt;
                </a>
            </div>
        </div>
    </section>

    <section id="gap" class="py-24 bg-white text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-6">
            
        </div>
    </section>

   

@endsection