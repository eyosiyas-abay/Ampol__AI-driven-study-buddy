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
            <div class="w-80 px-6 p-5 border border-gray-200 rounded-lg">
                <h4 class="pb-2 border-b border-gray-200 flex items-center justify-between">
                    Quiz
                    <span>0/100</span>
                </h4>

                <ul class="mt-3">
                    <li
                        class="flex items-center gap-1.5 py-1 px-2 mb-1 bg-gray-100 border-l-5 border-gray-400 rounded-sm">
                        <x-heroicon-o-ellipsis-horizontal-circle class="w-4 h-4" />
                        Question 1
                    </li>
                    <li class="flex items-center gap-1.5 py-1">
                        <x-heroicon-o-ellipsis-horizontal-circle class="w-4 h-4" />
                        Question 2
                    </li>
                    <li class="flex items-center gap-1.5 py-1">
                        <x-heroicon-o-ellipsis-horizontal-circle class="w-4 h-4" />
                        Question 2
                    </li>
                </ul>
            </div>

            <div class="flex-1 h-[700px]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">12:00 minutes</p>
                    </div>

                    <div>
                        <p class="flex items-center gap-1 text-sm text-gray-600">
                            Skip Question
                            <x-heroicon-o-chevron-right class="w-[14px] h-[14px]" />
                        </p>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="flex items-start gap-2.5">
                        <p class="min-w-5 min-h-5 rounded-full bg-gray-300 flex items-center justify-center text-xs">
                            1
                        </p>
                        <p class="mt-[-2px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consectetur
                            at
                            necessitatibus
                            quisquam placeat consequuntur nesciunt enim rem? Deserunt similique sit voluptatum,
                            voluptatem impedit distinctio, quos consectetur porro architecto at officiis?</p>
                    </div>

                    <div class="border border-gray-300 px-5 py-4 rounded-lg mt-7">
                        <h3 class="font-semibold mb-2">Explanation</h3>
                        <p class="text-gray-600">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut voluptatem modi cum omnis,
                            maxime
                            illum error iste eligendi minus aperiam aliquam hic similique voluptatum ratione labore
                            blanditiis nisi quibusdam vitae.
                        </p>
                    </div>

                    <div class="mt-7">
                        <p class="text-xs text-gray-600">
                            <span class="text-xs">
                                Provide the answer for the above question
                            </span>
                        </p>

                        <div class="grid grid-cols-2 gap-3 mt-2">
                            <button class="border border-gray-300 p-3 rounded-lg">test</button>
                            <button class="border border-gray-300 p-3 rounded-lg">test</button>
                            <button class="border border-gray-300 p-3 rounded-lg">test</button>
                            <button class="border border-gray-300 p-3 rounded-lg">test</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
