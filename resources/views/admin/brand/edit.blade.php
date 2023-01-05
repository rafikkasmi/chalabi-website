@extends('layouts.admin')

@section('content')

<div class="card">
   <div class="card-header">
      <h2>Modifier Marque</h2>
   </div>

   <div class="card-body">
      <form action="{{ url('admin/update-brand/' . $brand->id) }}" method="POST">
         @csrf
         @method('PUT')
      <div class="row">
            <div class="col-md-6 md-3">
               <label for="name">Nom</label>
               <input type="text" name="name" value="{{$brand->name}}" id="name" class="form-control border p-2">
            </div>
            <div class="col-md-12 my-3">
               <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
         </div>
      </form>
   </div>
</div>

@endsection