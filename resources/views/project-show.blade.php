@extends('layouts.app')

@section('title', $project->title . ' – SOOF')

@section('content')

    <!-- Hero Section -->
    <section class="relative bg-[#020d2d] py-24 lg:py-32 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.85), rgba(2, 13, 45, 0.85)), url('{{ asset('images/hero-bg.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-4">
            <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">{{ $project->title }}</h1>
            <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
            @if($project->project_date)
                <p class="text-xs sm:text-sm text-slate-300">{{ $project->project_date->format('F j, Y') }}</p>
            @endif
        </div>
    </section>

    <!-- Album Gallery Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            @if($project->description)
                <div class="max-w-3xl mx-auto text-slate-700 text-base sm:text-lg leading-relaxed space-y-4">
                    {!! nl2br(e($project->description)) !!}
                </div>
            @endif

            <div class="space-y-6 pt-6">
                <h3 class="text-xl font-bold text-slate-900 border-b border-slate-200 pb-4">Project Photo Gallery</h3>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($project->images as $image)
                        <div class="bg-slate-50 rounded-xl border border-slate-200 overflow-hidden shadow-xs group">
                            <div class="aspect-[4/3] overflow-hidden bg-slate-200">
                                <img src="{{ asset('storage/' . $image->image_path) }}" 
                                     alt="{{ $image->caption ?? $project->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            @if($image->caption)
                                <div class="p-4">
                                    <p class="text-xs sm:text-sm text-slate-600 font-medium">{{ $image->caption }}</p>
                                </div>
                            @endif
                        </div>
                    @empty
                        <p class="col-span-full text-center text-slate-500 py-12">No images uploaded for this album yet.</p>
                    @endforelse
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('what-we-do') }}" class="inline-flex items-center px-8 py-3.5 bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold text-xs uppercase tracking-wider rounded-full transition-colors">
                    ← Back to Projects
                </a>
            </div>

        </div>
    </section>

@endsection