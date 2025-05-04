<div class="mt-5 flex flex-col gap-2.5" x-data='{type: "password"}'>
    <x-forms.input label="Email">
        <x-slot name="left">
            <x-heroicon-o-envelope class="w-4 h-4 text-gray-400" />
        </x-slot>
    </x-forms.input>
    <x-forms.input label="Password" x-bind:type="type">
        <x-slot name="left">
            <x-heroicon-o-key class="w-4 h-4 text-gray-400" />
        </x-slot>
        <x-slot name="right">
            <button class="cursor-pointer" x-on:click="type = type == 'text' ? 'password' : 'text'">
                <template x-if="type == 'text'">
                    <x-heroicon-o-eye class="w-4 h-4 text-gray-400" />
                </template>
                <template x-if="type == 'password'">
                    <x-heroicon-o-eye-slash class="w-4 h-4 text-gray-400" />
                </template>
            </button>
        </x-slot>
    </x-forms.input>
    <x-forms.button class="mt-5" wire:click="someMethod">
        Login
    </x-forms.button>

    <button wire:click="someMethod">Test Button</button>
</div>
