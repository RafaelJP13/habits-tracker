<x-layout>
    
    <main class="py-10">
        <h1>Faça seu Login!</h1>

    <section class="mt-4">
        <form action="/login" method="POST">
            @csrf

           
             @error('email')
              <div>
                    <p class="text-red-500 text-xl mt-1">
                        {{ $message }}
                    </p>
                </div>
            @enderror
            <input
                type="email"
                name="email"
                placeholder="E-mail"
                class="bg-white p-2 border-2">
            <input
                type="password"
                name="password"
                placeholder="******"
                class="bg-white p-2 border-2">
            <button
                type="submit"
                class="bg-white p-2 border-2 mb-4"
            >Entrar
            </button>
        </form> 
    </section>
    <main>
</x-layout>