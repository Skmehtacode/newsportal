@extends('homepages.base')
@section('content')
    <div class="container mt-4">
        <div class="col-6 mx-auto">
            <div class="row">
                <div class="card">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3"> 
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="post_title" value="{{old("post_title")}}">
                            @error("post_title")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="">Author</label>
                            <input type="text" class="form-control" name="author" value="{{old("author")}}">
                            @error("author")
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">category</label>
                            <select name="category_id" value="{{ old("category_id")}}"  class="form-select">
                                <option value="">Select Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->category_title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" value="{{old("image")}}">
                            @error("image")
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="">Description</label>
                            <textarea name="description" cols="72" rows="5" value="{{old("description")}}"></textarea>
                            @error("description")
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3"> 
                            <label for="">Date</label>
                            <input type="date" class="form-control" name="date" value="{{old("date")}}">
                            @error("date")
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="insert" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection