@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1', 'style' => 'margin-left: -1.75rem;']) }}>
        @foreach ((array) $messages as $message)
            <span>{{ $message }}</span>
        @endforeach
    </ul>
@endif
