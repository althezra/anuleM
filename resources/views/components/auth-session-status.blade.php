@props(['status'])

@if ($status)
    <span {{ $attributes->merge(['class' => 'text-xs text-green-600']) }}>
        {{ $status }}
    </span>
@endif
