@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 my-3']) }}>
    {{ $value ?? $slot }}
</label>
