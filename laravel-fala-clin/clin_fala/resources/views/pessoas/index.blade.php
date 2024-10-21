<x-layout title="Lista de Pessoas e Ramais">
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
            @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->local }}</td>
                    <td>{{ $pessoa->setor }}</td>
                    <td>{{ $pessoa->ramal ? $pessoa->ramal->ramal : 'Nenhum ramal associado' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
