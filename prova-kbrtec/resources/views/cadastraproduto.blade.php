<!DOCTYPE html>
<html>
include('head')
<body>
    <h1 class="text-center">Cadastro de Produto</h1>
    @if(isset($errors) && count($errors)>0)
        <div class="card">
            <div class="card-body text-center alert-danger">
                @foreach($errors->all() as $_errors)
                    {{$_errors}}<br>
                @endforeach
            </div>
        </div>
    @endif
    <form name="formCProduto" method="post" enctype="multipart/form-data" action="{{route(Cproduto)}}">
        @crsf
        <div class="form-group">
            <label for="exampleInputEmail1">Nome do produto:</label>
            <input type="text" class="form-control" id="" name="nmproduto" placeholder="Ex: Feijão">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Preço:</label>
            <input type="text" class="form-control" id="vlproduto" name="vlproduto" placeholder="Ex: 0.00">
        </div>
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Categoria:</label>
            </div>
            <select name="categoria" id="categoria" class="custom-select" id="inputGroupSelect01">
                <option selected>Escolha uma categoria...</option>
                @foreach($_categoria as $categoria)
                    <option value="{{$categoria->cd_categoria}}">{{$categoria->nm_categoria}}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Escolhe uma imagem:</span>
            </div>
            <div class="custom-file">
                <input type="file" name="imgproduto" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Arquivo</label>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</body>
include('footer')
<script>
    $(document).ready(function(){
		$('#vlproduto').mask('000.000.00', {reverse: true});
	});
</script>
</html>