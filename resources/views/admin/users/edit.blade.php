@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <h4>Edit Category</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.user.update',$user->id)}}">
                    @csrf
                    <input type="hidden" name="_method" value="put"/>
                    @if($errors->any())
                        <ol class="alert alert-danger mb-4" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>@endforeach
                        </ol>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <label for="username">User Name</label>
                            <input type="text" name="username"
                                   @if(isset($user->name)) value="{{$user->name}}" @endif
                                   class="form-control" id="username" required>
                        </div>
                        <div class="col-md-6">
                            <label for="user-email">User Email</label>
                            <input type="text" name="userEmail"
                                   @if(isset($user->email)) value="{{$user->email}}" @endif
                                   class="form-control" id="user-email" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="userRole">User Name</label>
                            <select name="userRole" class="form-control" id="userRole" required>
                                <option value="admin" @if($user->role == 'admin')selected="true"@endif>Admin</option>
                                <option value="user" @if($user->role == 'user')selected="true"@endif>User</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
