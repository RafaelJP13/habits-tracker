<x-layout>
    
    <main class="py-10 ml-2 min-h-[calc(100vh-160px)] px-4">    

        <x-navbar />

        @session('success')
            <p class="bg-green-100 border border-green-100 block mt-4 max-w-[200px] ml-2 mt-8">
                {{session('success')}}
            </p>
        @endsession

        <div>
            <h2 class="text-lg mt-8 mb-4">
                {{ date('d/M/Y') }}
            </h2>

            <ul class="flex flex-col gap-2">
                @forelse($habits as $item)
                <li class="habit-shadow p-2 bg-[#FFDAAC]">
                    <div class="flex gap-2 items-center">
                        <input type="checkbox" class="w-6 h-6 {{ $item->is_completed ? 'checked' : '' }}" disabled/>
                        <p class="font-bold text-LG">
                            {{ $item->name }}
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

<a class=" p-2 cursor-pointer" href="{{ route('habits.edit', $item->id) }}">
                            <x-icons.pencil/>
                        </a>
                        <form action="{{ route('habits.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" text-white p-2 cursor-pointer">
                                <x-icons.trash />
                            </button>
                        </form>