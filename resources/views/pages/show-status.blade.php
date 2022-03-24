@extends('layouts.account')

@section('page-title','Listing Request Status - JK Realty')
@section('title','Request Status')
@section('page-bg','https://images.pexels.com/photos/6709142/pexels-photo-6709142.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')
@section('content')

 <div class="request-list">
     <h2>All Requests</h2>
     @for ($i = 0; $i < 4; $i++)
            <div class="request-list__wrapper">
         <div>
        <h3>2134 Grand Ave </h3>
                <span class="request-list__details"> <i class="fa-solid fa-bed"></i> 4 
                        <i class="fa-solid fa-bath"></i> 3 
                        <i class="fa-solid fa-ruler-combined"></i> 2440 SQFT</span>
         </div>
        

         <div class="request-list__info">
             <span class="request-list__info-title">
                 Status
             </span>
             <div class="request-list__info-status 
                        request-list__info-status--success 
                        request-list__info-status--canceled 
                        request-list__info-status--sold">
                Success
             </div>
         </div>
     </div>
     @endfor
  
     
 </div>
@endsection