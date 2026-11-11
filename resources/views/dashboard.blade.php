<x-layout>
    
    <main class="py-10">    

        <h1>
            Dashboard
        </h1>

        <p>
            Bem vindo(a), {{ auth()->user()->name }}
        </p>

        <div text-xl mt-4>
            <h2>
                Listagem dos Hábitos
            </h2>

            <ul class="flex flex-col gap-2">
                @forelse($habits as $item)
                <li class="pl-4">
                    <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl">
                            - {{ $item->name }}
                        </p>
                        <p>
                            [{{$item->habitLogs->count() }}]
                        </p>
                    </div>
                </li>
                @empty
                <p>
                    Nenhum hábito cadastrado ainda.
                </p>
                <a href="/habito/cadastrar" class="bg-white p-2 border-2">
                    Cadastre-se um novo hábito
                </a>
                @endforelse
            </ul>   
    </main>

</x-layout>