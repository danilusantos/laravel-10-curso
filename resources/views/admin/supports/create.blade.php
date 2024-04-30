<h1>Criar Suporte</h1>

<form action="{{ route('supports.store') }}" method="POST" id="formCadastrar">
    @csrf
    @method('POST')
    <input type="text" placeholder="Assunto" name="subject" required>
    <select name="status" id="status" required>
        <option value="">Selecione</option>
        <option value="a">Ativo</option>
        <option value="p">Pendente</option>
        <option value="c">Concluído</option>
    </select>
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição" required></textarea>

    <button type="submit">Salvar</button>
</form>
