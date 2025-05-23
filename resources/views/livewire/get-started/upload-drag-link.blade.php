<div x-data="dropzone()">
    <div class="w-[1266px] h-[400px] bg-white mx-auto rounded-3xl mt-5 p-3" x-on:dragover.prevent
        x-on:dragenter="handleDragEnter" x-on:dragleave="handleDragLeave" x-on:drop="handleDrop">
        <div class="w-full h-full border-2 border-gray-300 border-dotted rounded-xl flex items-center justify-center flex-col relative"
            :class="{ 'border-blue-500': dragging }">
            <div class="absolute left-0 top-0 w-full h-full rounded-xl hidden" :class="{ 'flex bg-gray-100': dragging }">
            </div>
            <h1 class="font-semibold text-3xl text-center">
                Select, or drag and drop to upload
            </h1>
            <p class="text-md text-center mt-2 text-gray-600 w-[700px]">
                Only document files are allowed (PDF, DOC, DOCX, TXT). Maximum file size is 10MB.
                Please ensure your documents are text-based and can have their contents extracted.
            </p>
            <div class="mt-12 flex items-center gap-2">
                <div class="hidden">
                    <x-forms.input type="file" id="file" x-on:change="handleFile($event.target.files[0])"
                        accept=".pdf,.doc,.docx,.txt" />
                </div>
                <x-forms.label
                    class="h-10 px-4 rounded-lg flex items-center justify-center bg-blue-500 hover:bg-blue-400 text-md text-white text-sm gap-2 transition-all cursor-pointer"
                    for="file">
                    <x-heroicon-o-arrow-up-tray class="w-4 h-4 text-white" />
                    Upload Document
                </x-forms.label>
            </div>
        </div>
    </div>

    <div class="w-[1266px] bg-white mx-auto rounded-3xl mt-5 py-5 px-6" x-show="uploadedFileName">
        <template x-if="loading">
            <h3 class="font-semibold flex items-center justify-between">
                Uploading file please wait ...
                <x-heroicon-o-lifebuoy class="w-5 h-5 text-blue-300 animate-spin" />
            </h3>
        </template>
        <template x-if="!loading && !error">
            <h3 class="font-semibold flex items-center justify-between">
                File successfully uploaded
                <x-heroicon-o-check-circle class="w-5 h-5 text-green-600" />
            </h3>
        </template>

        <template x-if="error">
            <h3 class="font-semibold flex items-center justify-between text-red-600">
                <span x-text="error"></span>
                <x-heroicon-o-exclamation-circle class="w-5 h-5 text-red-600" />
            </h3>
        </template>

        <div class="flex items-center justify-between mt-3 pt-5 pb-1 border-t border-gray-200">
            <p class="flex items-center gap-2" x-show="!error">
                <x-heroicon-o-document-check class="w-5 h-5" />
                <span x-text="uploadedFileName"></span>
            </p>

            <x-forms.button class="px-2 h-7 text-sm font-light">
                Continue
                <x-heroicon-o-chevron-right class="w-3.5 h-3.5 text-white" />
            </x-forms.button>
        </div>
    </div>
</div>
