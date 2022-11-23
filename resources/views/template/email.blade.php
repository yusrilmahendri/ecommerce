<!DOCTYPE html>
<html>

<head>
	<title>My E-Commerce</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap-4.1.3/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
  @php
    $total = 0;
  @endphp
  <div class="container">
    <h1>Anda telah melakukan pemesanan: </h1>
      <table class="table">
        <thead>
          <th>#</th>
          <th>Nama Produk</th>
          <th>Harga Produk</th>
          <th>jumlah produk</th>
          <th>Sub Total</th>
        </thead>
        <tbody>
            @foreach($carts as $cart)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $cart->product->name }}</td>
                <td>{{ number_format($cart->product->price) }}</td>
                <td>{{ $cart->qty  }}</td>
                <td>{{ $cart->qty * $cart->product->price}}</td>
              </tr>

              @php
                $total += ($cart->qty * $cart->product->price)
              @endphp
            @endforeach
        </tbody>
      </table>
      	<h1>Total pemesanan : Rp {{number_format($cart->qty * $cart->product->price) }}</h1>
  </div>


  <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('bootstrap-4.1.3/dist/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>
