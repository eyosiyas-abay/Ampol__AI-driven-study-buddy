<div class="flex flex-col items-start gap-1 w-full">
    <label class="text-sm text-gray-600">Email</label>
    <div class="w-full relative">
        <div class="absolute left-0 top-0 h-full rounded-sm flex items-center justify-center px-2">
            <x-heroicon-o-envelope class="w-6 h-6 text-blue-600" />
        </div>

        <input type="text" class="w-full border border-gray-300 rounded-lg p-2">

        <div class="absolute right-0 top-0 h-full rounded-sm flex items-center justify-center px-2">
            <x-heroicon-o-eye class="w-6 h-6 text-blue-600" />
        </div>
    </div>
    <span class="flex items-center gap-1 text-xs text-red-500">
        Not a valid email address
    </span>
</div>
