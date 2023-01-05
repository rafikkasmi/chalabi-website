@extends('layouts.front')

@section('title')
   Produits
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
   <div class="container">
      <h6 class="mb-6">
         <a href="{{ url('products') }}">Collections</a> / 
      </h6>
   </div>
</div>

   <div class="py-5">
      <div class="container">
         <div class="row">
            <h2>Produits</h2>
            @foreach ($products as $product )
            <div class="col-lg-3 col-md-4 col-sm-6 custom-col-5">               
                                          @include('layouts.inc.frontend.single-product',['product'=>$product])
            </div>
            @endforeach

         </div>
         <div class="d-flex justify-content-center">
               {!! $products->links() !!}
            </div>
      </div>
   </div>
<style>
   svg{
      width:50px;
   }
</style>
@endsection