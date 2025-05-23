@props(['href'])

<a {{ $attributes->merge([
    'href' => $href,
    'class' => 'underline-none text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
]) }}>
    {{ $slot }}
</a> 