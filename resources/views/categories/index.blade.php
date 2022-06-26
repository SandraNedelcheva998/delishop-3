@extends ('layouts.categories.app')
{{--@extends ('layouts.app')--}}
{{--@extends ('layouts.products.app')--}}

@section ('content')
    <br />
    <hr />

    <section style="position: relative; z-index: 1; padding: 50px 0 50px; vertical-align: middle; text-align: center; background: rgb(255,169,0); background: radial-gradient(circle, rgba(255,169,0,1) 0%, rgba(252,130,70,1) 100%); margin-top: 20px;">
        <div class="container">
            <h6 href="#" class="text-muted">welcome to</h6>
            <h1 class="text-white">our deli shop site</h1>
            <ul class="breadcrumbs-custom-path"></ul>
        </div>
    </section>
    <hr />
    <h4 style="text-align:center; padding-bottom:20px;">What would you like to eat today?</h4>

    @foreach($allcategories as $category)
        <div class="col-md-4 col-xl-3" style="margin-bottom: 100px">
            <article class="event-default-wrap">
                <div class="event-default">
                    <figure class="event-default-image" style="width: 420px; height: 630px;">
                        <img src={{$category->CategoryImageUrl}} alt="" width="420" height="630" />
                    </figure>
                    <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="{{ route('categories.show', $category->id) }}" >See Products</a></div>
                </div>
                <div class="event-default-inner">
                    <h3><a href="{{ route('categories.show', $category->id) }}" class = "event-default-title">{{$category->CategoryName}}</a></h3>
                </div>
            </article>
        </div>
    @endforeach
@endsection
