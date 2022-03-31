@extends('layouts.admin')
@section('page-title','Edit Listings')
@section('content')

<div id="mainContent">
     <form method="POST" action="{{ route('admin.listings.update',['slug' =>$listing->slug,'id'=>$listing->id]) }}">
               @csrf
               @method('PUT')
    <div class="row">

<div class=" col-md-9">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">Edit Listings</h6>
        <div class="mT-30">
           
                <div class="mb-3">
                     <h3>Address</h3>
                    <label class="form-label" for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address" value="{{old('address',$listing->address)}}" id="inputAddress" placeholder="ex:1234 Main St"/>   
                        @error('address')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                </div>
                <div class="mb-3">
                    
                    <label class="form-label" for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" name="address2" value="{{old('address2',$listing->address2)}}"  placeholder="ex:Apartment, studio, or floor"/>
                @error('address2')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="City">City</label>
                        <input type="text" class="form-control" name="city" value="{{old('city',$listing->city)}}" placeholder="ex:India" id="inputCity"/>
                         @error('city')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror       
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="state">State</label>
                        <select name="state"  id="state" class="form-control">
                            <option @selected(old('state',$listing->state) == 'IND')  value="IND">India</option>
                            <option  @selected(old('state',$listing->state) == 'NY') value="NY"> New York</option>
                        </select>
                        @error('state')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="zipcode">Zip</label>
                        <input type="text" class="form-control" name="zipcode" value="{{old('zipcode',$listing->zipcode)}}" placeholder="ex:11542" id="inputZip" />
                        @error('zipcode')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
               <div class="mb-3 col-md-6">
                   <label class="form-label" for="bedrooms">Bedrooms</label> 
                <input type="text" class="form-control" name="bedrooms" value="{{old('bedrooms',$listing->bedrooms)}}" id="bedrooms" placeholder="ex:4">
                @error('bedrooms')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
            </div>
             <div class="mb-3 col-md-6">
                   <label class="form-label" for="bathrooms">Bathrooms</label> 
                <input type="text" class="form-control" name="bathrooms" value="{{old('bathrooms',$listing->bathrooms)}}" id="bathrooms" placeholder="ex:2">
                @error('bathrooms')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
            </div>
            <div class="mb-3 col-md-6">
                   <label class="form-label" for="squarefootage">SQFT</label> 
                <input type="text" class="form-control" name="squarefootage" value="{{old('squarefootage',$listing->squarefootage)}}" id="squarefootage" placeholder="ex:2000">
                @error('squarefootage')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
            </div>
                
               <div class="mb-3 col-md-6">
                   <h3>Details</h3>
                   <label class="form-label" for="description">Description</label> 
                <textarea type="text" class="form-control" cols="200" style="height:100px;"  name="description"  id="description" placeholder="ex:Full details about your property"> 
                    {{old('description',$listing->description)}}
                </textarea>
                @error('description')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
            </div>  
            
        </div>
    </div>
</div>
<div class=" col-md-3">
    <div class="bgc-white p-20 bd">
        <h3 class="c-grey-900">Settings</h3>
        
            <label class="form-label" for="status">Status</label>
                        <select name="status"  id="status" class="form-control">
                            <option @selected(old('status',$listing->status) == 'draft')  value="draft">Draft</option>
                            <option  @selected(old('status',$listing->status) == 'published') value="published">Published</option>
                        </select>
                        @error('status')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror

                           <div class="mT-30">
          <div class="form-group" style="display: flex;margin-top:1rem; flex-direction:column;">

                 
                <a href="{{route('admin.listings.delete',['slug' =>$listing->slug,'id'=>$listing->id])}}" onclick="return confirm('Are you sure ? want to delete ?')"
                      class="btn cur-p btn-outline-success" style="width: 100%;margin-top:1rem;color:black;">
                   Gallary
                </a>
          </div>   
        </div>
        <div class="mT-30">
          <div class="form-group" style="display: flex; flex-direction:column;">
<button type="submit" class="btn btn-primary btn-color" style="width: 100%;">
                   Save 
                </button>
                <a href="{{route('admin.listings.delete',['slug' =>$listing->slug,'id'=>$listing->id])}}" onclick="return confirm('Are you sure ? want to delete ?')"
                      class="btn btn-danger btn-color" style="width: 100%;margin-top:1rem;">
                   Delete
                </a>
          </div>
         
            
        </div>
    </div>
</div>
    </div>
    </form>
</div>

@endsection