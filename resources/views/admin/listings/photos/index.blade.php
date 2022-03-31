@extends('layouts.admin') @section('page-title','Show All Photos')
@section('content')

<div id="mainContent">
    <div class="row">
<div class="bgc-white bd bdrs-3 p-20 mB-20">
    <h4 class="c-grey-900 mB-20">show all Photos</h4>
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as  $photo)
                
            
            <tr>
                <th scope="row">{{$photo->id}}</th>
                <td> 
                  <img src="/img/{{$photo->name}}" alt="" style="width: 300px;">
                </td>
                <td>{{$photo->name}}</td>
                {{-- <td>
                @if($photo->status=='published')
                        <div class="btn cur-p btn-success" style="width: 100px;text-transform:capitalize;font-size:.8rem;">
                        {{$photo->status}}
                    </div>
                    
                
                @else
                     
                    <div class="btn cur-p btn-warning" style="width: 100px;text-transform:capitalize;font-size:.8rem;">
                       {{$photo->status}}
                    </div>
                    </td>
                @endif --}}
               
             
                
            </tr>
          
         @endforeach   
         
            
        </tbody>
    </table>
    {{$photos->links()}}
</div>

    </div>
</div>

@endsection
