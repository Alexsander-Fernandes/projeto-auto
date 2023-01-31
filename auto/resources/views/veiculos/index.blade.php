@extends('template.dashboard')

@section('title')
 <h1 class="m-0">Veículos Cadastrados</h1>
@endsection

@section('conteudo-principal')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Ano Fabricação</th>
                <th scope="col">Modelo</th>
                <th scope="col">Marca</th>
                <th scope="col">Cor</th>
                <th scope="col">km</th>

                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($veiculos as $veiculo)
                <tr>
                    <td><a href="#">{{ $veiculo->ano}}</a></td>
                    <td>{{ $veiculo->modelo}}</td>
                    <td>{{ $veiculo->marca}}</td>
                    <td>{{ $veiculo->cor}}</td>
                    <td>{{ $veiculo->km}}</td>
                    <td>
                        <a class="btn btn-primary" href="#">Atualizar</a>

                        <form action="#" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Excluir</button>
                        </form>
                    </td>
                 </tr>
             @empty
                <tr>
                    <td></td>
                    <td>Nenhum Veículo Cadastrado</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforelse
        </tbody>
    </table>
        {{ $veiculos->links() }}
        <a class="btn btn-success" href="{{route('veiculos.create')}}">Novo Veículo</a>

@endsection



