@extends('Admin.template')
@section('content')
    <div class="container mt-5">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title mt-3">Create Projectimagefile</h3>
                <div class="card-tools">
                    <a href="{{ url('admin/projectimagefile') }}" class="btn btn-sm btn-success">
                        All
                    </a>
                </div>
            </div>

            <!-- display error massage for user-->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Display success massage for user-->
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <!--data store by this form in database-->
            <div class="form-Container m-3">
                <form action="{{ url('/') }}/admin/projectimagefile" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 d-flex flex-column  mb-2">
                            <label for="">projects_id:</label>
                            <input class="form-control" type="text" name="projects_id" placeholder="Enter projects_id">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 d-flex flex-column  mb-2">
                            <label for="">image:</label>
                            <input type="file" name="image" id="image-input" accept="image/*">
                        </div>
                        <div class="col-6 d-flex flex-column  mb-2">
                            <label for="">Status:</label>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <input type="submit" class="btn btn-success btn-md" value="submit">
                        </div>
                    </div>
                </form>
            </div>
            <script>
                $('#summernote').summernote({
                    placeholder: 'Enter Description ',
                    tabsize: 2,
                    height: 100
                });
            </script>
        </div>
    </div>
@endsection
