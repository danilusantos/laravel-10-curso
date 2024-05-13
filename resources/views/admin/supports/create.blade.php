<h1>Criar Suporte</h1>

<a href="{{ route('supports.index') }}">Voltar</a>

<x-alert />

<form action="{{ route('supports.store') }}" method="POST" id="formCadastrar">
    @method('POST')
    @include('admin.supports.partials.form', ['support' => null])
</form>
