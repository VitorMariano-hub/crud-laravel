@extends('template.default')

@section('content')



<form method="post" action="{{route ('produtos.destroy', $produto->id) }}">
<input type="hidden" name="_method" value="DELETE">
{{csrf_field()}}    
<div class="col-md-12">
    <h4>Tem certeza que deseja remover o produto?</h4>
    <p>Nome: {{$produto->nome}}</p>
    <p>Marca: {{$produto->marca}}</p>
    <p>Preço: R$ {{number_format($produto->preco, 2, ',', '.')}}</p>
    <button type="submit" class="btn btn-danger">Remover</button>
    <a href="{{route('produtos.index')}}" class="btn btn-default">Cancelar</a>

</div>

</form>

@endsection