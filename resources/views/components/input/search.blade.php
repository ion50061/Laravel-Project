<input
    {{ $attributes->merge(['type' => '', 'class' => 'px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500']) }}>
    {{ $slot }}
</input>