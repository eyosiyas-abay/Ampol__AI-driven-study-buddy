<section class="flex flex-col items-center justify-center h-[600px] pb-5">
    <h3
        class="font-semibold border border-gray-300 bg-gradient-to-r from-[#3a0ca3] via-[#b5179e] to-[#f72585] bg-clip-text text-transparent flex items-center justify-center rounded-full py-2.5 px-4 text-sm">
        @lang('Master Any Subject with AI-Powered Help')
    </h3>
    <h1 class="text-[3.5em] w-[800px] text-center mb-5 mt-6 font-semibold">
        @lang('Powerful & Effortless Learning with Your') <b
            class="bg-gradient-to-r from-[#3a0ca3] via-[#b5179e] to-[#f72585] bg-clip-text text-transparent font-semibold">AI
            @lang('Study Buddy')</b>
    </h1>

    <p class="text-2xl">@lang('AI-driven study help, anytime, anywhere.')</p>

    <div class="mt-10 flex items-center gap-3">
        <x-forms.input placeholder="youremail@example.com" class="flex-1 w-[220px]">
            <x-slot name="left">
                <x-heroicon-o-at-symbol class="w-4 h-4 text-gray-400" />
            </x-slot>
        </x-forms.input>
        <x-forms.button>@lang('Get Started Now')</x-forms.button>
    </div>
</section>
