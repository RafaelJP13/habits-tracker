<x-layout>
    
    <main class="py-10 ml-2">    

        <h1 class="font-bold text-4xl text-center">
            Dashboard
        </h1>

        <a href="{{ route('habit.create') }}" class="p-4 ml-2 bg-white font-bold border border-dark">
            Criar Hábito
        </a>
        @session('success')
            <p class="bg-green-100 border border-green-100 block mt-4 max-w-[200px] ml-2 mt-8">
                {{session('success')}}
            </p>
        @endsession

        <div class="mt-8">
            <h2 text-xl mt-4>
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
                        <form action="{{ route('habit.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bfg-red- text-white p-2 cursor-pointer">
                                <x-icons.trash />
                            </button>
                        </form>
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