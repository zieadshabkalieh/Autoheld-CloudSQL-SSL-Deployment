@props(['name', 'image', 'date', 'description', 'rating'])

@php
    $initial = mb_substr($name, 0, 1);
@endphp

<div class="bg-gray-50 rounded-2xl shadow-lg p-6 w-full max-w-sm transition-transform duration-500 ease-in-out transform hover:scale-105 group">
    

    <div class="flex items-center gap-4 mb-6">
       <div class="w-14 h-14 rounded-full overflow-hidden shadow-lg ring-4 ring-yellow-500">
    <img src="{{ asset('' . $image) }}" alt="{{ $name }}" class="w-full h-full object-cover">
</div>
        <div>
            <h3 class="text-lg font-semibold text-black">{{ $name }}</h3>
            <p class="text-xs text-gray-500">{{ $date }}</p>
        </div>
    </div>

    <!-- الوصف -->
    <div class="overflow-hidden transition-[max-height] duration-700 ease-in-out max-h-24 group-hover:max-h-96 mb-6">
        <p class="text-black text-sm leading-relaxed">
            "{{ $description }}"
        </p>
    </div>

    <!-- التقييم -->
    <div class="flex items-center gap-1">
        @for ($i = 1; $i <= 5; $i++)
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ $i <= $rating ? 'text-yellow-600' : 'text-gray-400' }}" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.719c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
        @endfor
    </div>
</div>
