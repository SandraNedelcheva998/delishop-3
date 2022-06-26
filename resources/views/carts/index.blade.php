@extends ('layouts.products.app')

{{--@extends ('layouts.app')


@section ('content')--}}
    <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<h3>SHOPPING CART</h3>

<br />
<hr />

<div class="container mb-4">
    <div class="row">
        @if($cart->cartitems->count()==0)
            <div class="col-12">
                <h3 class="text-center text-muted">Your Shopping Cart is currently empty...</h3>
            </div>
        @else
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Edit Quantity</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--${} kazuva koj objekt od modelot se zema-->
                        @foreach($cart->cartitems as $cartitem)
                            <tr>
                            <td><img src="{{$cartitem->product->ProductImageURL}}" style="max-width:50px"/></td>
                            <td>{{$cartitem->product->ProductName}}</td>
                            <td>{{$cartitem->quantity}}</td>
                            <td>{{$cartitem->product->ProductPrice}}</td>

                            <td class="text-center">
                                <form action="/cartitems/{{$cartitem->id}}/edit" method="get">
                                    <div class="row">
                                        <input type="number"
                                               class="d-inline w-25 text-center"
                                               id="quantity"
                                               name="ItemQuantity"
                                               min="0"
                                               max="{{$cartitem->product->ProductStock}}"
                                               value="{{$cartitem->quantity}}"/>
                                        <button type="submit" class="d-inline btn btn-sm btn-primary"><i class="fa fa-edit"></i>Edit</button>

                                    </div>

                                </form>

                            </td>
                            <td>
                                <form action="/cartitems/{{$cartitem->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="6">Total amount: €{{$amount/100}}</td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                @if($cart->cartitems->count()>0)
                                    <form action="/charge" method="POST">
                                        @csrf
                                        <input type='hidden' value={{$amount}} name='amount' />
                                        <input type='hidden' value={{$currency}} name='currency' />
                                        <input type='hidden' value={{$description}} name='description' />
                                        <input type='hidden' value={{$cart->id}} name='cart_id' />
                                        <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_51LBe0zGabkBxIhLxNCTjMb9i49KkY1aoIMhThVS7MD79YlT4rS7qjl87UBxZoHusqkiddfHtZIHP7mQXR5gMpg1v007LhhapbJ"
                                            data-amount="{{$amount}}"
                                            data-name="Stripe Demo"
                                            data-description="{{$description}}"
                                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                            data-locale="auto"
                                            data-currency="{{$currency}}">
                                        </script>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
</div>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<hr />
</body>
