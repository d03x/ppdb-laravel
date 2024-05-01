@props(['icon'=>false,'href'=>null])
<li>
    <a href="{{ $href }}" {!! $attributes !!} class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group cursor-pointer {{ request()->fullUrlIs($href) ? 'bg-primary text-white hover:bg-primary' : '' }}">
      @if ($icon)
          <i class="text-lg {{ $icon }}"></i>
      @endif
       <span class="ms-3">
        {{ $slot }}
       </span>
    </a>
 </li>