<form wire:submit="submit" class="mt-5 flex flex-col gap-2.5" x-data="{
    email: @entangle('email'),
    password: @entangle('password'),
    type: 'password',
    loading: false
}" x-on:wire:loading="loading = true"
    x-on:wire:loading:complete="loading = false">
    <x-forms.input label="Email" x-model="email">
        <x-slot name="left">
            <x-heroicon-o-envelope class="w-4 h-4 text-gray-400" />
        </x-slot>
    </x-forms.input>

    <x-forms.input label="Password" x-bind:type="type" x-model="password">
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

    <x-forms.button class="mt-5" wire:target="submit" wire:click="submit">
        Login
    </x-forms.button>
</form>
