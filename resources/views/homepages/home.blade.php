@extends('homepages/base')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col-lg-12">
                        @foreach ($news as $new)
                            <div class="card mb-3">

                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <img src="{{ asset('image/' . $new->image) }}" alt=""
                                                style="height: 250px;object-fit:cover">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h3 class="fw-bold">{{ $new->post_title }}</h3>
                                            <div class="row">
                                                <h4>{{ $new->author }}</h4>
                                            </div>
                                            <p class="small">{{ substr($new->description,0,200) }}.....</p>
                                            <a href="{{ route('readmore', ['id' => $new->id]) }}"
                                                class="btn btn-info">Readmore</a>
                                            <a href="{{ route('delete',['id' => $new->id])}}" class="btn btn-danger float-end small">delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="row">
                    <form action="{{route('search')}}" method="GET" class="d-flex">
                        <input type="text" name="search" placeholder="search here" class="form-control" size="70">
                        <input type="submit" class="btn btn-dark small">
                    </form>

                    <div class="card">
                        <img src="{{url("public/homepages/cwsimg")}}" width="50" alt="">
                    </div>
                    
                    <div class="list-group mt-3">
                        <li class="list-group-item active">Category</li>
                        @foreach ($categories as $item)
                            <a href="" class="list-group-item list-group-item-action">{{$item->category_title}}</a>
                        @endforeach
  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
       <div class="container">
        <div class="row ">
            <p class="text-light mt-4">Copyright © PurniaNews7 | 2022</p>
        </div>
       </div>
    </div>
@endsection
