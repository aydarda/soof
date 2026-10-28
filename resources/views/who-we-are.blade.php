@extends('layouts.app')

@section('title', 'Who We Are – SOOF')

@section('content')

    <!-- Hero / Header Section -->
    <section class="relative bg-[#020d2d] py-32 lg:py-40 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.75), rgba(2, 13, 45, 0.75)), url('{{ asset('images/about-bg.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">ABOUT US (BRIDGING THE GAP)</h1>
            <div class="w-24 h-1 bg-[#2563eb] mx-auto"></div>
            <p class="text-base sm:text-lg text-slate-200 font-semibold leading-relaxed max-w-2xl mx-auto">
                To Provide the Services and Resources to Support Those in Need in Our Communities.
            </p>
        </div>
    </section>

    <!-- Support Us Banner Section -->
    <section class="py-16 bg-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight leading-snug">
                        SUPPORT US AND CHANGE THE COURSE OF A LIFE TODAY!
                    </h2>
                </div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 bg-white p-6 rounded-xl shadow-xs border border-slate-100">
                    <p class="text-sm text-slate-600 font-medium">Your donations will get to needy.</p>
                    <a href="#" class="inline-flex items-center gap-2 px-7 py-3.5 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M20.067 8.528c.376-.84.215-1.455-.384-1.845-.597-.39-1.636-.587-3.116-.587H10.42c-.41 0-.757.296-.826.705l-2.07 13.125c-.046.29.176.55.47.55h3.362l.744-4.717h2.247c3.126 0 5.484-.712 6.07-4.417.262-1.678-.175-2.584-.346-2.896zm-4.73 3.65c-.32 2.036-2.15 2.036-3.89 2.036h-1.04l.955-6.052h1.168c1.378 0 2.583 0 2.943 2.338.038.243.056.505-.136.852l-.001.001z"/></svg>
                        DONATE NOW!
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Blockquote Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 space-y-6">
            <h4 class="text-[#2563eb] font-bold text-sm tracking-wider uppercase">— Our Mission</h4>
            <blockquote class="border-l-7 border-slate-200 pl-6 py-2 text-slate-700 text-lg sm:text-xl font-medium leading-relaxed italic">
                SOOF is dedicated to improving the living conditions of individuals and families across Nigeria through increased access to healthcare, education, wealth creation and economic sustainability.
            </blockquote>
        </div>
    </section>

    <!-- Who We Are Detailed Content Section -->
    <section class="py-20 bg-slate-50 text-slate-800 border-y border-slate-200">
        <div class="max-w-4xl mx-auto px-4 space-y-10">
            <div class="space-y-4">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Who We Are</h2>
                <div class="w-16 h-1 bg-[#2563eb]"></div>
            </div>

            <div class="space-y-6 text-slate-700 text-sm sm:text-base leading-relaxed">
                <p>
                    The foundation was established in 2007 and officially registered with the Corporate Affairs Commission, Nigeria in 2015 to address the growing challenges in Nigeria, and Edo State. Although significant success has been achieved in some areas, such as reducing communicable disease, the people of Nigeria are still faced with a number of devastating challenges, from insufficient access to clean water and sanitation facilities, to inadequate access to healthcare and medications, to a lack of formal education and literacy development. Our focus areas address these challenges as well as the potential for long-term positive improvements that result in better lives for the people of Edo State. This includes the following assumptions and intentions:
                </p>

                <ul class="list-disc pl-5 space-y-3 pt-2 text-slate-700">
                    <li>To set Edo State as a model for replication for other small and larger scale economic and social impact initiatives. This model will address and mitigate poverty through a series of effective strategies and expectations.</li>
                    <li>Societal assessments to identify strengths, weaknesses, challenges and untapped opportunities around Edo State, prioritizing pressing problems in need of immediate solutions as well as long-term development strategic plans.</li>
                    <li>Address ongoing and systemic health crises, in addition to Covid, to ensure not only a healthy society but also to reduce the cost burden of caring for chronically ill individuals suffering from communicable and non-communicable disease, primarily HIV/AIDS.</li>
                    <li>Opportunities and education targeted to the youth of Nigeria, which consists of 60% of the community under the age of 30.</li>
                    <li>Development and engagement of Nigerian-led organizations and businesses to expand the potential to mitigate identified challenges and to create economic opportunities.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- More About Us: Objectives, Target Areas, and Vision -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <div class="text-center space-y-4 max-w-3xl mx-auto">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">MORE ABOUT US</h2>
                <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                
                <!-- Left Column: Objectives & Target Areas -->
                <div class="space-y-10">
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-slate-900">Objectives</h3>
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base leading-relaxed">
                            <li>Improve healthcare in local communities and the larger society;</li>
                            <li>Enhance the quality of Education for children and young people;</li>
                            <li>Alleviate poverty through humanitarian activities; and</li>
                            <li>Create Economic sustainability through wealth creation.</li>
                        </ul>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-slate-900">Target Areas</h3>
                        <ul class="list-disc pl-5 space-y-2 text-slate-600 text-sm sm:text-base leading-relaxed">
                            <li>Health</li>
                            <li>Education</li>
                            <li>Community Development</li>
                            <li>Economic Sustainability</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column: Our Vision -->
                <div class="bg-slate-50 p-8 sm:p-10 rounded-2xl border border-slate-200 space-y-6">
                    <h4 class="text-[#2563eb] font-bold text-sm tracking-wider uppercase">— Our Vision</h4>
                    <p class="text-slate-700 text-sm sm:text-base leading-relaxed">
                        The Sergius Oseasochie Ogun Foundation (SOOF) is a private, not-for-profit initiative driven by Honorable Sergius Oseasochie Ogun and his family to enhance the social wellbeing of individuals in the society. Through SOOF, we seek to create a society in which all residents have access to the basic necessities of living, according to the Human Development Index. Our desire to improve the lives of our neighbors and friends is built upon and will leverage our four pillars of service and development – Health, Education, Humanities and Economic Sustainability – which will help to build capacity and support the less privileged in our communities.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Impact Counter Section (Styled with exact dark navy background) -->
    <section class="py-20 bg-[#020d2d] text-white text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="space-y-2">
                    <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tight">100+</h2>
                    <h4 class="text-sm font-semibold tracking-wide uppercase text-slate-300"><span class="text-lg">Communities</span> helped</h4>
                </div>
                <div class="space-y-2">
                    <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tight">320,000+</h2>
                    <h4 class="text-sm font-semibold tracking-wide uppercase text-slate-300">Individuals distributed</h4>
                </div>
                <div class="space-y-2">
                    <h2 class="text-4xl sm:text-5xl font-extrabold tracking-tight">30,000T +</h2>
                    <h4 class="text-sm font-semibold tracking-wide uppercase text-slate-300">Food Provided</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Scope of Activities and Services Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="max-w-3xl space-y-3">
                <h3 class="text-[#2563eb] font-bold text-sm tracking-wider uppercase">— Scope of Activities and Services</h3>
                <h5 class="text-xl sm:text-2xl font-bold text-slate-900 leading-snug">
                    The following service areas provide the background upon which our programs and interventions have been geared.
                </h5>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 pt-6">
                <!-- Left Services -->
                <div class="space-y-8 bg-slate-50 p-8 rounded-xl border border-slate-200">
                    <div class="space-y-3">
                        <h4 class="text-lg font-bold text-slate-900 uppercase tracking-wide text-[#2563eb]">Health</h4>
                        <ul class="list-disc pl-5 space-y-1.5 text-slate-600 text-sm">
                            <li>Medical equipment.</li>
                            <li>Primary, Secondary and Tertiary care improvements.</li>
                            <li>Access to medicine and clinical care.</li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <h4 class="text-lg font-bold text-slate-900 uppercase tracking-wide text-[#2563eb]">Education</h4>
                        <ul class="list-disc pl-5 space-y-1.5 text-slate-600 text-sm">
                            <li>Development of ICT Centers.</li>
                            <li>STEAM programs for youth.</li>
                            <li>Leadership training.</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Services -->
                <div class="space-y-8 bg-slate-50 p-8 rounded-xl border border-slate-200">
                    <div class="space-y-3">
                        <h4 class="text-lg font-bold text-slate-900 uppercase tracking-wide text-[#2563eb]">Community Development</h4>
                        <ul class="list-disc pl-5 space-y-1.5 text-slate-600 text-sm">
                            <li>WASH projects.</li>
                            <li>Housing development.</li>
                            <li>Development of Student Hostels.</li>
                        </ul>
                    </div>

                    <div class="space-y-3">
                        <h4 class="text-lg font-bold text-slate-900 uppercase tracking-wide text-[#2563eb]">Economic Sustainability</h4>
                        <ul class="list-disc pl-5 space-y-1.5 text-slate-600 text-sm">
                            <li>Entrepreneurships.</li>
                            <li>Small and medium scale business development.</li>
                            <li>Agricultural development.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-24 bg-slate-50 border-t border-slate-200 text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Partners</h2>
            <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
            <h4 class="text-[#2563eb] font-bold text-sm tracking-wider uppercase">— Partnerships and Collaborations</h4>
            <p class="text-slate-700 text-sm sm:text-base leading-relaxed font-medium pt-4">
                We are responsive to important development participants and organizations that are actively involved in our target areas; furthermore, we seek and encourage partnerships and collaborations that expand our interventions. We intend to upscale our interventions from providing basic primary healthcare facilities and services, educational materials and humanitarian interventions; to providing tertiary and improved interventions that support development. It is our desire to bridge this gap by establishing a plethora of collaborative partnerships geared to achieve maximum impact, widespread capacity building and human capital development.
            </p>
        </div>
    </section>

@endsection