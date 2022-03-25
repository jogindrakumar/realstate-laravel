@extends('layouts.admin') @section('page-title','Create a Listings')
@section('content')

<div id="mainContent">
<div class=" col-md-6">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">Create A Listings</h6>
        <div class="mT-30">
            <form method="POST" action="{{ route('admin.listings.store') }}">
               @csrf
                <div class="mb-3">
                    <label class="form-label" for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}" id="inputAddress" placeholder="1234 Main St"/>   
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" name="address2" value="{{old('address2')}}"  placeholder="Apartment, studio, or floor"/>
                
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="City">City</label>
                        <input type="text" class="form-control" name="city" value="{{old('city')}}" id="inputCity"/>
                                
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="state">State</label>
                        <select name="state"  id="state" class="form-control">
                            <option @selected(old('state') == 'IND')  value="IND">India</option>
                            <option  @selected(old('state') == 'NY') value="NY"> New York</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="zipcode">Zip</label>
                        <input type="text" class="form-control" name="zipcode" value="{{old('zipcode')}}" id="inputZip" />
                    </div>
                </div>
               <div class="mb-3 col-md-6">
                   <label class="form-label" for="bedrooms">Bedrooms</label> 
                <input type="text" class="form-control" name="bedrooms" value="{{old('bedrooms')}}" id="bedrooms" placeholder="4">
            </div>
             <div class="mb-3 col-md-6">
                   <label class="form-label" for="bathrooms">Bathrooms</label> 
                <input type="text" class="form-control" name="bathrooms" value="{{old('bathrooms')}}" id="bathrooms" placeholder="2">
            </div>
            <div class="mb-3 col-md-6">
                   <label class="form-label" for="squarefootage">SQFT</label> 
                <input type="text" class="form-control" name="squarefootage" value="{{old('squarefootage')}}" id="squarefootage" placeholder="2000">
            </div>
                
                <button type="submit" class="btn btn-primary btn-color">
                    Sign in
                </button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
