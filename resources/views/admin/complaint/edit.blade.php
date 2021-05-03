@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <h4>Edit Complaint</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.complaint.update',$complaint->id)}}">
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
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="complaint-name">Title</label>
                            <input type="text" name="complaintTitle"
                                   @if(isset($complaint->title)) value="{{$complaint->title}}" @endif
                                   class="form-control" id="complaint-name" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="submitter-name">Submitted By</label>
                            <input type="text" name="submitterName"
                                   @if(isset($user->name)) value="{{$user->name}}" @endif
                                   class="form-control" id="submitter-name" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="complaint-description">Description</label>
                            <textarea id="complaint-description" class="form-control"
                                      disabled>@if(isset($complaint->description)){{$complaint->description}}@endif</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="complaint-category">Category</label>
                            <input type="text" name="complaintCategory"
                                   @if(isset($category->category_name)) value="{{$category->category_name}}" @endif
                                   class="form-control" id="complaint-category" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="complaint-status">Status</label>
                            <select name="complaintStatus" class="form-control" id="complaint-status" required>
                                <option value="pending resolution"
                                        @if($complaint->status == 'pending resolution')selected="true"@endif>pending
                                    resolution
                                </option>
                                <option value="resolved" @if($complaint->status == 'resolved')selected="true"@endif>
                                    resolved
                                </option>
                                <option value="dismissed" @if($complaint->status == 'dismissed')selected="true"@endif>
                                    dismissed
                                </option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
