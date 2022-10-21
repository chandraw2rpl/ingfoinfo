@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="{{route('event.update', [$event->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="card">
                    <div class="card-header">Update event</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$event->title}}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control  @error ('description') is-invalid @enderror">{{$event->description}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>

                            <select name="category" class="form-control @error('category') is-invalid @enderror">
                                <option value="">Pilih

                                    Kategori</option>
                                @foreach(App\Models\Category::all() as $category)

                                <option value="{{$category->id}}" @if ($category->id==$event->category_id) selected @endif
                                    >{{$category->name}}</option>

                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message}}</strong>

                            </span>
                            @enderror
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                                @error('image')
                                <span class="invalid-feedback" role="alert">

                                    <strong>{{ $message}}</strong>

                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-info" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
