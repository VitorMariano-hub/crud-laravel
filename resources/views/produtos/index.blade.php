@extends('template.default')

@section('content')


<table class="table table-borderless">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Marca</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
<tbody>
    @foreach($produtos as $produto)
    
        <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->nome}}</td>
            <td>R$ {{number_format($produto->preco, 2, ',', '.')}}</td>
            <td>{{$produto->marca}}</td>

            <td>
                <a href="{{route('produtos.edit', $produto->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="{{route('produtos.delete', $produto->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                <a href="{{route('produtos.show', $produto->id)}}"><i class="glyphicon glyphicon-zoom-in"></i></a>

            </td>
        </tr>
    @endforeach
</tbody>
</table>
<div class="container">
    <div align="center" class="row">
        {{ $produtos->links() }}
    </div>
</div>
@endsection