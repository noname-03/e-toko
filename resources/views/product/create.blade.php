@extends('layout.template')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Product</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <p>Form Data</p>
    </div>
    <div class="card-body">
                    <!-- Component Preview-->
                    <div class="sbp-preview">
                        <div class="sbp-preview-content">
                            <form action="{{ route('product.store') }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
                                    </label>
                                    <div class="mb-3">
                                        <input type="text" name="name" id="first-name" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Price <span class="required">*</span>
                                    </label>
                                    <div class="mb-3">
                                        <input type="number" name="price" id="first-name" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="exampleFormControlSelect1">Category <span class="required">*</span></label>
                                    <div class="mb-3">
                                        <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                            <option value="">None</option>
                                            @foreach ($categories as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Photo Product <span class="required">*</span>
                                    </label>
                                    <input type="file" name="namephoto" class="form-control-file" id="exampleFormControlFile1" required>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="sbp-preview-code">
                        <div class="sbp-preview-text">The default Bootstrap form control states have been restyled to fit the SB Admin Pro theme. The style has changed, but the markup is identical.</div>
                    </div>
                </div>
            </div>
        </div>
@endsection
