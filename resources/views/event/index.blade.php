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
            <div class="card">
                <div class="card-header">All event
                    <span class="float-right">
                        <a href="{{route('event.create')}}">
                            <button class="btn btn-outline-info">Add event</button>
                        </a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($events)>0)
                            @foreach($events as $key=>$event)
                            <tr>
                                <td><img src="{{asset('image')}}/{{$event->image}}" width="100"></td>
                                <td>{{$event->title}}</td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->category->name}}</td>
                                <td>
                                    <a href="{{route('event.edit',
                                    [$event->id])}}"><button class="btn
                                    btn-outline-success">Edit</button></a>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal{{$event->id}}">
                                        Delete
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$event->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="{{route('event.destroy',[$event->id])}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda Yakin ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <td>Tidak ada event yang dapat ditampilkan.</td>
                            @endif
                        </tbody>
                    </table>
                    {{$events->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
