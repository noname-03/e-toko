@extends('layout.template')
@section('link')
<link href="{{ asset('dashboard') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Product</h1>
{{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        {{-- <h6 class="m-0 font-weight-bold text-primary">Data Product</h6> --}}
        <a href="{{ route('product.create') }}" class="btn btn-primary">Add Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($products as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->category->name}}</td>
                        <td>{{$data->price}}</td>
                        <td><img src="{{ asset('images') }}/{{$data->photo}}" alt="" height=150 width=100></td>
                        <td><form action="{{ route('product.destroy', ['product'=>$data->id]) }}" method="post">
                            @csrf @method('DELETE')
                            <a class="btn btn-primary" href="{{ route('product.edit', ['product'=>$data->id]) }}" role="button"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda mau menghapus data ini ?')"><i class="fa fa-trash"></i></button>
                            </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- Page level plugins -->
<script src="{{ asset('dashboard') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('dashboard') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('dashboard') }}/js/demo/datatables-demo.js"></script>
@endsection
