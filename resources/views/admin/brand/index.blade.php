@extends('layouts.admin')

@section('content')

<div class="col-md-12 column">
   <div class="card-header">
      <h3>Marques :</h3>
      <hr>
   </div>

   <div class="table-responsive">
      <table class="table text-center table-bordered table-striped custom-table">
         <thead>
            <tr>
               <th>Nom</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($brand as $item)
            <tr>
               <td>{{ $item->name }}</td>
               <td>
                  <a href="{{ url('admin/edit-brand/' . $item->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('admin/delete-brand/' . $item->id) }}" class="btn btn-danger">Delete</a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>

@endsection