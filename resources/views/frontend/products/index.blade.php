@extends('layouts.front')

@section('title')
   Produits
@endsection

@section('content')

<div class="py-5 mb-4 shadow-sm bg-warning border-top">
   <div class="container">
      <p class="links mb-6">
         <a href="{{ url('products') }}">Produits</a> /  
         @if($category!=null)
         <a href="{{ url('products',['category'=>$category->id]) }}">{{ $category->name }}</a> 
         @endif
      </p>
   </div>
</div>

<div class="py-2">
   <form action="{{url('products')}}">
      <div class="row w-100 justify-content-center">
      <div class="col-sm-3 mb-3 px-2">
         <label for="">Marque:</label>
     <select class="form-select" name="brand" value="{{request()->get('brand')}}">
       <option value="">Selectionner</option>
         @foreach($brands as $brand)
         <option value="{{ $brand->id }}" {{ ( request()->get("brand") == $brand->id) ? 'selected' : '' }}>{{ $brand->name }}</option>
         @endforeach
      </select>
      </div>
      <div class="col-sm-3 mb-3 px-2">
      <label for="name">Matiere :</label>
      <select class="form-select" name="type" value="{{request()->get('type')}}">
         <option value="">Selectionner</option>
         <option value="1" {{ ( request()->get("type") == 1) ? 'selected' : '' }}>Or</option>
         <option value="2" {{ (request()->get("type") == 2) ? 'selected' : '' }}>Diamond</option>
      </select>
      </div>
      <div class="col-sm-3 mb-3 px-2">
      <label for="name">Sexe :</label>
      <select class="form-select" name="gender" value="{{ request()->get('gender') }}">
       <option value="">Selectionner</option>
         <option value="1" {{ ( request()->get("gender") == 1) ? 'selected' : '' }}>Femmes</option>
         <option value="2" {{ ( request()->get("gender") == 2) ? 'selected' : '' }}>Hommes</option>
      </select>
   </div>
   </div>
   <input type="submit" hidden>
   </form>
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
   label{
      color:white;
   }
   @media screen and (max-width: 600px) {
      .container .links{
         font-size:16px;
         text-align:center;
      }
      .col-sm-3{
         width:80%;
         margin:auto;
      }
   }
      
</style>
<script>
   let selects = document.querySelectorAll('.form-select');
   selects.forEach(select => {
      select.addEventListener('change', function(){
         document.querySelector('input[type="submit"]').click();
      })
   });
</script>
@endsection