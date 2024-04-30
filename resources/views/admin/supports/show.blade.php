<h1>Suporte</h1>

<a href="{{ route('supports.index') }}">Listagem</a>

<table>
    <caption></caption>
    <thead>
        <tr>
            <th>Assunto</th>
            <th>Status</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $support->subject }}</td>
            <td>{{ $support->status }}</td>
            <td>{{ $support->body }}</td>
        </tr>
    </tbody>
</table>
