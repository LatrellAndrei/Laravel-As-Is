@include('partials.header')


<h5>Edit Product</h5>
<form action="/update" method="POST">
    @csrf
    
    <input type="hidden" id="id" name="id" value="{{$product->id}}"> 
 
<div class="mb-3">
      <label for="prodName" class="form-label">Product Name</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      value="{{$product->prodName}}"
      name="prodName">
    </div>


    <div class="mb-3">
      <label for="prodQuantity" class="form-label">Product Quantity</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="prodQuantity"
      value="{{$product->prodQuantity}}">
    </div>



    <div class="mb-3">
      <label for="prodPrice" class="form-label">Prod Price</label>
      <input 
      type="text" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="prodPrice"
      value="{{$product->prodPrice}}">
    </div>


    
    
       

    <button type="submit" class="btn btn-info">Submit</button>
    <a href={{"/product"}} class="btn btn-info">Back</a>
  </form>