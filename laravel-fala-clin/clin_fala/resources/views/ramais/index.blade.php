<x-layout title="Lista de Ramais">
    <h1>Lista de Ramais</h1>

    @if (session('mensagem.sucesso'))
        <div class="alert alert-success">
            {{ session('mensagem.sucesso') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Local</th>
                <th>Setor</th>
                <th>Ramal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ramais as $ramal)
                <tr>
                    <td>{{ $ramal->nome }}</td>
                    <td>{{ $ramal->local }}</td>
                    <td>{{ $ramal->setor }}</td>
                    <td>{{ $ramal->ramal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
