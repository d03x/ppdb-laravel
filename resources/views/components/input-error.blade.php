<ul class="mt-1">
    @foreach ($messages as $message)
        <li class="text-xs text-destructive">{{ $message }}</li>
    @endforeach
</ul>