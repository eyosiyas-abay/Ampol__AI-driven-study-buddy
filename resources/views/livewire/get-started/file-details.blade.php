<div class="w-full bg-white mt-4">
    <div class="w-[1266px] mx-auto py-10 flex items-start gap-10">
        <div class="w-80 px-6 p-5 border border-gray-200 rounded-lg">
            <h4 class="pb-2 border-b border-gray-200">Details</h4>

            <ul class="mt-1.5">
                @if ($fileName)
                    <li class="text-gray-600"><b>{{ $fileName }}</b></li>
                    <li class="text-gray-600 mt-2">File Type: <b>{{ strtoupper($fileType) }}</b></li>
                    <li class="text-gray-600">File Size: <b>{{ strtoupper($fileSize) }}</b></li>
                @else
                    <li class="text-gray-600">No file uploaded yet</li>
                @endif
            </ul>
        </div>

        <div class="flex-1 bg-gray-50 rounded-lg p-1.5 h-[800px] overflow-auto">
            @if ($fileContent)
                @if ($fileType === 'pdf')
                    <div class="prose max-w-none">
                        <div class="py-2 px-3 rounded-lg">
                            <h3 class="text-lg font-semibold mb-3">PDF Content</h3>
                            <div class="text-gray-800 whitespace-pre-wrap text-md">{{ $fileContent }}</div>
                        </div>
                    </div>
                @else
                    <pre class="whitespace-pre-wrap font-mono text-sm text-gray-800 bg-white p-6 rounded-lg shadow-sm">{{ $fileContent }}</pre>
                @endif
            @else
                <div class="h-full flex flex-col items-center justify-center text-gray-400">
                    <x-heroicon-o-viewfinder-circle class="w-14 h-14 text-gray-400" />
                    <p class="mt-3">Upload a file to view its contents here</p>
                </div>
            @endif
        </div>
    </div>
</div>
