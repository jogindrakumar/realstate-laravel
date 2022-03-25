@extends('layouts.admin') @section('page-title','Create a Listings')
@section('content')

<div id="mainContent">
<div class=" col-md-6">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">Create A Listings</h6>
        <div class="mT-30">
            <form>
               
                <div class="mb-3">
                    <label class="form-label" for="inputAddress">Address</label>
                    <input
                        type="text"
                        class="form-control"
                        id="inputAddress"
                        placeholder="1234 Main St"
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputAddress2"
                        >Address 2</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="inputAddress2"
                        placeholder="Apartment, studio, or floor"
                    />
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputCity">City</label>
                        <input
                            type="text"
                            class="form-control"
                            id="inputCity"
                        />
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected="selected">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" />
                    </div>
                </div>
               <div class="mb-3 col-md-6">
                   <label class="form-label" for="bedrooms">Bedrooms</label> 
                <input type="text" class="form-control" id="bedrooms" placeholder="4">
            </div>
             <div class="mb-3 col-md-6">
                   <label class="form-label" for="bathrooms">Bathrooms</label> 
                <input type="text" class="form-control" id="bathrooms" placeholder="2">
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
