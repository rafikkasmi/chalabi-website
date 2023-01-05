@extends('layouts.admin')

@section('content')

<div class="col-md-12 column px-3">
   <div class="card-header">
      <h3>Produits</h3>
      <hr>
   </div>
   <div class="table-responsive">
      <table class="table text-center table-bordered table-striped">
         <thead>
            <tr>
               <th>Image</th>
               <th>Nom</th>
               <th>Categorie</th>
               <th>Marque</th>
               <th>Original Price</th>
               <th>Selling Price</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($products as $item)
            <tr>
               <td>
                  <img src="{{ asset('assets/uploads/products/' . $item->image) }}" class="cate-image" alt="img not found">
               </td>
               <td>{{ $item->name }}</td>
               <td>{{ $item->category->name}}</td>
               <td>{{ $item->brand}}</td>
               <td>{{ $item->original_price }}</td>
               <td>{{ $item->selling_price }}</td>   
               <td>
                  <a href="{{ url('admin/edit-product/' . $item->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('admin/delete-product/' . $item->id) }}" class="btn btn-danger">Delete</a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
   <div class="d-flex justify-content-center mt-4">
               {!! $products->links() !!}
   </div>
</div>


@endsection