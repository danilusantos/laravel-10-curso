<h1>Listagem Suporte</h1>

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
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td> - </td>
            </tr>
        @endforeach
    </tbody>
</table>
