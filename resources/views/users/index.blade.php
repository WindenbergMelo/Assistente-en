@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Listar Decks</span>
            <span class="ms-auto">
                <a href="{{route('create.deck')}}" class="btn btn-success btn-sm"> Cadastrar</a>
            </span>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Cards</th>
                    <th scope="col">Média</th> {{-- Nessa coluna irá ser feito o calculo de acertos por card --}}
                    <th scope="col">Revisão</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Inglês</th>
                    <td>3</td>
                    <td>3/3</td>
                    <td>12/02/2025</td>
                    <td>
                        <a href="{{route('show.cards', ['deck' => 1])}}" class="btn btn-primary btn-sm">visualizar</a>
                        <a href="{{route('edit.deck', ['deck' => 1])}}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="#" class="d-inline">
                          @csrf
                          @method('get'){{-- Alterar de get para delete --}}

                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tme certeza de que deseja cancelar esse registro')">Apagar</button>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <th>Espanhol</th>
                    <td>6</td>
                    <td>5/6</td>
                    <td>12/02/2025</td>
                    <td>
                        <a href="{{route('show.cards', ['deck' => 1])}}" class="btn btn-primary btn-sm">visualizar</a>
                        <a href="{{route('edit.deck', ['deck' => 1])}}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="#" class="d-inline">
                          @csrf
                          @method('get'){{-- Alterar de get para delete --}}

                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tme certeza de que deseja cancelar esse registro')">Apagar</button>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <th>Italiano</th>
                    <td>9</td>
                    <td>6/9</td>
                    <td>12/02/2025</td>
                    <td>
                        <a href="{{route('show.cards', ['deck' => 1])}}" class="btn btn-primary btn-sm">visualizar</a>
                        <a href="{{route('edit.deck', ['deck' => 1])}}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="#" class="d-inline">
                          @csrf
                          @method('get'){{-- Alterar de get para delete --}}

                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tme certeza de que deseja cancelar esse registro')">Apagar</button>
                        </form>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
        
    </div>
@endsection
