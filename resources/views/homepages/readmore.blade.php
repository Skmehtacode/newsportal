@extends("homepages.base")
@section("content")
    <div class="container  mt-4">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('image/'.$news->image) }}" alt="{{ $news->image }}" class="card-img-top">
            </div>
            <div class="col-9">
                <h2 class="display-3">{{$news->post_title}}</h2>
                <small class="text-muted">{{$news->author}}</small>

                <p class="lead">{{$news->description}}</p>
            </div>
        </div>
    </div>
@endsection