<h1>Listagem Suporte</h1>

<a href="{{ route('supports.create') }}">Novo</a>

<table>
    <caption></caption>
    <thead>
        <tr>
            <th>Assunto</th>
            <th>Status</th>
            <th>Descrição</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>
                    <a href="{{ route('supports.show', ['id' => $support->id]) }}">
                        {{ $support->subject }}
                    </a>
                </td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.edit', ['id' => $support->id]) }}">
                        Editar
                    </a>
                </td>
                <td>
                    <form action="{{ route('supports.destroy', ['id' => $support->id]) }}" method="POST" id="formDeletar">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
