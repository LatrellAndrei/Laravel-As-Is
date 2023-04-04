@include('partials.header')
 <center><img src="spotifylogo.jpg" width="250" height="150" > </center>

<h5>Fill the forms to add a new record</h5>
<form action="/saveCustomer" method="POST">
    @csrf
    
 
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