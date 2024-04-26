<x-app-layout title="Welcome">
 
    <div class="shadow-lg rounded  max-w-sm mx-auto mt-24">
        <div class="p-6">
            <div class="flex flex-col mb-6 p-0">
                <h3 class="text-xl font-semibold leading-6 tracking-tighter">Login</h3>
                <p class="mt-1.5 text-sm text-muted-foreground">Silakan masuk jika Anda sudah membuat akun.</p>
            </div>
            <form action="{{ route('login.authenticated') }}" method="POST">
                @method("POST")
                @csrf
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input name='email' placeholder="{{ __('Ketikan alamat email') }}" type="text" id='email' class="w-full" />
                    <x-input-error :messages="$errors->get('email')"/>
                </div>
                <div class="mt-3 mb-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input name='password' type="password" id='password' class="w-full" />
                    <x-input-error :messages="$errors->get('password')"/>
                </div>
                <div>
                    <x-button class="w-full">{{ __('Login') }}</x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
