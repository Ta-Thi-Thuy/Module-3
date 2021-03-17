<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/calculator" method="post">
    @csrf
    <p>
    <input type="text" name="product" placeholder="Mo ta san pham">
    </p>
    <p>
        <input type="number" name="price" placeholder="Gia niem yet">
    </p>
    <p>
        <input type="number" name="discount" placeholder="Ty le chiet khau">
    </p>

    <p>
       <button type="submit"> Calculator Discount</button>
    </p>
</form>
@if(!empty($discount_amount) && !empty($discount_price))
    <label>Discount amount: {{ $discount_amount }}</label>
    <label>Discount price:  {{ $discount_price }}</label>

@endif
</body>
</html>
