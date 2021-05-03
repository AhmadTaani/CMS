@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <h4>Create Category</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.category.store')}}">
                    @csrf
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
                            <label for="category-name">Category Name</label>
                            <input type="text" name="categoryName" id="category-name" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
