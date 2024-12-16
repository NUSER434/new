<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Большая надпись НАРУШЕНИЙ.НЕТ -->
        <div class="text-center mb-6">
            <h1 class="text-5xl md:text-6xl font-bold">
                <span class="text-red-500">НАРУШЕНИЙ</span><span class="text-blue-500">.НЕТ</span>
            </h1>
        </div>

        <!-- Надпись "Авторизация" -->
        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold">Авторизация</h2>
        </div>

        <!-- Логин -->
        <div>
            <x-text-input
                id="login"
                class="block mt-1 w-full h-12 placeholder-gray-400"
                type="text"
                name="login"
                :value="old('login')"
                required
                autofocus
                placeholder="Логин"
            />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Пароль -->
        <div class="mt-4">
            <x-text-input
                id="password"
                class="block mt-1 w-full h-12 placeholder-gray-400"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Пароль"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Кнопка Войти -->
        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ml-4">
                {{ __('Войти') }}
            </x-primary-button>
        </div>

        <!-- Кнопка "Зарегистрироваться" -->
        <div class="text-center mt-4">
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Зарегистрироваться</a>
        </div>
    </form>
</x-guest-layout>