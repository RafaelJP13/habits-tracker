<header class="bg-white border-b border-2 flex items-center justify-between p-4">
    {{-- LOGO --}}
    <div class="flex items-center gap-4">
        <a href="{{ route("habits.index") }}" class="habit-btn habit-shadow px-2 py-1 bg-habit-orange">
            RF
        </a>
        <p>
            Habit Tracker
        </p>
    </div>
    {{-- GITHUB --}}
    <div>
    
    @auth
        <form 
            class="inline" 
            action="{{ route('auth.logout') }}" 
            method="POST" 
            class="bg-white p-2 border-2">
            @csrf
            <button type="submit" class="habit-shadow habit-btn p-2">
                Sair
            </button>
        </form>

    @endauth

    @guest
    <div class="flex gap-2">
     <a href="{{ route('auth.register') }}" class="p-2 habit-shadow habit-btn">
            Cadastrar
        </a> 
        <a href="{{ route('auth.login') }}" class="p-2 habit-shadow bg-habit-orange habit-btn">
            Login
        </a>  
    </div>
    @endguest
    </div>
</header>