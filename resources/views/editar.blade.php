@extends('plantilla')
@section('titulo')
    editar
@endsection

@section('content')
    <h2>editar casals</h2>
    @if (session('status'))
    <p id="status">{{session('status')}}</p>
@endif
    @foreach ($todos as $todo)
    <form action="{{route('actcasal', $todo->id)}}" method="post">
        @csrf @method('PATCH')
        <label for="nom">Nom
            <input type="text" name="nom" value="{{$todo->nom}}" required>
        </label><br>
        <label for="data_inici">Data inici
            <input type="date" name="data_inici" value="{{$todo->data_inici}}" required>
        </label><br>
        <label for="data_final">Data final
            <input type="date" name="data_final" value="{{$todo->data_final}}" required>
        </label><br>
        <label for="n_places">Numero de places
            <input type="number" name="n_places" value="{{$todo->n_places}}" required>
        </label><br>
        @endforeach
        <label for="">Ciutat</label>
        <select name="id_ciutat" id="">
            @foreach ($todas as $toda)
            <option required {{"$toda->id"==$todo->id_ciudad ? "selected='true'" : ""}} value="{{$toda->id}}">{{$toda->nom}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Actualizar casal">
    </form>
@endsection