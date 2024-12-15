<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Логин -->
        <div>
            <x-input-label for="login" :value="__('Логин')" />
            <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Пароль -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Пароль')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Кнопка Войти -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Войти') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
