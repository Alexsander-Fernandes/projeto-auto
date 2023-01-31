@extends('template.dashboard')

    @section('title')
     <h1 class="m-0">Oficinas Cadastradas</h1>
    @endsection

    @section('conteudo-principal')
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Oficina</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Novo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        </table>

    @endsection



