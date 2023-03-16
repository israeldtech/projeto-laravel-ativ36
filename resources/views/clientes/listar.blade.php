@extends("layouts.main")

@section('title', 'Listar Clientes ')
@section('content')

<section class="listar-clientes">
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col" class="text-center" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr class="text-center">
                <th scope="row">{{$cliente->id}}</th>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->cpf}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->datanasc}}</td>
                <td><a href="#" class="btn btn-warning">Alterar</a></td>
                <td><a href="#" class="btn btn-danger">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection
