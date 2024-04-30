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
                    <a href="{{ route('supports.show', ['support' => $support]) }}">
                        {{ $support->subject }}
                    </a>
                </td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.edit', ['support' => $support]) }}">
                        Editar
                    </a>
                </td>
                <td>
                    <form action="{{ route('supports.destroy', ['support' => $support]) }}" method="POST"
                        id="formDeletar">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remover</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
