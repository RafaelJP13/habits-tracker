<x-layout>
    
    <main class="py-10">

    <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mb-10">

        <h1 class="font-bold text-3xl">Faça seu Login!</h1>

        <p>
            Insira seus dados para acessar
        </p>

        <form action="{{ route('login.index') }}" method="POST" class="flex flex-col">
            @csrf

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

            <button
                type="submit"
                class="bg-white p-2 border-2 mb-4"
            >Entrar
            </button>
        </form> 
    </section>
    <main>
</x-layout>