@props(['title'=>'','description'=>''])
<div class="bg-white rounded-lg shadow-secondary shadow">
    <div class="p-4">
        @empty(!$title && !$description)      
        <div class="mb-3">
            <h1 class="font-bold text-muted-foreground">{{ $title }}</h1>
            <span class="text-sm">{{ $description }}</span>
        </div>
        @endempty
        {{ $slot }}
    </div>
</div>