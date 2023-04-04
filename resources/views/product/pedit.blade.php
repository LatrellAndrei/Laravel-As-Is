@include('partials.header')


<h5>Edit Record</h5>
<form action="/updateCustomer" method="POST">
    @csrf
    
    <input type="hidden" id="id" name="id" value="{{$customer->id}}"> 
 
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
  </form>