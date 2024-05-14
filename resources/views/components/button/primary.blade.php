@props(['target' => null])

<button {{ $attributes->merge(['class' => 'flex items-center text-sm text-primary bg-accent border rounded px-3 py-1.5 gap-1.5']) }}>
    <x-icon.loading class="w-4 h-4" wire:target="{{ $target }}" wire:loading wire:loading.class="animate-spin" />
    {{ $slot }}
</button>