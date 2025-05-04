<button {{ $attributes->twMerge([
    'class' => $classes,
]) }}>
    {{ $slot }}
    <x-heroicon-o-lifebuoy class="w-4 h-4 text-white animate-spin" wire:loading />
</button>
