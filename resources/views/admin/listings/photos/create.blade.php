@extends('layouts.admin') @section('page-title','Create a Photos')
@section('content')

<div id="mainContent">
<div class=" col-md-6">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">Create A Photos</h6>
        <div class="mT-30">
            <form method="POST" action="{{ route('admin.listings.photos.store',
            ['slug' => $slug,'id' => $id]) }}" enctype="multipart/form-data">
                
               @csrf
                <div class="mb-3">
                    <label class="form-label" for="inputAddress">Address</label>
                   <input type="file" name="image">
                        @error('image')
                        <div class="error-sub-text">
                            {{$message}}
                        </div>
                        @enderror
                          <button type="submit" class="btn btn-primary btn-color">
                    Save Images
                </button>
                </div>
              
            </form>
        </div>
    </div>
</div>
</div>
@endsection
