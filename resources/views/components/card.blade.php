@props([
    'title',
    'description',
    'badge' => null,
    'icon' => null
])

<div {{ $attributes->merge(['class' => 'group bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between']) }}>
    <div>
        <div class="flex items-center justify-between mb-6">
            @if($icon)
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    {{ $icon }}
                </div>
            @endif
            @if($badge)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/60">
                    {{ $badge }}
                </span>
            @endif
        </div>
        <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors mb-3">
            {{ $title }}
        </h3>
        <p class="text-slate-600 text-sm leading-relaxed mb-6">
            {{ $description }}
        </p>
    </div>
    
    @if(isset($action))
        <div class="pt-4 border-t border-slate-100">
            {{ $action }}
        </div>
    @endif
</div>