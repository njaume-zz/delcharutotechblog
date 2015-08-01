@extends('blog')

@section('content')

</br>
<div class="container">
<table class="table">
        <thead>
            <th>algo</th>
            <th>algo</th>
            <th>algo</th>
            <th>algo</th>
            <th> - </th>
        </thead>
        @foreach ($post as $u)
        <tbody>
            <td>{{$u->id}}</td>
            <td>{{$u->tittle}}</td>
            <td>{{$u->description}}</td>
            <td>{{$u->body}}</td>
            <td>
            
            
            <!-- ya me hace de una la indexacion del us con su id corresp, y eso se lo paso a usuario.editar -->
        </td>
        </tbody>
        @endforeach


    </table>
</div>

@endsection