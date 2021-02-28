@include('head')
<body>
    <form method="post" action="{{route('login.do')}}">
    @csrf
        <label for="">Email:</label>
        <input type="email" name="email">

        <label for="">Senha:</label>
        <input type="password" name="senha">
        <input id="logar" type="submit">
    </form>

</body>
@include('footer')
