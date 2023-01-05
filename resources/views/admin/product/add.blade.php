@extends('layouts.admin')

@section('content')

<div class="card">
   <div class="card-header">
      <h2>Ajouter un Produit :</h2>
   </div>

   <div class="card-body">
      <form action="{{ url('admin/insert-product') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
             <div class="col-md-12 mb-3">
               <label for="name">Matiere :</label>
               <select class="form-select p-2" name="type">
                  <option value="1">Or</option>
                  <option value="2">Diamond</option>
               </select>
            </div>
             <div class="col-md-12 mb-3">
               <label for="name">Sexe :</label>
               <select class="form-select p-2" name="gender">
                  <option value="1">Femmes</option>
                  <option value="2">Hommes</option>
               </select>
            </div>
            <div class="col-md-12 mb-3">
               <option value="">Categorie de Bijoux:</option>
               <select class="form-select p-2" name="cate_id">
                  @foreach ($categories as $cate)
                  <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                  @endforeach
               </select>
            </div>
            
            <div class="col-md-6 mb-3">
               <label for="name">Nom :</label>
               <input type="text" name="name" id="name" class="form-control border p-2">
            </div>
            <div class="col-md-6 mb-3">
               <label for="brand">Marque :</label>
                <select class="form-select p-2" name="brand">
                  @foreach ($brands as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                  @endforeach
               </select>
            </div>
             <div class="col-md-12 mb-3">
               <label for="poids">Poids :</label>
               <input type="number" name="poids" id="poids" class="form-control border p-2">
            </div>
            <div class="col-md-12 mb-3">
               <label for="desc">Description</label>
               <textarea name="description" rows="3" id='desc' class="form-control border p-2"></textarea>
            </div>
            <div class="col-md-6 mb-3">
               <label for="original_price">Prix</label>
               <input type="number" name="original_price" id="original_price" class="form-control border p-2">
            </div>
            <div class="col-md-6 mb-3">
               <label for="selling_price">Prix Promotion (sinon laisser vide):</label>
               <input type="number" name="selling_price" id="selling_price" class="form-control border p-2">
            </div>
        
            <div class="col-md-12 mb-3">
               <input type="file" name="image" class="form-control border p-2">
            </div>

            <div class="col-md-12">
               <input 
                  type="file" 
                  class="filepond"
                  name="productimages[]" 
                  multiple 
                  data-allow-reorder="true">
            </div>
            <div class="col-md-12 mb-3">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </div>
      </form>
   </div>
</div>

<script>
    // Get a reference to the file input element
    const inputElement = document.querySelector('.filepond');

    // Create a FilePond instance
   FilePond.registerPlugin(FilePondPluginImagePreview);
    const pond = FilePond.create(inputElement,{
      allowMultiple:true,
    storeAsFile: true,
      server:{
         instantUpload:false
            }

      });

</script>

@endsection