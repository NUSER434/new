<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Большая надпись НАРУШЕНИЙ.НЕТ -->
        <div class="text-center mb-6">
            <h1 class="text-5xl md:text-6xl font-bold">
                <span class="text-red-500">НАРУШЕНИЙ</span><span class="text-blue-500">.НЕТ</span>
            </h1>
        </div>

        <!-- Надпись "Авторизация" -->
        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold">Регистрация</h2>
        </div>

        <!-- Имя -->
        <div>
            <x-text-input
                id="name"
                class="block mt-1 w-full h-12 placeholder-gray-400"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
                placeholder="Имя"
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Отчество -->
        <div class="mt-4">
            <x-text-input
                id="middle_name"
                class="block mt-1 w-full h-12 placeholder-gray-400"
                type="text"
                name="middle_name"
                :value="old('middle_name')"
                required
                placeholder="Отчество"
            />
            <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </div>

        <!-- Фамилия -->
        <div class="mt-4">
            <x-text-input
                id="last_name"
                class="block mt-1 w-full h-12 placeholder-gray-400"
                type="text"
                name="last_name"
                :value="old('last_name')"
                required
                placeholder="Фамилия"
            />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Электронная почта -->
        <div class="mt-4">
            <x-text-input
                id="email"
                class="block mt-1 w-full h-12 placeholder-gray-400"
                type="email"
                name="email"
                :value="old('email')"
                required
                placeholder="Электронная почта"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Телефон -->
        <div class="mt-4">
            <x-text-input
                id="phone"
                class="block mt-1 w-full h-12 placeholder-gray-400"
                type="text"
                name="phone"
                :value="old('phone')"
                required
                placeholder="Телефон"
            />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Логин -->
        <div class="mt-4">
            <x-text-input
                id="login"
                class="block mt-1 w-full h-12 placeholder-gray-400"
                type="text"
                name="login"
                :value="old('login')"
                required
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
                autocomplete="new-password"
                placeholder="Пароль"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Кнопка Регистрация -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('У вас уже есть аккаунт?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Регистрация') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>