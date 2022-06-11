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
                    <p class="lh-lg lead" style="text-align: justify">{{$news->description}}</p>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h4>Related News</h4>
                        <hr>
                    </div>
                    @foreach ($related_news as $new)
                    <div class="col-3">
                            <div class="card mb-3">
                                <img src="{{ asset('image/' . $new->image) }}" alt="{{ $new->image }}"
                                                style="height: 150px;object-fit:cover">

                                        <div class="card-body">
                                            <h3 class="fw-bold h6 small text-truncate">{{ $new->post_title }}</h3>
                                            <div class="row">
                                                <small>{{ $new->author }}</small>
                                            </div>
                                            <a href="{{ route('readmore', ['id' => $new->id]) }}"
                                                class="stretched-link"></a>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                   

               
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

                        @foreach ($categories as $item)
                            <a href="{{route('filter',['cat_id'=>$item->id])}}" class="list-group-item list-group-item-action">{{$item->category_title}}</a>
                        @endforeach

                    </div>
                    <h2 class="display-8 mt-3">{{$news->post_title}}</h2>   
                </div>  
            </div>    
        </div>    
    </div>
@endsection