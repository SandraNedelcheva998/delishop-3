@extends ('layouts.products.app')

@section ('content')

    <br />

    <div>

        <div class="container pt-4 pb-5">
            <h1>{{$product->ProductName}}</h1>
            <div class="row row-col-2">
                <div class="col">
                    <img style="border: 1px solid lightgrey;" width="683px" height="1024px" src={{$product->ProductImageURL}} />
                </div>
                <div class="col">
                    <h3 class="mt-0">Description</h3>
                    <p>{{$product->ProductDescription}}</p>
                    <br />
                    <h3>Ingredients</h3>
                    <ul>
                        @foreach($ingredients as $ingredient)
                        <li>{{$ingredient}}</li>
                        @endforeach
                    </ul>

                    <br />
                    <h3>Price</h3>
                    <a class="btn btn-outline-info mr-2">{{$product->ProductPrice}} EUR</a>

                    <br />
                    <br />
                    <h3>Categories</h3>
                    @foreach($categories as $category)
                        <a href="{{ route('categories.show', $category->id)}}" class="btn btn-warning mr-2">{{$category->CategoryName}}</a>
                    @endforeach

                    <br />
                    <br />


                    <h3>Add to Cart</h3>
                    @if($product->ProductStock==0)
                        <h5>Product currently out of stock</h5>
                    @else
                        <form action="/carts" method="post">
                            <div class="form-horizontal">
                                <!-- th:object se dodava za da se vratat vrednostite od formata preku Thymeleaf, namesto preku "name" atributute, zaradi validacija vo controllerot -->
                                <!-- th:field go povrzuva sekoe pole od formata so th:object-->
                                <input type="text" hidden="hidden" name="ProductId" value={{$product->id}}>
                                <div class="form-group">
                                    <label for="quantity" class="control-label col-md-4">Item quantity</label>
                                    <!--th:value se koristi se populacija na polinjata so vrednostite na objektot, pri "edit"-->
                                    <input type="number"
                                           class="form-control"
                                           id="quantity"
                                           name="ItemQuantity"
                                           min="1"
                                           max="{{$product->ProductStock}}"
                                           value="1"
                                           placeholder="Enter Quantity"/>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" value="ADD TO SHOPPING CART" class="btn btn-primary" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif

                    {{--<br />

                    <div th:if="${param.message}">
                        <h5 class="text-info btn btn-outline-info" th:text="${param.message}"></h5>
                    </div>
                    <div th:if="${param.error}">
                        <h5 class="text-danger btn btn-outline-danger" th:text="${param.error}"></h5>
                    </div>--}}

                </div>
            </div>
            <br />
            <br />

            <h3>Comments:</h3>
            @if($product->comments==null)
                <h4>There are no comments on this product yet.</h4>
            @else
                @foreach($product->comments as $comment)
                    <div class="row">
                        <div class="col">
                            <div class="card border-light mb-3">
                                <div class="card-header">{{$comment->Username}} <span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-calendar-clock"></span><span >{{$comment->createDate}}</span></div>
                                <div class="card-body">
                                    <h5 class="card-title">Rating: {{$comment->CommentRating}}</h5>
                                    <p class="card-text">{{$comment->FullComment}}</p>
                                   {{-- <a th:href="@{/comments/delete/{id}(id=${comment.getCommentId()})}" type="button" class="btn btn btn-danger">Delete</a>
                                    <a th:href="@{/comments/edit/{id}(id=${comment.getCommentId()})}" type="button" class="btn btn btn-primary">Edit</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


            <!-- Button trigger modal -->
            @if(Auth::check())
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Add Comment
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLongTitle">Add comment</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <form action="/products/{{$product->id}}/comments" method="post" >
                                    <input type="text" hidden="hidden" name="ProductId" value={{$product->id}}>
                                    <input type="text" hidden="hidden" name="Username" value={{auth()->user()->name}}>
                                    <label>Comment:</label>
                                    <textarea type="text" class="form-control" rows="3" id="commentBody" name="commentBody"></textarea>
                                    <br />
                                    <label>Rating:</label>
                                    <br />
                                    <input class="form-control" type="number" min="1" max="5" id="Rating" name="Rating" />
                                    <br />
                                    <hr />
                                    <input type="submit" class="btn btn-success float-right" value="Save Comment" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <h4 class="text-left text-muted">Only registered users can comment</h4>
            @endif
            <br />
            <br />

        </div>
    </div>
@endsection
