@extends('layouts.admin')

@section('content')

<div class="col-md-12 column">
   <div class="card-header">
      <h2>Modifier les Donnée de connexion</h2>
   </div>
<div class="card-body">

<form action="{{ url('admin/update-login-email/') }}" method="POST">
         @csrf
         @method('PUT')
         <div class="row">
            <div class="col-md-12 mb-3">
               <label for="poids">Email :</label>
               <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control border p-2">
            </div>
            <div class="col-md-12 mb-3">
               <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
         </div>

</form>
      <form action="{{ url('admin/update-password/') }}" method="POST">
         @csrf
         @method('PUT')
         <div class="row">

               <div class="col-md-12 mb-3">
               <label for="poids">Mot de passe Courant :</label>
               <input type="password" name="currentPassword" id="currentPassword" class="form-control border p-2">
                     @if($errors->has('currentPassword'))
               <div class="text-danger">{{ $errors->first('currentPassword') }}</div>
            @endif
                   
            </div>
     
            <div class="col-md-12 mb-3">
               <label for="poids">Nouveau Mot de passe :</label>
               <input type="password" name="newPassword" id="newPassword" class="form-control border p-2">
                @if($errors->has('newPassword'))
               <div class="text-danger">{{ $errors->first('newPassword') }}</div>
            @endif
            </div>
           

             <div class="col-md-12 mb-3">
               <label for="poids">Confimer le Mot de passe :</label>
               <input type="password" name="passwordConfirmation" id="passwordConfirmation" class="form-control border p-2">
             @if($errors->has('passwordConfirmation'))
               <div class="text-danger">{{ $errors->first('passwordConfirmation') }}</div>
            @endif
            </div>
          
           
            <div class="col-md-12 mb-3">
               <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
         </div>
      </form>
   </div>

</div>

@endsection