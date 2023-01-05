@extends('layouts.admin')

@section('content')

<div class="card">
   <div class="card-header">
      <h2>Modifier les images d'Accueil</h2>
   </div>
<div class="card-body">
      <form action="{{ url('admin/update-store-front-images') }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="row">
 
           <div class="col-md-12 mb-3">
               <button type="submit" class="btn btn-primary">Appliquer</button>
            </div>

            <div class="col-md-12 mb-3">
               <label for="poids">Image 1 :</label>
               <div class="col-md-12 mb-3">
                  <input type="file" name="slider_image1" class="form-control border p-2">
               </div>
               @if($storeData->slider_image1)
                  <img src="{{ asset($storeData->slider_image1) }}" class='slider mb-3' alt="slider image"/>
               @endif     
               <div class="col-md-12 mb-3">
                  <label for="slider_headline1">Titre image 1 :</label>
                  <input type="text" name="slider_headline1" value="{{$storeData->slider_headline1}}" class="form-control border p-2">
               </div>      
               <div class="col-md-12 mb-3">
                  <label for="slider_text1">Sous titre image 1 :</label>
                  <input type="text" name="slider_text1" value="{{$storeData->slider_text1}}" class="form-control border p-2">
               </div>         
            </div>
             
            <div class="col-md-12 mb-3">
               <label for="poids">Image 2 :</label>
               <div class="col-md-12 mb-3">
                  <input type="file" name="slider_image2" class="form-control border p-2">
               </div>
               @if($storeData->slider_image2)
                  <img src="{{ asset($storeData->slider_image2) }}" class='slider mb-3' alt="slider image"/>
               @endif      
               <div class="col-md-12 mb-3">
                  <label for="slider_headline2">Titre image 2 :</label>
                  <input type="text" name="slider_headline2" value="{{$storeData->slider_headline2}}" class="form-control border p-2">
               </div>      
               <div class="col-md-12 mb-3">
                  <label for="slider_text2">Sous titre image 2 :</label>
                  <input type="text" name="slider_text2" value="{{$storeData->slider_text2}}" class="form-control border p-2">
               </div>      
            </div>

            <div class="col-md-12 mb-3">
               <label for="poids">Image 3 :</label>
               <div class="col-md-12 mb-3">
                  <input type="file" name="slider_image3" class="form-control border p-2">
               </div>
               @if($storeData->slider_image3)
                  <img src="{{ asset($storeData->slider_image3) }}" class='slider mb-3' alt="slider image"/>
               @endif   
               <div class="col-md-12 mb-3">
                  <label for="slider_headline3">Titre image 3 :</label>
                  <input type="text" name="slider_headline3" value="{{$storeData->slider_headline3}}" class="form-control border p-2">
               </div>      
               <div class="col-md-12 mb-3">
                  <label for="slider_text3">Sous titre image 3 :</label>
                  <input type="text" name="slider_text3" value="{{$storeData->slider_text3}}" class="form-control border p-2">
               </div>           
            </div>
           
           
            
         </div>
      </form>
   </div>

</div>

<style>
   .slider{
      width:90%;
      margin:auto;
      max-width:400px;
   }
</style>

@endsection