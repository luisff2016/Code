<h1>Fornecedor/Index</h1>

@php
/*
    if(){ }elseif(){ }else{ }
    if(isset($variavel)) {} // retornar true se a variavel estiver definida
    if(empty($variavel)) {} // retornar true se a variavel estiver vazia
    */
@endphp
<br>
<!-- comando -->
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h2>Existem alguns fornecedores cadastrados</h2>
@elseif(count($fornecedores) > 10)
    <h2>Existem mais de 10 fornecedores cadastrados</h2>
@else
    <h2>Ainda não existem fornecedores cadastrados</h2>
@endif
<br>
<!-- usando isset para verificar a declaracao de variaveis -->
@isset($fornecedores)
    <hr>
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        <h3>Fornecedor[<?= $i ?>]: {{ $fornecedores[$i]['nome'] }}</h3>
        <h4>
            <!-- unless executa se o retorno da condicao for falso -->
            @unless($fornecedores[$i]['status'] == 'S')
                Fornecedor[<?= $i ?>] Inativo.
            @endunless
            <br>
            @if (!!($fornecedores[$i]['status'] == 'S'))
                Fornecedor com cadastro ativo!
            @else
                Fornecedor Inativo
            @endif
            <br>
            @isset($fornecedores[$i]['cnpj'])
                CNPJ[<?= $i ?>]: {{ $fornecedores[$i]['cnpj'] }}
                @empty($fornecedores[$i]['cnpj'])
                    - CNPJ vazio.
                @endempty
            @endisset
            <br>
            <!-- usando o valor default: caso a $var seja nula ou nao esteja definida -->
            Usando default=> CNPJ[<?= $i ?>]: {{ $fornecedores[$i]['cnpj'] ?? 'CNPJ Invalido' }}
            <br>
            <!-- imprimir usando switch -->
            Telefone[<?= $i ?>]: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
            @switch(isset($fornecedores[$i]['ddd']))
                @case ('11')
                    São Paulo - SP
                @break

                @case ('79')
                    Sergipe - SE
                @break

                @case ('85')
                    Fortaleza - CE
                @break

                @case ('32')
                    Juiz de Fora - MG
                @break

                @default
                    CEP não identificado
            @endswitch
            <hr>

        </h4>
    @endfor
    <!-- usando laço while -->
    @php $j = 0 @endphp
    @while (isset($fornecedores[$j]))
        Fornecedor: {{ $fornecedores[$j]['nome'] }}
        <br>
        Status: {{ $fornecedores[$j]['status'] }}
        <br>
        @php $j++ @endphp
    @endwhile
    <hr>
    <!-- usando laço foreatch -->
    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
    @endforeach
    <hr>
    <!-- usando laço forelse -->
    @forelse ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
    @empty
        <h2>Não existem fornecedores cadastrados!!!</h2>
    @endforelse
@endisset
<br>
<hr>
Final dos fornecedores

{{-- para imprimir um array. Apos a impressao o codigo abaixo nao roda! --}}
{{-- @dd($fornecedores) --}}
