@extends('admin.layouts.master')
@section('content')
@extends('layouts.frontend.css')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card mt-5">
                        <div class="card-header">Add new event</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control  @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" class="form-control  @error('category') is-invalid @enderror">
                                    <option value="">Pilih Kategori</option>
                                    @foreach (App\Models\Category::all() as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image"
                                    class="form-control  @error('image') is-invalid @enderror">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <button class="btn btn-outline-info" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <a href="{{ url('/index') }}"><button class="btn btn-outline-danger">Back</button></a>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
