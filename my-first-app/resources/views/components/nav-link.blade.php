@props(['active' => false])

<a {{ $attributes->merge([
        'class' => ($active
            ? 'bg-gray-800 text-white'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white') 
            . ' rounded-md px-3 py-2 text-sm font-medium transition-colors duration-150'
    ]) }}
    aria-current="{{ $active ? 'page' : 'false' }}"
>
    {{ $slot }}
</a>
