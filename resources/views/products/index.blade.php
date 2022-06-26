
@extends ('layouts.products.app')
{{--@extends ('layouts.app')--}}


@section ('content')
    <br />
    <hr  class="mb-0"/>



    <div class="container mb-5 pb-5">
        <h1>{{$title}}</h1>
        <hr />
        <div class="row row-cols-3 mt-0">
            @foreach( $products as $product)
            <div class="col pb-5">
                <div class="card">
                    <img src={{$product->ProductImageURL}} class="card-img-top" width="300" height="500" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text" style="height:40px; overflow:hidden; text-overflow:ellipsis">{{$product->ProductName}}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Product Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br />
    <br />
@endsection
