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
                    <input type="text" class="form-control" name="address" value="{{old('address')}}" id="inputAddress" placeholder="ex:1234 Main St"/>   
                        @error('address')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" name="address2" value="{{old('address2')}}"  placeholder="ex:Apartment, studio, or floor"/>
                @error('address2')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="City">City</label>
                        <input type="text" class="form-control" name="city" value="{{old('city')}}" placeholder="ex:India" id="inputCity"/>
                         @error('city')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror       
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="state">State</label>
                        <select name="state"  id="state" class="form-control">
                            <option @selected(old('state') == 'IND')  value="IND">India</option>
                            <option  @selected(old('state') == 'NY') value="NY"> New York</option>
                        </select>
                        @error('state')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="zipcode">Zip</label>
                        <input type="text" class="form-control" name="zipcode" value="{{old('zipcode')}}" placeholder="ex:11542" id="inputZip" />
                        @error('zipcode')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
               <div class="mb-3 col-md-6">
                   <label class="form-label" for="bedrooms">Bedrooms</label> 
                <input type="text" class="form-control" name="bedrooms" value="{{old('bedrooms')}}" id="bedrooms" placeholder="ex:4">
                @error('bedrooms')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
            </div>
             <div class="mb-3 col-md-6">
                   <label class="form-label" for="bathrooms">Bathrooms</label> 
                <input type="text" class="form-control" name="bathrooms" value="{{old('bathrooms')}}" id="bathrooms" placeholder="ex:2">
                @error('bathrooms')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
            </div>
            <div class="mb-3 col-md-6">
                   <label class="form-label" for="squarefootage">SQFT</label> 
                <input type="text" class="form-control" name="squarefootage" value="{{old('squarefootage')}}" id="squarefootage" placeholder="ex:2000">
                @error('squarefootage')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
            </div>
                
                <button type="submit" class="btn btn-primary btn-color">
                    Create Listing
                </button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
