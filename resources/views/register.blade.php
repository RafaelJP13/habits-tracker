<x-layout>
    
    <main class="py-10">

        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mb-10">

            <h1 class="font-bold text-3xl">
                Registre-se
            </h1>

            <p>
                Registre-se
            </p>

            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">
                        Nome
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Seu nome"
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror"
                    >
                    @error('name')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">
                        E-mail
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="E-mail"
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">
                        Senha
                    </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="******"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                 <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">
                        Senha
                    </label>
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="******"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="bg-white p-2 border-2 mb-4">
                Cadastrar
                </button>

                <p class="text-center">
                    Já tem uma conta?
                    <a href="{{ route('login.index') }}" class="underline hover:opacity-50 transition">
                        Faça login
                    </a>
                </p>
            </form> 
        </section>
    <main>
</x-layout>