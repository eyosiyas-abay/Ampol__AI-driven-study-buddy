<div class="flex flex-col items-start gap-1 w-full">
    @if ($label ?? false)
        <label class="text-sm text-gray-600">{{ $label }}</label>
    @endif

    <div class="w-full relative">
        @isset($left)
            <div class="absolute left-0 top-0 h-full flex items-center px-3">
                {{ $left }}
            </div>
            @endif

            <input type="{{ $type }}" placeholder="{{ $placeholder }}"
                {{ $attributes->twMerge([
                    'class' => $classes . (isset($left) ? ' pl-9' : '') . (isset($right) ? ' pr-9' : ''),
                ]) }}>

            @isset($right)
                <div class="absolute right-0 top-0 h-full flex items-center px-2">
                    {{ $right }}
                </div>
            @endisset
        </div>

        @if ($error ?? false)
            <span class="flex items-center gap-1 text-xs text-red-500">
                {{ $error }}
            </span>
        @endif
    </div>
