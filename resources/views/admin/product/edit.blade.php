@extends('layouts.admin')

@section('content')

<div class="card">
   <div class="card-header">
      <h2>Edit Product</h2>
   </div>
<div class="card-body">
      <form action="{{ url('admin/update-product/' . $product->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="row">
             <div class="col-md-12 mb-3">
               <label for="name">Matiere :</label>
               <select class="form-select p-2" name="type">
                  <option value="1" {{ ( $product->type == 1) ? 'selected' : '' }}>Or</option>
                  <option value="2" {{ ( $product->type == 2) ? 'selected' : '' }}>Diamond</option>
               </select>
            </div>
             <div class="col-md-12 mb-3">
               <label for="name">Sexe :</label>
               <select class="form-select p-2" name="gender" value="{{ $product->gender }}">
                  <option value="1" {{ ( $product->gender == 1) ? 'selected' : '' }}>Femmes</option>
                  <option value="2" {{ ( $product->gender == 2) ? 'selected' : '' }}>Hommes</option>
               </select>
            </div>
            <div class="col-md-12 mb-3">
               <option value="">Categorie de Bijoux:</option>
               <select class="form-select p-2" name="cate_id" value="{{ $product->cate_id }}">
                  @foreach ($categories as $cate)
                  <option value="{{ $cate->id }}" {{ ( $product->cate_id == $cate->id) ? 'selected' : '' }}>{{ $cate->name }}</option>
                  @endforeach
               </select>
            </div>
            
            <div class="col-md-6 mb-3">
               <label for="name">Nom :</label>
               <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control border p-2">
            </div>
            <div class="col-md-6 mb-3">
               <label for="slug">Marque :</label>
                <select class="form-select p-2" name="brand">
                  @foreach ($brands as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                  @endforeach
               </select>
            </div>
             <div class="col-md-12 mb-3">
               <label for="poids">Poids :</label>
               <input type="number" step="0.01" name="poids" id="poids" value="{{ $product->poids }}" class="form-control border p-2">
            </div>
            <div class="col-md-12 mb-3">
               <label for="desc">Description</label>
               <textarea name="description" rows="3" id='desc'class="form-control border p-2">{{ $product->description }}</textarea>
            </div>
            <div class="col-md-6 mb-3">
               <label for="original_price">Prix</label>
               <input type="number" name="original_price" id="original_price" value="{{ $product->original_price }}" class="form-control border p-2">
            </div>
            <div class="col-md-6 mb-3">
               <label for="selling_price">Prix Promotion (sinon laisser vide):</label>
               <input type="number" name="selling_price" id="selling_price" value="{{ $product->selling_price }}" class="form-control border p-2">
            </div>
        
            <div class="col-md-12 mb-3">
               <input type="file" name="image" class="form-control border p-2">
            </div>
             @if($product->image)
               <img src="{{ asset('assets/uploads/products/' . $product->image) }}" class='edit-image mb-3' alt="product image"/>
            @endif

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
      files: [
         @foreach ($product->images as $img)
        {
            source: '{{ '/assets/uploads/products/'.$img->path }}',
        },
        @endforeach
    ],
      allowMultiple:true,
    storeAsFile: true,
      server:{
         instantUpload:false
            }

      });

</script>


@endsection