@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Lista de cards</span>
            <span class="ms-auto">
                <a href="{{route('user.index')}}" class="btn btn-success btn-sm"> Listar Decks</a>
            </span>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Description card</dt>
                <dd class="col-sm-9">Esse card é sobre a palavra GET.</dd>
            </dl>
        </div>

    </div>

@endsection('content')
