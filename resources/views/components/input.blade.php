@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-sc-red focus:ring focus:ring-sc-red focus:ring-opacity-50']) !!}>
