@extends('template.default')

@section('content')

<form method="post" action="{{route ('produtos.update', $produto->id)}}">
<input type="hidden" name="_method" value="PUT">

        <!-- Exibindo erros caso exista -->
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

    {{csrf_field()}}
    <div class="form-group">
        <label for="inputNome">Nome</label>
        <input type="text" class="form-control" name="nome" id="inputNome" value="{{$produto->nome}}">
 
        <label for="inputPreco">Preço</label>
        <input type="number" class="form-control" name="preco" id="inputPreco"  value="{{$produto->preco}}">

        <label for="inputMarca">Marca</label>
        <input type="text" class="form-control" name="marca" id="inputMarca"  value="{{$produto->marca}}">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="{{url()->previous()}}" class="btn btn-default">Cancelar</a>

</form>
@endsection