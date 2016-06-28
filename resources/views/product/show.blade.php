
<h1> {{ $product->name }}</h1>

so ver o editar, se seguir a lógica do método boot:
<br />
@can('show-product' , $product)
    <a href="">voce pode editar</a>
@endcan
