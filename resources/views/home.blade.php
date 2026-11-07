<x-layout>
    
    <main class="py-10">

        <h1>Veja seus hábitos ganharem vida</h1>
        @dd(auth()->user())

        @auth
            Bem vindo(a), {{ auth()->user()->name }}!
        @endauth

    </main>

</x-layout>