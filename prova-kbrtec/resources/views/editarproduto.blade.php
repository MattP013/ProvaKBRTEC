<html>
include('head')
<body>
    <form name="formCProduto" method="post" action="{{url()}}">
        @crsf
        @foreach($_produto as $produto)
        <div class="form-group">
            <label for="exampleInputEmail1">Nome do produto:</label>
            <input type="text" class="form-control" id="" value="{{produto->nm_produto}}" name="nmproduto" placeholder="Ex: Feijão">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Preço:</label>
            <input type="text" class="form-control" value="{{produto->nm_produto}}" id="vlproduto" name="vlproduto" placeholder="Ex: 0.00">
        </div>
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Categoria:</label>
            </div>
            <select name="categoria" id="categoria" class="custom-select" id="inputGroupSelect01">
                <option selected>{{produto->nm_categoria}}</option>
                <option value="{{$categoria->cd_categoria}}">{{$categoria->nm_categoria}}</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <img src="storage/app/public/produtos/{{produto->ds_imagem_produto}}" class="rounded float-right" alt="...">
            <div class="input-group-prepend">
                <span class="input-group-text">Nova imagem:</span>
            </div>
            <div class="custom-file">
                <input type="file" name="imgproduto" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Arquivo</label>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Status:</label>
            
        @if(produto->sg_status == 1)
            <label><input type="radio" value="1" name="sgstatus" checked>Ativo</label>
            <label><input type="radio" value="0" name="sgstatus">Inativo</label>
        @else
            <label><input type="radio" value="1" name="sgstatus" >Ativo</label>
            <label><input type="radio" value="0" name="sgstatus" checked> Inativo</label>
        @endif
        @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</body>
include('footer')
<script>
    $(document).ready(function(){
		$('#vlproduto').mask('000.000.00', {reverse: true});
	});
</script>
</html>