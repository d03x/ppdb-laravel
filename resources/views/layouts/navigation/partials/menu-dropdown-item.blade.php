@props(['href'=>null])
<li>
  <a href="{{ $href }}" {!! $attributes !!} class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group {{ request()->fullUrlIs($href) ? 'bg-primary text-white hover:bg-primary' : '' }} hover:bg-gray-100 dark:text-white cursor-pointer dark:hover:bg-gray-700">{{ $slot }}</a>
</li>