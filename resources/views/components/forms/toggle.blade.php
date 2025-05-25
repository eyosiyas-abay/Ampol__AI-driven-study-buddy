@props(['on' => false])

<button type="button" role="switch" aria-checked="{{ $on ? 'true' : 'false' }}" x-data="{ on: @entangle($attributes->wire('model')) ?? {{ $on ? 'true' : 'false' }} }"
    x-on:click="on = !on" :class="{ 'bg-blue-500': on, 'bg-gray-200': !on }"
    class="relative inline-flex h-6 max-w-11 min-w-11 items-center rounded-full transition-colors duration-200 ease-in-out focus:outline-none cursor-pointer"
    {{ $attributes->whereDoesntStartWith('wire:model') }}>
    <span :class="{ 'translate-x-6': on, 'translate-x-1': !on }"
        class="inline-block h-4 w-4 transform rounded-full bg-white shadow-lg ring-0 transition-transform duration-200 ease-in-out"></span>
</button>
