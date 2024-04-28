@props(['disabled' => false, 'items' => null, 'value' => null, 'label' => null])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->twMerge(
    'flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring focus-visible:ring-primary/10 focus-visible:border-primary/50 disabled:cursor-not-allowed disabled:opacity-50',
) !!}>
    @if (is_array($items) || is_object($items))
        @foreach ($items as $key => $item)
            @if (is_array($item) || is_object($item))
                @if ($value && $label)
                    <option value="{{ $item->$value ?? $item[$value] }}">{{ $item->$label ?? $item[$label] }}</option>
                @endif
            @else
                 <option value="{{ $key }}">{{ $item }}</option>
            @endif
        @endforeach
    @endif
</select>
