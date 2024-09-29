@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center bg-primary px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white'
            : 'inline-flex items-center bg-gray-200 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md hover:text-gray-100 hover:bg-primary focus:outline-none focus:bg-primary-50 active:bg-primary transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
