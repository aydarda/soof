@extends('layouts.app')

@section('title', 'Testimonials – SOOF')

@section('content')

    <!-- Hero -->
    <section class="relative bg-[#020d2d] py-32 lg:py-40 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.75), rgba(2, 13, 45, 0.75)), url('{{ asset('images/testimonials_bg.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">TESTIMONIALS</h1>
            <div class="w-24 h-1 bg-[#2563eb] mx-auto"></div>
            <p class="text-base sm:text-lg text-slate-200 font-semibold leading-relaxed max-w-2xl mx-auto">
                Voices from the communities we serve
            </p>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <div class="text-center space-y-4 max-w-3xl mx-auto">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    What People Are Saying
                </h2>
                <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Real stories from beneficiaries, partners and community members whose lives have been touched by SOOF’s work.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                    <div class="flex items-center gap-1 text-[#2563eb]">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">
                        “The free NECO registration and scholarship support from SOOF made it possible for my daughter to continue her education. We are forever grateful.”
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <p class="font-bold text-slate-900 text-sm">Mrs. A. Okoro</p>
                        <p class="text-xs text-slate-500">Parent, Esan North East</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                    <div class="flex items-center gap-1 text-[#2563eb]">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">
                        “The medical outreach in our community treated my cataract and gave me free eyeglasses. I can see clearly again. Thank you SOOF.”
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <p class="font-bold text-slate-900 text-sm">Chief E. Ibhaze</p>
                        <p class="text-xs text-slate-500">Community Elder, Ugboha</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                    <div class="flex items-center gap-1 text-[#2563eb]">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">
                        “Through the widows empowerment programme I received support that helped me start a small business. My children are now in school.”
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <p class="font-bold text-slate-900 text-sm">Mrs. Grace O.</p>
                        <p class="text-xs text-slate-500">Beneficiary, Esan South East</p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                    <div class="flex items-center gap-1 text-[#2563eb]">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">
                        “The borehole constructed by SOOF in our village has transformed daily life. Clean water is now available within walking distance.”
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <p class="font-bold text-slate-900 text-sm">Mr. P. Eromosele</p>
                        <p class="text-xs text-slate-500">Community Leader, Ewatto</p>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                    <div class="flex items-center gap-1 text-[#2563eb]">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">
                        “As a youth who benefited from the cosmetology training, I now run my own small salon. SOOF gave me skills and hope.”
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <p class="font-bold text-slate-900 text-sm">Miss B. Agbonghae</p>
                        <p class="text-xs text-slate-500">Trainee, Uromi</p>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-6">
                    <div class="flex items-center gap-1 text-[#2563eb]">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed italic">
                        “The classroom block renovated by SOOF at our school has made learning more comfortable for hundreds of students.”
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <p class="font-bold text-slate-900 text-sm">Principal, Ugboha Secondary Commercial School</p>
                        <p class="text-xs text-slate-500">Ugboha, Edo State</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection