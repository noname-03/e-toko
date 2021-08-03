@extends('layout.template')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create category</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <p>Form Data</p>
    </div>
    <div class="card-body">
                    <!-- Component Preview-->
                    <div class="sbp-preview">
                        <div class="sbp-preview-content">
                            <form action="{{ route('category.update', ['category'=>$category->id]) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                @csrf @method('PATCH')
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
                                    </label>
                                    <div class="mb-3">
                                        <input type="text"  value="{{$category->name}}" name="name" id="first-name" required="required" class="form-control ">
                                    </div>
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
                    </div>
                </div>
            </div>
        </div>
@endsection
