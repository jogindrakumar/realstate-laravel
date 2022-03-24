@extends('layouts.account')

@section('page-title','User Saved Listings - JK Realty')
@section('title','User Saved Listings')
@section('page-bg','https://images.pexels.com/photos/6709142/pexels-photo-6709142.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')
@section('content')

 <div class="listings-properties">
      
           {{-- Start Row --}}
            <div class="row">
                {{-- Start col-sm-6 col-lg-4 col-xl-3 --}}
            <div class="col-sm-12 col-lg-4 col-xl-4">
<div class="listings-properties__item">
            <img  src="https://www.contemporist.com/wp-content/uploads/2021/02/modern-house-outdoor-patio-swimming-pool-170221-144-01.jpg" alt="">
        <div class="listings-properties__saved ">
            {{-- listings-properties__saved--active --}}
            <i class="fa-solid fa-heart"></i>
        </div>
            <span class="listings-properties__item-price">$250000</span>
            <span class="listings-properties__item-details">
                <i class="fa-solid fa-bed"></i> 4 
                <i class="fa-solid fa-bath"></i> 3 
                <i class="fa-solid fa-ruler-combined"></i> 2440 SQFT </span>

                <span class="listings-properties__item-address">2312 Grand St, 
                    <br>
                India South Beach PC 110054 </span>

                <div class="listings-properties__item-line">

                </div>
                <span class="listings-properties__item-owner">
                  
                Jogi Realty</span>
        </div>
        </div>{{-- End col-sm-6 col-lg-4 col-xl-3 --}}

       
        </div> {{-- End Row --}}
      
       {{-- End Container --}}
        
    </div> 
    {{-- End listings-properties --}}
@endsection