@props(['icon'=>false])
<li>
    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
      @if ($icon)
          <i class="text-lg {{ $icon }}"></i>
      @endif
       <span class="ms-3">
        {{ $slot }}
       </span>
    </a>
 </li>