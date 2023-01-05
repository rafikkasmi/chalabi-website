@extends('layouts.front')

@section('title')
   Produits
@endsection

@section('content')

<div class="py-5 mb-4 shadow-sm bg-warning border-top">
   <div class="container">
      <p class="links mb-6">
        Resultats de recherche pour: <strong>{{ request()->input('query') }}</strong>
      </p>
   </div>
</div>

   <div class="py-5">
      <div class="container">
         <div class="row">
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
   .container .links{
      color:black;
      font-size:20px;
   }
</style>
@endsection