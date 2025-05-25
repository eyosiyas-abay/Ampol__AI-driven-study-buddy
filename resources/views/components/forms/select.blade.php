@props([
    'options' => [],
])

<div class="flex flex-col items-start gap-1 w-full" x-data="{
    selected: @entangle($attributes->wire('model')) ?? [],
    isOpen: false,
    toggleOption(option) {
        const index = this.selected.findIndex(item => item.value === option.value);
        if (index === -1) {
            this.selected.push(option);
        } else {
            this.selected.splice(index, 1);
        }
    },
    removeOption(option) {
        const index = this.selected.findIndex(item => item.value === option.value);
        if (index !== -1) {
            this.selected.splice(index, 1);
        }
    }
}">
    <div class="w-full relative">
        <div @click="isOpen = !isOpen" @click.away="isOpen = false"
            class="w-full min-h-[40px] border border-gray-300 rounded-lg p-2 px-2 flex flex-wrap gap-2 cursor-pointer">
            <template x-for="option in selected" :key="option.value">
                <div class="flex items-center gap-1 bg-gray-100 text-gray-700 px-2 py-1 rounded-md text-sm">
                    <span x-text="option.label" class="text-xs"></span>
                    <button @click.stop="removeOption(option)" class="text-blue-500 hover:text-blue-600 cursor-pointer">
                        <x-heroicon-o-x-mark class="w-4 h-4" />
                    </button>
                </div>
            </template>
            <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">
                <x-heroicon-o-chevron-down class="w-3.5 h-3.5 text-gray-500" />
            </div>
        </div>

        <div x-show="isOpen" x-transition
            class="absolute z-50 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto">
            <template x-for="option in {{ json_encode($options) }}" :key="option.value">
                <div @click="toggleOption(option)"
                    class="px-3 py-2 hover:bg-gray-100 cursor-pointer flex items-center gap-2"
                    :class="{ 'bg-blue-50': selected.some(item => item.value === option.value) }">
                    <span x-text="option.label" class="text-xs"></span>
                </div>
            </template>
        </div>
    </div>
</div>
