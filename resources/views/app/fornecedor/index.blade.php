<h1>Fornecedor</h1>

@isset($fornecedores)

    @forelse ($fornecedores as $i => $fornecedor) 
        @if ($loop->first)
            Primeira iteração.
        @endif
        <br>
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido.' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->last)
            Última iteração.
            <h1> Total de registros: {{ $loop->count }} </h1>
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset