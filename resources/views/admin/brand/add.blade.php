@extends('layouts.admin')

@section('content')

<div class="card">
   <div class="card-header">
      <h2>Ajouter Marque</h2>
   </div>

   <div class="card-body">
      <form action="{{ url('admin/insert-brand') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-md-6 md-3">
               <label for="name">Nom</label>
               <input type="text" name="name" id="name" class="form-control border p-2">
            </div>
            <div class="col-md-12 my-3">
               <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
         </div>
      </form>
   </div>
</div>

@endsection