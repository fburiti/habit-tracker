<h1> Bem vindo(a), você está na página home</h1>

<p>

  Olá, {{ $name }}

</p>

<p>
Seus hábitos são:

@foreach ($habits as $itens)

<ul>
<li>{{ $itens }}</li>
</ul>

@endforeach
</p>

@auth
  <p>Você está logado</p>
@endauth

@guest
   <p>Você não está logado</p>
@endguest