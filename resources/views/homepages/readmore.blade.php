@extends("homepages.base")
@section("content")
    <div class="container  mt-4">
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <h2 class="display-8 mt-3">{{$news->post_title}}</h2>
                    <small class="text-muted mt-3">{{$news->author}}</small>
                </div>
                <div class="row mt-4">
                    <img src="{{ asset('image/'.$news->image) }}" alt="{{ $news->image }}" class="card-img-top " style="width : 750px; height : 400px">
                </div>
                <div class="row mt-4">
                    <p class="small fs-6 lh-lg">{{$news->description}}</p>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="row">
                    <form action="{{route('search')}}" method="GET" class="d-flex">
                        <input type="text" name="search" placeholder="search here" class="form-control" size="90">
                        <input type="submit" class="btn btn-dark">
                    </form>
                    <div class="list-group mt-3">
                        <li class="list-group-item active">Category</li>
                        <a href="" class="list-group-item list-group-item-action">POLITICS</a>
                        <a href="" class="list-group-item list-group-item-action">SOCIAL MEDIA</a>
                        <a href="" class="list-group-item list-group-item-action">BIHAR</a>
                        <a href="" class="list-group-item list-group-item-action">CRIME</a>
                        <a href="" class="list-group-item list-group-item-action">SPORTS</a>
                    </div>
                    <h2 class="display-8 mt-3">{{$news->post_title}}</h2>   
                </div>  
            </div>    
        </div>    
    </div>
@endsection