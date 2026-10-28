@extends('layouts.app')

@section('title', 'Letter from Hon. Sergius Oseasochie Ogun – SOOF')

@section('content')

    <!-- Hero / Header Section -->
    <section class="relative bg-[#020d2d] py-28 lg:py-36 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.8), rgba(2, 13, 45, 0.8)), url('{{ asset('images/about-bg.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">Letter from Hon. Sergius Oseasochie Ogun</h1>
            <div class="w-24 h-1 bg-[#2563eb] mx-auto"></div>
            <p class="text-sm sm:text-base lg:text-lg text-slate-200 font-medium leading-relaxed max-w-3xl mx-auto">
                My goal, and the goal of my family, is to create improved conditions and opportunities for residents to achieve better income, better housing, improved education and improved medical care.
            </p>
        </div>
    </section>

    <!-- Main Letter Content Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- Left Column: Letter Body (7 Cols) -->
                <div class="lg:col-span-7 space-y-6 text-slate-700 text-sm sm:text-base leading-relaxed">
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Letter from Hon. Sergius Oseasochie Ogun</h3>
                    
                    <p>
                        At SOOF, we believe that, <strong>“Change starts at home.”</strong> In Africa, and in Nigeria, it is often assumed that all efforts to develop change originate from wealthier nations. At SOOF, we seek to transform our communities from within, in Edo State, and then extend our interventions throughout Nigeria, as an example to the world. I started this foundation to not only address the challenges that face my brothers and sisters across Nigeria but also to inspire others to change not only themselves but also their community. I am a current member of the National Assembly, serving my second tenure in office, after having initially been elected to the Federal House of Representatives in 2015. Before my foray into politics, I was a major player in the oil and gas industry in Nigeria with 25 years’ working experience. This has provided me with the global experience to engage partners, donors and supporters from around the world to help Edo State and the larger Nigerian society to reach her potential.
                    </p>

                    <p>
                        This past year has proven challenging for people and countries all over the world. Our country and our state, too, have suffered greatly, with large swaths of people unable to work, going hungry, and unable to seek health care or economic opportunities. These challenges impacted the stability of businesses, housing, education, nutritional standards, health and so much more.
                    </p>

                    <p>
                        <strong>My goal, and the goal of my family, is to create improved conditions and opportunities for residents to achieve better income, better housing, improved education and improved medical care.</strong> We seek to transform Edo State for the betterment of the entire community and for the entire nation. I wish to express my thanks to all of the individuals, businesses, officials and stakeholders who have provided support for our efforts to meet these goals. I am so grateful. Moreover, I look forward to and am grateful for the support that awaits us as we grow the foundation and expand our services and reach to assist greater numbers across Edo State.
                    </p>

                    <p class="pt-4">Thank you for being part of this effort,</p>

                    <div class="pt-2 space-y-1">
                        <p class="font-bold text-slate-900">Hon. Sergius Oseasochie Ogun</p>
                        <p class="font-bold text-slate-700">President</p>
                    </div>
                </div>

                <!-- Right Column: Founder Image (5 Cols) -->
                <div class="lg:col-span-5 sticky top-28">
                    <div class="rounded-2xl overflow-hidden shadow-xl border border-slate-100 bg-slate-50">
                        <img src="{{ asset('images/Hon.-Sergius-Oseasochie-Ogun.jpg') }}" alt="Hon. Sergius Oseasochie Ogun" class="w-full h-auto object-cover" onerror="this.src='https://via.placeholder.com/811x1024?text=Hon.+Sergius+Ogun'">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Impact Statistics Counter Section (Exact Dark Navy #020d2d) -->
    <section class="py-20 bg-[#020d2d] text-white text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
                <div class="space-y-2">
                    <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tight">28+</h2>
                    <h4 class="text-sm font-semibold tracking-wide uppercase text-slate-300">Projects Completed by SOOF to Date</h4>
                </div>
                <div class="space-y-2">
                    <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tight">1,000+</h2>
                    <h4 class="text-sm font-semibold tracking-wide uppercase text-slate-300">People helped</h4>
                </div>
                <div class="space-y-2">
                    <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tight">4,000+</h2>
                    <h4 class="text-sm font-semibold tracking-wide uppercase text-slate-300">Books distributed</h4>
                </div>
                <div class="space-y-2">
                    <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tight">30,000T +</h2>
                    <h4 class="text-sm font-semibold tracking-wide uppercase text-slate-300">Food Provided</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-24 bg-slate-50 border-t border-slate-200 text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Partners</h2>
            <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                Collaborating with dedicated stakeholders and organizations to expand our reach and maximize human capital development across Nigeria.
            </p>
        </div>
    </section>

@endsection