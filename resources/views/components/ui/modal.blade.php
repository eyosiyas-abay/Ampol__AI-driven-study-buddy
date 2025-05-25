<div class="fixed top-0 left-0 w-full h-full z-50" x-data="{ isOpen: true }" x-show="isOpen"
    @open-modal.window="isOpen = true" @close-modal.window="isOpen = false">
    <div class="relative w-full h-full flex items-center justify-center">
        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-65" @click="isOpen = false"></div>

        <div class="relative z-40 min-w-96 bg-white rounded-xl">
            <header class="flex items-center justify-between p-4 border-b border-gray-100">
                <h4 class="text-[15px] font-semibold">Generate Quiz Options</h4>

                <x-forms.button class="p-0 h-6 w-6 rounded-full bg-gray-200 border-none" @click="isOpen = false">
                    <x-heroicon-o-x-mark class="w-4 h-4 text-black" />
                </x-forms.button>
            </header>

            <section class="p-4 max-h-96 overflow-y-auto overflow-x-hidden">
                {{ $slot }}
            </section>

            <footer class="flex items-center">
                <x-forms.button class="flex-1 bg-gray-200 border-gray-200 rounded-none h-11 rounded-bl-xl text-black"
                    x-on:click="isOpen = false">
                    Cancel
                </x-forms.button>
                <x-forms.button class="flex-1 rounded-none h-11 rounded-br-xl"
                    x-on:click="$dispatch('submit-quiz-options', ['pass-options-here'])">
                    Generate Questions
                </x-forms.button>
            </footer>
        </div>
    </div>
</div>
