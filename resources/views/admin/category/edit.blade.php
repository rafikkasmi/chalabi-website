@extends('layouts.admin')

@section('content')

<div class="card">
   <div class="card-header">
      <h2>Modifier Categorie</h2>
   </div>

   <div class="card-body">
      <form action="{{ url('admin/update-category/' . $category->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="row">
            <div class="col-md-6 md-3">
               <label for="name">Nom</label>
               <input type="text" name="name" value="{{ $category->name  }}" id="name" class="form-control border p-2">
            </div>
            <div class="col-md-6 my-3">
               <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
         </div>
      </form>
   </div>
</div>

@endsection