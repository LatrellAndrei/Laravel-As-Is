
@include('partials.header')
<x-nav/>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">EMail</th>
      <th scope="col">Address</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @if(Session::has('success'))
    {{ Session::get('success') }}
  @endif
  @foreach($customers as $customer)
     
  <tbody>
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->address}}</td>
      <td><a href="#">Edit</a></td>
      <td><a href="delete/{{$customer->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer')