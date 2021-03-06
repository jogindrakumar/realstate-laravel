@extends('layouts.admin') @section('page-title','Show All Listings')
@section('content')

<div id="mainContent">
    <div class="row">
<div class="bgc-white bd bdrs-3 p-20 mB-20">
    <h4 class="c-grey-900 mB-20">show all Listings</h4>
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listings as  $listing)
                
            
            <tr>
                <th scope="row">{{$listing->id}}</th>
                <td> 
                    <a href="{{route('admin.listings.edit', [
                'slug' => $listing->slug,
                'id'=> $listing->id
                ])}}">
                    {{$listing->address}}
                <br>{{$listing->address2}} 
                 {{$listing->city}}
                {{$listing->state}}
                {{$listing->zipcode}}
                </a>
                </td>
                <td>
                @if($listing->status=='published')
                        <div class="btn cur-p btn-success" style="width: 100px;text-transform:capitalize;font-size:.8rem;">
                        {{$listing->status}}
                    </div>
                    
                
                @else
                     
                    <div class="btn cur-p btn-warning" style="width: 100px;text-transform:capitalize;font-size:.8rem;">
                       {{$listing->status}}
                    </div>
                    </td>
                @endif
               
             
                
            </tr>
          
         @endforeach   
         
            
        </tbody>
    </table>
    {{$listings->links()}}
</div>

    </div>
</div>

@endsection
