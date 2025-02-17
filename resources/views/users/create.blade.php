@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Criar seus Decks</span>
            <span class="ms-auto">
                <a href="{{route('user.index')}}" class="btn btn-success btn-sm"> Listar Decks</a>
            </span>
        </div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="title" class="form-label">Titulo</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Titulo do Deck">
                </div>
            </form>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
                
            
        </div>

    </div>

@endsection('content')
