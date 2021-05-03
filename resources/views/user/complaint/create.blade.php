@extends('layouts.user')

@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <h4>Submit Complaint</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('complaint.store')}}">
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
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="complaint-name">Title</label>
                            <input type="text" name="complaintTitle" class="form-control" id="complaint-name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="complaint-category">Category</label>
                            <select name="complaintCategory" class="form-control" id="complaint-category" required>
                                <option value="none" selected disabled hidden>Choose Category:</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="complaint-description">Description</label>
                            <textarea name="complaintDesc" id="complaint-description" class="form-control" required></textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
