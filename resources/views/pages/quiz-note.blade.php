<x-layouts.app>
    <div class="w-full bg-white mt-4">
        <div class="w-[1266px] mx-auto py-6 flex items-start gap-10">
            <p class="flex items-center gap-1.5 text-xs text-gray-600">
                <x-heroicon-o-exclamation-triangle class="w-[14px] h-[14px]" />
                <span class="text-xs">
                    If you notice any problems or have feedback about the AI-generated quiz or note, please let me know
                    by clicking the link provided <a href="" class="text-xs text-blue-600">here</a>.
                </span>
            </p>
        </div>

        <div class="w-[1266px] mx-auto flex items-start gap-10">
            @livewire('quiz-note.quiz-note-list')
            @livewire('quiz-note.quiz')
        </div>
    </div>
</x-layouts.app>
