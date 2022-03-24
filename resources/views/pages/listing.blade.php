@extends('layouts.main')

@section('page-title','All properties - JK Realty')
@section('content')
<div class="listings-page">
    <div class="listings-city">
        <img class="listings-city__img" src="https://www.thespruce.com/thmb/imusY6jMIeYLg1RlpJr4Ox_l7Vg=/2086x1173/smart/filters:no_upscale()/Modernhomeexterior-GettyImages-1058471994-014dbd8ca7894cd388ad8c4ff77bb476.jpg" alt="">
        <h1 class="listings-city__title">South Beach</h1>
    </div>

    <div class="listings-filter">

        <div class="listings-filter__wrapper">
        <div class="listings-filter__option">
                    Any Price <i class="fa-solid fa-caret-down"></i>
                </div>
        <div class="listings-filter__option">
            All Beds <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__option">
        Home Type <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__option">
            More <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__button">
            Search
        </div>
        </div>
       
    </div>
    <div class="listings-properties">
       <div class="container">
           {{-- Start Row --}}
            <div class="row">

                 @for ($i = 1; $i <= 12; $i++)
           {{-- Start col-sm-6 col-lg-4 col-xl-3 --}}
            <div class="col-sm-6 col-lg-4 col-xl-3">
<a href="/listing/2123-grand-ave-india/1" class="listings-properties__item">
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
        </a>
        </div>{{-- End col-sm-6 col-lg-4 col-xl-3 --}}
     @endfor
              

       
        </div> {{-- End Row --}}
       </div> 
       {{-- End Container --}}
        
    </div> 
    {{-- End listings-properties --}}
</div>

{{-- End listings-page --}}
<br>
@endsection