@extends('layouts.user')

@section('content')
    <div id="content" class="main-content mt-3">
        <div class="layout-px-spacing">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Show Complaint</h4>
                            </div>
                            <div class="table-responsive mb-4 mt-4">

                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td><b>Title:</b></td>
                                        <td>{{$complaint->title}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Description:</b></td>
                                        <td>{{$complaint->description}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Status:</b></td>
                                        <td>{{$complaint->status}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Complaint Category:</b></td>
                                        <td>{{$category->category_name}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Created At:</b></td>
                                        <td>{{$complaint->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
