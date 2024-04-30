<h1>Criar Suporte</h1>

<a href="{{ route('supports.index') }}">Voltar</a>

<form action="{{ route('supports.store') }}" method="POST" id="formCadastrar">
    @csrf
    @method('POST')
    @include('admin.supports.partials.form', ['support' => null])
</form>
