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
                                    <div class="col-3">
                                        <div class="card">
                                            <img src="{{ asset('image/' . $new->image) }}" alt="{{ $new->image }}"
                                                style="height: 170px;object-fit:cover">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="card-body">
                                            <h3>{{ $new->post_title }}</h3>
                                            <div class="row">
                                                <h4>{{ $new->author }}</h4>
                                            </div>
                                            <p class="small">{{ $new->description }}</p>
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
            <div class="col-3"></div>
        </div>
    </div>
@endsection
