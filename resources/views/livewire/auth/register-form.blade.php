<form wire:submit="submit" class="mt-5 flex flex-col gap-2.5" x-data="{
    name: @entangle('name'),
    email: @entangle('email'),
    password: @entangle('password'),
    passwordConfirm: @entangle('passwordConfirm'),
    type: 'password',
}">
    <x-forms.input label="Name" x-model="name" :error="$errors->first('name')">
        <x-slot name="left">
            <x-heroicon-o-user class="w-4 h-4 text-gray-400" />
        </x-slot>
    </x-forms.input>

    <x-forms.input label="Email" x-model="email" :error="$errors->first('email')">
        <x-slot name="left">
            <x-heroicon-o-envelope class="w-4 h-4 text-gray-400" />
        </x-slot>
    </x-forms.input>
    <x-forms.input label="Password" x-bind:type="type" x-model="password" :error="$errors->first('password')">
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
    <x-forms.input label="Confirm Password" x-bind:type="type" x-model="passwordConfirm" :error="$errors->first('passwordConfirm')">
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
    <x-forms.button class="mt-5" wire:click="submit" wire:target="submit">
        Login
    </x-forms.button>
</form>
