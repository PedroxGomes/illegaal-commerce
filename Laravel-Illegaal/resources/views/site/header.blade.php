

<div class="topnav">
  <div class="botoes-total">
<a class="botoes" href="sobre-integrador.html">Sobre nós</a>
<a class="botoes" href="contato">Contato</a>
<a class="botoes" href="produtos">Nossos Produtos</a>
<a class="botoes" href="/">Home</a>
</div>
<div class="login-container">
  @guest
 <a class="login-entrar" href="{{ route('login') }}">Entrar</a>
  @if (Route::has('register'))
  <a class="login-entrar" href="{{ route('register') }}">Cadastrar</a>
  @endif
  @else
 <a class="login-entrar" href="register">{{ Auth::user()->name }}</a>
 <a class="login-entrar" href="{{ route('logout') }}"
 onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
 {{ __('Logout') }}
 </a>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 @csrf
 </form>

 @endguest


</div>
</div>
