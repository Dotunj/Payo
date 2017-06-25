@extends('layouts.master')
@section('title', 'Add Products')


@section('content')
<div class="content-wrapper py-3">
 <div class="container-fluid">
 <div class="card mb-3">
                <!-- START PANEL -->
                    <form action="{{ route('products.store')  }}" method="post"  enctype="multipart/form-data">
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                    	@if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
                @endif
                   {{csrf_field()}}
                       <fieldset>
                    <legend>Add Product</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="product_name">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="price">
                                                     
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" name="product_description"></textarea>
                        </div>
                    </div>
                  
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              
                </fieldset>
                <!-- END PANEL -->

          </div>
        </div>
      </div>
@endsection
