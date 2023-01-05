@extends('layouts.admin')

@section('title', 'Orders')

@section('content')


<div class="col-md-12 column">
               <div class="card-header">
                  <h3>
                     Table Des Prix
                  </h3>
                <hr>

               </div>
               <div class="table-responsive">
                  <form action="{{ url('admin/update-prices') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                  <table class="table table-bordered text-center">
                     <thead>
                        <tr>
                           <th>Nom</th>
                           <th>De</th>
                           <th>Jusqu'a</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     

                        @foreach ( $prices as $price )
                           <tr>
                              <td>{{ $price->name }}</td>
                              <td><input type="number" name="priceFrom{{$price->id}}" class="form-control border p-2" value="{{ $price->from}}"></td>
                              <td><input type="number" name="priceTo{{$price->id}}" class="form-control border p-2" value="{{ $price->to}}"></td>
                              <td>
                                 <button type="submit" class="btn btn-primary">Modifier</button>
                              </td>
                           </tr>
                        @endforeach

                     </tbody>
                  </table>
                     </form>

               </div>
   </div>



@endsection