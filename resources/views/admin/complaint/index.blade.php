@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-0 mt-3">
        <h1 class="h3 mb-3">Complaints</h1>
        @if(session('success'))
            <div class="alert alert-success mb-4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-x close" data-dismiss="alert">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($complaints as $complaint)
                        <tr>
                            <td>{{$complaint->id}}</td>
                            <td>{{$complaint->title}}</td>
                            <td>@if(strlen($complaint->description) > 50){{substr($complaint->description,0,30)."..."}}@else {{$complaint->description}}@endif</td>
                            <td>
                                @if($complaint->status == 'pending resolution')
                                <button class="btn btn-primary">{{$complaint->status}}</button>
                                @elseif($complaint->status == 'resolved')
                                    <button class="btn btn-success">{{$complaint->status}}</button>
                                @else
                                    <button class="btn btn-danger">{{$complaint->status}}</button>
                                @endif
                            </td>
                            <td class="table-action">
                                <a href="{{route('admin.complaint.edit',$complaint->id)}}"><i
                                        class="right fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
