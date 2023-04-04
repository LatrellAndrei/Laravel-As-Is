@include('partials.header')
<x-nav/>
<table class="table table-info table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th>

      </th>
    </tr>
  </thead>
  @if(Session::has('success'))
  <div class="alert alert-danger" role="alert">
  {{ Session::get('success') }}
</div>
    
  @endif
  @foreach($products as $product)
     
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->prodName}}</td>
      <td>{{$product->prodQuantity}}</td>
      <td>{{$product->prodPrice}}</td>
      <td><a href="edit/{{$product->id}}" class="btn btn-primary">Edit</a></td>
      <td><a href="delete/{{$product->id}}" class="btn btn-danger">Delete</a></td>
    
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer')