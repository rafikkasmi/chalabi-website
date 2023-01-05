@extends('layouts.admin')

@section('content')

<div class="card">
   <div class="card-header">
      <h2>Ajouter Categorie</h2>
   </div>

   <div class="card-body">
      <form action="{{ url('admin/insert-category') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-md-6 md-3">
               <label for="name">Nom</label>
               <input type="text" name="name" required id="name" class="form-control border p-2">
            </div>
            <div class="col-md-12 my-3">
               <button type="submit" class="btn btn-primary">Créer</button>
            </div>
         </div>
      </form>
   </div>
</div>

@endsection