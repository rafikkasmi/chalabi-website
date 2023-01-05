@extends('layouts.admin')

@section('content')

<div class="col-md-12 column">
   <div class="card-header">
      <h2>Modifier les Données de la Boutique</h2>
   </div>
<div class="table-responsive">
      <form action="{{ url('admin/update-store-data/') }}" method="POST">
         @csrf
         @method('PUT')
         <div class="row">
 
          
            <div class="col-md-12 mb-3">
               <label for="poids">Numero du telephone primaire :</label>
               <input type="number" name="phone_number" id="phone_number" value="{{ $storeData->phone_number }}" class="form-control border p-2">
            </div>
               <div class="col-md-12 mb-3">
               <label for="poids">Numero du telephone secondaire :</label>
               <input type="number" name="secondary_phone_number" id="secondary_phone_number" value="{{ $storeData->secondary_phone_number }}" class="form-control border p-2">
            </div>
           
            <div class="col-md-12 mb-3">
               <label for="poids">Adresse :</label>
               <input type="text" name="address" id="address" value="{{ $storeData->address }}" class="form-control border p-2">
            </div>
           
           
            <div class="col-md-12 mb-3">
               <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
         </div>
      </form>
   </div>

</div>

@endsection