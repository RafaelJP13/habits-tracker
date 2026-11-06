<p> Olá, {{ $name }} </p>
<p>Seus Hábitos são: </p>

<ul>
    @foreach($habits as $habit)
        <li>{{ $habit }}</li>
    @endforeach
</ul>

