<?php

namespace App\Http\Controllers;
?>
@extends('plantilla')
@section('titulo')
    home
@endsection

@section('content')
<h2>Gestio de casals</h2>
<a href="{{route('crearcasal')}}"><button>Afegir</button></a>
    <table>
        <tr>
            <td>Nom</td>
            <td>Data inici</td>
            <td>data final</td>
            <td>numero places</td>
            <td>ciutat</td>
            <td>editar</td>
            <td>eliminar</td>
        </tr>
        @foreach ($todos as $todo)
            <tr>
                <td>{{$todo->nom}}</td>
                <td>{{$todo->data_inici}}</td>
                <td>{{$todo->data_final}}</td>
                <td>{{$todo->n_places}}</td>
                <td>{{CasalController::devolvernombre($todo->id_ciutat)}}</td>
                <td><a href="{{route('editar', $todo->id)}}"><button>Editar</button></a></td>
                <td>
                    <form action="{{route('eliminar', $todo->id)}}" method="post">
                        @csrf @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr> 
        @endforeach
    </table>
@endsection