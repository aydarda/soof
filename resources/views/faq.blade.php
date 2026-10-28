@extends('layouts.app')

@section('title', 'FAQs – SOOF')

@section('content')

    <!-- Hero -->
    <section class="relative bg-[#020d2d] py-32 lg:py-40 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.75), rgba(2, 13, 45, 0.75)), url('{{ asset('images/SOOF-MOCK-NECO-EXAMINATION-TO-SELECT-BEST-600-STUDENTS_3.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">FAQs</h1>
            <div class="w-24 h-1 bg-[#2563eb] mx-auto"></div>
            <p class="text-base sm:text-lg text-slate-200 font-semibold leading-relaxed max-w-2xl mx-auto">
                Frequently Asked Questions
            </p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

            <div class="text-center space-y-4">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Common Questions
                </h2>
                <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Find answers to the questions we are asked most often about SOOF and our work.
                </p>
            </div>

            <div class="space-y-4" x-data="{ open: null }">

                <!-- FAQ 1 -->
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button @click="open = open === 1 ? null : 1" class="w-full flex items-center justify-between px-6 py-5 text-left focus:outline-none">
                        <span class="font-semibold text-slate-900 text-sm sm:text-base pr-4">What is SOOF?</span>
                        <svg class="w-5 h-5 text-[#2563eb] transform transition-transform flex-shrink-0" :class="{ 'rotate-180': open === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open === 1" x-cloak class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        The Sergius Oseasochie Ogun Foundation (SOOF) is a private, not-for-profit initiative dedicated to improving the living conditions of individuals and families across Nigeria through increased access to healthcare, education, wealth creation and economic sustainability.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button @click="open = open === 2 ? null : 2" class="w-full flex items-center justify-between px-6 py-5 text-left focus:outline-none">
                        <span class="font-semibold text-slate-900 text-sm sm:text-base pr-4">Where does SOOF operate?</span>
                        <svg class="w-5 h-5 text-[#2563eb] transform transition-transform flex-shrink-0" :class="{ 'rotate-180': open === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open === 2" x-cloak class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        SOOF primarily focuses on communities within Esan North East and Esan South East Local Government Areas of Edo State, Nigeria, with the vision of creating a model that can be replicated in other parts of the country.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button @click="open = open === 3 ? null : 3" class="w-full flex items-center justify-between px-6 py-5 text-left focus:outline-none">
                        <span class="font-semibold text-slate-900 text-sm sm:text-base pr-4">What are SOOF’s main focus areas?</span>
                        <svg class="w-5 h-5 text-[#2563eb] transform transition-transform flex-shrink-0" :class="{ 'rotate-180': open === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open === 3" x-cloak class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        Our four pillars of service are Health, Education, Community Development and Economic Sustainability. These guide all our programmes and interventions.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button @click="open = open === 4 ? null : 4" class="w-full flex items-center justify-between px-6 py-5 text-left focus:outline-none">
                        <span class="font-semibold text-slate-900 text-sm sm:text-base pr-4">How can I support SOOF?</span>
                        <svg class="w-5 h-5 text-[#2563eb] transform transition-transform flex-shrink-0" :class="{ 'rotate-180': open === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open === 4" x-cloak class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        You can support our work by making a donation, partnering with us on projects, or volunteering your time and expertise. Visit our Donate page or contact us for more information.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button @click="open = open === 5 ? null : 5" class="w-full flex items-center justify-between px-6 py-5 text-left focus:outline-none">
                        <span class="font-semibold text-slate-900 text-sm sm:text-base pr-4">Are donations tax-deductible?</span>
                        <svg class="w-5 h-5 text-[#2563eb] transform transition-transform flex-shrink-0" :class="{ 'rotate-180': open === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open === 5" x-cloak class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        SOOF is a registered non-profit organisation in Nigeria. Please contact us for guidance on tax treatment of donations in your jurisdiction.
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button @click="open = open === 6 ? null : 6" class="w-full flex items-center justify-between px-6 py-5 text-left focus:outline-none">
                        <span class="font-semibold text-slate-900 text-sm sm:text-base pr-4">How can I contact SOOF?</span>
                        <svg class="w-5 h-5 text-[#2563eb] transform transition-transform flex-shrink-0" :class="{ 'rotate-180': open === 6 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open === 6" x-cloak class="px-6 pb-5 text-slate-600 text-sm leading-relaxed">
                        You can reach us by email at <a href="mailto:info@soofoundation.org" class="text-[#2563eb] hover:underline">info@soofoundation.org</a> or by phone. Visit our Contact Us page for full details of our offices in Nigeria and the UK.
                    </div>
                </div>

            </div>

            <!-- Still have questions? -->
            <div class="text-center pt-10 space-y-4">
                <p class="text-slate-600 text-sm">Still have questions?</p>
                <a href="{{ url('/contact-us') }}" 
                   class="inline-flex items-center px-8 py-3.5 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md transition-colors">
                    Contact Us
                </a>
            </div>

        </div>
    </section>

@endsection