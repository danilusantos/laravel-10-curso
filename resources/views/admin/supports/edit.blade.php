<h1>Editar Suporte</h1>

<a href="{{ route('supports.index') }}">Voltar</a>

<form action="{{ route('supports.update', ['id' => $support->id]) }}" method="POST" id="formCadastrar">
    @csrf
    @method('PUT')
    @include('admin.supports.partials.form')
</form>
