@props(['value'])

<label {{ $attributes->merge(['class' => "block mb-2 text-sm font-medium text-gray-500 dark:text-white"]) }}>
    {{ $value ?? $slot }}
</label>
