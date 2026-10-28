@extends('layouts.app')

@section('title', 'What We Do – SOOF')

@section('content')

    <!-- Hero / Header Section -->
    <section class="relative bg-[#020d2d] py-32 lg:py-40 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.75), rgba(2, 13, 45, 0.75)), url('{{ asset('images/projects-bg.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">OUR PROJECTS</h1>
            <div class="w-24 h-1 bg-[#2563eb] mx-auto"></div>
            <p class="text-base sm:text-lg text-slate-200 font-semibold leading-relaxed max-w-2xl mx-auto">
                To Support individuals to reach their full potential
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
                    <a href="{{ url('/donate') }}" class="inline-flex items-center gap-2 px-7 py-3.5 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M20.067 8.528c.376-.84.215-1.455-.384-1.845-.597-.39-1.636-.587-3.116-.587H10.42c-.41 0-.757.296-.826.705l-2.07 13.125c-.046.29.176.55.47.55h3.362l.744-4.717h2.247c3.126 0 5.484-.712 6.07-4.417.262-1.678-.175-2.584-.346-2.896zm-4.73 3.65c-.32 2.036-2.15 2.036-3.89 2.036h-1.04l.955-6.052h1.168c1.378 0 2.583 0 2.943 2.338.038.243.056.505-.136.852l-.001.001z"/></svg>
                        DONATE NOW!
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do – Six Focus Areas -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="text-center space-y-4 max-w-3xl mx-auto">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">What We Do</h2>
                <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- We Find & Fund -->
                <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 space-y-4">
                    <h3 class="text-lg font-bold text-[#2563eb]">— We Find & Fund</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We identify and support effective and sustainable projects that result in positive humanitarian, social and community outcomes. We further assist in these efforts by providing development and operational support, as needed.
                    </p>
                </div>

                <!-- Network Development -->
                <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 space-y-4">
                    <h3 class="text-lg font-bold text-[#2563eb]">— Network Development</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We focus on the strengthening of current networks already in place as well as the development of new network collaborations and partnerships that leverage our work and that of other providers in the region.
                    </p>
                </div>

                <!-- Community Strengthening -->
                <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 space-y-4">
                    <h3 class="text-lg font-bold text-[#2563eb]">— Community Strengthening</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Through the development of sustainable projects and networks, we help to build and strengthen communities, ensuring sustainability.
                    </p>
                </div>

                <!-- Educational Development -->
                <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 space-y-4">
                    <h3 class="text-lg font-bold text-[#2563eb]">— Educational Development</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We develop and support educational services and resources that help to provide greater educational opportunities for children and for adults.
                    </p>
                </div>

                <!-- Care and Support -->
                <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 space-y-4">
                    <h3 class="text-lg font-bold text-[#2563eb]">— Care and Support</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We develop and support projects that provide services and resources to orphans and vulnerable children and to widows in need.
                    </p>
                </div>

                <!-- International Expertise and Consultation -->
                <div class="bg-slate-50 p-8 rounded-xl border border-slate-200 space-y-4">
                    <h3 class="text-lg font-bold text-[#2563eb]">— International Expertise and Consultation</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        To ensure that we are driven by best standards and the most current research, we work with experts around the world to help guide our efforts.
                    </p>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Some of Our Projects -->
     <a name="projects"></a>
<section class="py-24 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="text-center space-y-4 max-w-3xl mx-auto">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">SOME OF OUR PROJECTS</h2>
            <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <article class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="aspect-[4/3] bg-slate-200 overflow-hidden">
                        <img src="{{ asset('storage/' . $project->cover_image) }}" 
                             alt="{{ $project->title }}" 
                             class="w-full h-full object-cover"
                             onerror="this.src='https://placehold.co/600x450/e2e8f0/64748b?text=Project+Cover'">
                    </div>
                    <div class="p-6 space-y-3">
                        <h3 class="text-base font-bold text-slate-900 leading-snug">
                            <a href="{{ route('projects.show', $project->slug) }}" class="hover:text-[#2563eb] transition-colors">
                                {{ $project->title }}
                            </a>
                        </h3>
                        <p class="text-xs text-slate-500">{{ $project->project_date?->format('F j, Y') }}</p>
                        <a href="{{ route('projects.show', $project->slug) }}" class="inline-block text-sm font-semibold text-[#2563eb] hover:text-[#1d4ed8] transition-colors">
                            View Album »
                        </a>
                    </div>
                </article>
            @empty
                <p class="col-span-3 text-center text-slate-500 py-12">No project albums available at this time.</p>
            @endforelse
        </div>

        @if($projects->hasPages())
            <div class="pt-6">
                {{ $projects->links() }}
            </div>
        @endif
    </div>
</section>

@endsection