<!DOCTYPE html>
<html>
    @include('head')
<body>
<a href="{{url('Cproduto')}}">Cadastrar novo produto</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome do produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Imagem</th>
      <th scope="col">Categoria</th>
      <th scope="col">Status</th>
      <th scope="col">Operação</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produto as $produto)
   
     <tr>
        <td>{{$produto->cd_produto}}</td>
        <td>{{$produto->nm_produto}}</td>
        <td>{{$produto->vl_produto}}</td>
        <td>{{$produto->nm_categoria}}</td>
        <td>{{$produto->sg_status}}</td>
        <td>
          <a href="url('/Eproduto/{{$produto->cd_produto}}')">
           <button class="btn btn-primary">Visualizar / Editar</button>
           </a>
          <a href=""> 
           <button class="btn btn-danger">Deletar</button>
          </a>
        </td>
     </tr>
    @endforeach
  </tbody>
</table>
</body>
@include('footer')
</html>

