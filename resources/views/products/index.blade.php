@extends('layouts.master')
@yield('title', 'Products')

@section('content')
 <div class="content-wrapper py-3">
 <div class="container-fluid">
 <div class="card mb-3">
             @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
                @endif
                <div class="card-header">
                    <i class="fa fa-table">All Products</i>
                </div>
                <div class="card-block">
                 <div class="table-responsive">
                   <table class="table table-bordered table-striped" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                   <th>Product Name</th>
                    <th>Description</th>
                     <th>Price (NGN)</th>
                     <th>Edit</th>
                     <th>Delete</th>
                      
                   </thead>
    <tbody>
     @foreach($products as $product)
    <tr>
    <td>{{$product->Name}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->price}}</td>
    <form action="/products/{{$product->id}}/edit" method="GET">
      {{csrf_field()}}
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-fw fa-pencil"></span></button></p></td>
    </form>
    <form action="/products/{{$product->id}}" method="POST">
      {{csrf_field()}}
      {{method_field('DELETE')}}
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" ><span class="fa fa-fw fa-trash"></span></button></p></td>
  </form>
    </tr>
    @endforeach
  </tbody>

</div>
</div>
</div>
</div>
</div>
@endsection

