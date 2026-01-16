@php
    
    $bgColor = $color ?? 'bg-yellow-500';
    
   
    $colorBase = str_replace('bg-', '', $bgColor);
    $hoverBgColor = 'hover:bg-' . $colorBase;
    $ringColor = 'focus:ring-' . $colorBase;
@endphp

<button class="px-6 py-3 rounded-lg text-white font-semibold text-lg transition duration-300 
    {{ $bgColor }} {{ $hoverBgColor }} focus:outline-none focus:ring-4 {{ $ringColor }}
    {{ $textColor }} shadow-md hover:shadow-lg flex items-center justify-center">

    {{ $text }}

    @if($icon)
        <i class="{{ $icon }} ml-2"></i>
    @endif
</button>
