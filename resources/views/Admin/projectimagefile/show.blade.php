@extends('Admin.template')
@section('content')
    <div class="container mt-5">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title mt-3">Views Projectimagefile</h3>
                <div class="card-tools">
                    <a href="{{ url('admin/projectimagefile') }}" class="btn btn-sm btn-success">
                        All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong class="mr-2">Id:</strong>{{ $data->id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong class="mr-2">projects_id:</strong>{{ $data->projects_id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong class="mr-2">image:</strong>{{ $data->image }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong class="mr-2">Status:</strong>
                            @if ($data->status == 0)
                                <span class="badge bg-danger">Inactive</span>
                            @else
                                <span class="badge bg-success">Active</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong class="mr-2">Created_at:</strong>{{ $data->created_at }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong class="mr-2">Updated_at:</strong>{{ $data->updated_at }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
