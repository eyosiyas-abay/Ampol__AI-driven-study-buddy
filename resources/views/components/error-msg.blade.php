@if ($error ?? false)
    <span class="flex items-center gap-1 text-xs text-red-500">
        {{ $error }}
    </span>
@endif
