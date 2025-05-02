<x-layouts.app>
    {{-- <div class="w-[1266px] h-[400px] bg-white mx-auto rounded-3xl mt-5 p-3">
        <div
            class="w-full h-full border-2 border-gray-300 border-dotted rounded-xl flex items-center justify-center flex-col">
            <h1 class="font-semibold text-3xl text-center">Select, drag and drop, or paste link</h1>
            <p class="text-md text-center mt-2 text-gray-600 w-[700px]">Only text-based documents, websites, or website
                links are
                allowed. Please
                avoid uploading large files, keep documents concise and under size limits</p>

            <div class="mt-10">
                <x-forms.button class="mt-5" label="Upload Document" />
            </div>
        </div>
    </div> --}}

    <div class="w-[1266px] bg-white mx-auto rounded-3xl mt-5 py-5 px-6">
        <h3 class="font-semibold flex items-center justify-between">
            File successfully uploaded
            <x-heroicon-o-check-circle class="w-5 h-5 text-green-600" />
        </h3>

        <p class="flex items-center gap-2 mt-3 border-t border-gray-200 pt-5 pb-1">
            <x-heroicon-o-document-check class="w-5 h-5" />
            Mid night file.jpg
        </p>
    </div>

    <div class="w-full bg-white mt-4">
        <div class="w-[1266px] mx-auto  py-10 flex items-start gap-10">
            <div class="w-80 px-6 p-5 border border-gray-200 rounded-lg">
                <h4 class="pb-2 border-b border-gray-200">Details</h4>

                <ul>
                    <li>test</li>
                    <li>test</li>
                </ul>
            </div>

            <div class="flex-1 bg-green-300 h-[700px]">
                bg
            </div>
        </div>
    </div>
</x-layouts.app>
