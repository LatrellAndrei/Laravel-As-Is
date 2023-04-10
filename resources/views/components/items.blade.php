<head>
  <link rel="stylesheet" href="{{ asset('custom.css') }}">
</head>
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href={{"/"}}>Customer Records</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href={{"/user"}}>Users</a>
    </li>

    

    <li class="nav-item">
      <a class="nav-link" href={{"/addCustomer"}}>Add Customer</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href={{"/product"}}>Product</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href={{"/addProduct"}}>Add Products</a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href={{"/logout"}}>Logout</a>
    </li>
    
  </ul>