@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-3 py-2 text-base border-b-2 border-transparent border-green-500 transition duration-150 ease-in-out'
            : 'block px-3 py-2 text-base border-b-2 border-transparent hover:border-black  text-gray-500 hover:text-black transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
