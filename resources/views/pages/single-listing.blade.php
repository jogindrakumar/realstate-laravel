@extends('layouts.main')

@section('page-title','23 Grand Ave - JK Realty')
@section('content')
<div class="single-listing-page">

    <div class="listing-top">
        <img src="https://www.contemporist.com/wp-content/uploads/2021/02/modern-house-outdoor-patio-swimming-pool-170221-144-01.jpg" alt="" 
        class="listing-top__img">
        <div class="listing-top__form-wrapper">
            <div class="container">
                <form action="" class="listing-top__form">

                <label class="listing-top__form-label">Schedule A Tour</label>
                <div class="listing-top__form-group listing-top__form-group--horz">
                    <div class="listing-top__form-option">In-Person</div>
                    <div class="listing-top__form-option">Video Chat</div>
                </div>
                <label class="listing-top__form-label">Date</label>
                <div class="listing-top__form-group listing-top__form-group--horz">
                <div class="listing-top__form-option">March 23</div>
                </div>

                <label class="listing-top__form-label">Time</label>
                <div class="listing-top__form-group">
                <div class="listing-top__form-option">11 AM</div>
                </div>
                 <label class="listing-top__form-label">Personal Info</label>
                <div class="listing-top__form-group ">
                <div class="listing-top__form-option">Enter Phone</div>
                </div>
                <div class="listing-top__form-group ">
                <div class="listing-top__form-option">Enter E-mail</div>
                </div>
                <div class="listing-top__form-group ">
                <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
                </div>
              
            </form>
            </div>
            
        </div>
    </div>
    <section class="listing-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>2152 Grand Ave <br>
                    India,IND 110058
                    </h1>
                    <div class="listing-info__details">
                        <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> 4 </span>
                        <span class="listing-info__details-text"> <i class="fa-solid fa-bath"></i> 3  </span>
                        <span class="listing-info__details-text"><i class="fa-solid fa-ruler-combined"></i> 2440 SQFT </span>
                   
                    </div>
                </div>
                <div class="col-md-5">
                     <span class="listing-info__agent-title">Agent</span>
                    <span class="listing-info__agent-name">John Smith</span>
                    <p class="listing-info__agent-profile">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Nobis vero, aperiam impedit delectus deleniti cum ex similique provident rem mollitia,
                          repudiandae in voluptate quisquam fugit ullam assumenda aliquid voluptatibus quod.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="listing-extras">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="listing-extras__details">
                         <h2>More Info</h2>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero natus reiciendis tenetur deserunt voluptas necessitatibus esse labore perferendis error mollitia, cupiditate expedita odit optio atque cumque, aliquam nobis est odio.
                         Quaerat recusandae placeat autem id nemo libero vero sit, doloremque quia omnis necessitatibus harum quibusdam vel quos optio iste quasi rerum amet. Corrupti rerum laboriosam odit dolorum possimus accusantium necessitatibus!
                         Quae nemo vel, architecto, eius eaque dolorem illum laboriosam alias, tempora odit commodi laborum velit. Molestiae architecto obcaecati sapiente magnam sint iusto, laborum molestias, nam accusantium adipisci modi illum officiis.
                         Consectetur quia tempore autem alias in eius, reprehenderit ad aspernatur similique deserunt. Soluta facilis dolorum quibusdam officiis neque repellendus aperiam dignissimos vel quisquam fugit. Delectus perspiciatis nostrum rem debitis quos!
                         Tenetur accusantium debitis ratione sint quidem assumenda tempora, architecto atque, modi est alias quia? Veniam expedita, nesciunt hic optio quos est officia eius quaerat quam rerum, minima distinctio consectetur aperiam!</p>
                         <h3>Details</h3>
                    <ul>   
                   <li>Test</li>
                   <li>Test</li>
                   <li>Test</li>
                   <li>Test</li>
                   <li>Test</li>
                   <li>Test</li>
                   <li>Test</li>
                   <li>Test</li>
                   <li>Test</li>
                   <li>Test</li>
                    </ul>
                    </div>
                  
                </div>
                <div class="col-md-5">
                     <h2>Images</h2>
                  <div class="listing-extras__gallery">
                      <img src="https://www.contemporist.com/wp-content/uploads/2021/02/modern-house-outdoor-patio-swimming-pool-170221-144-01.jpg" alt="">
                      <img src="https://www.contemporist.com/wp-content/uploads/2021/02/modern-house-outdoor-patio-swimming-pool-170221-144-01.jpg" alt="">
                      <img src="https://www.contemporist.com/wp-content/uploads/2021/02/modern-house-outdoor-patio-swimming-pool-170221-144-01.jpg" alt="">
                      <img src="https://www.contemporist.com/wp-content/uploads/2021/02/modern-house-outdoor-patio-swimming-pool-170221-144-01.jpg" alt="">
                      <img src="https://www.contemporist.com/wp-content/uploads/2021/02/modern-house-outdoor-patio-swimming-pool-170221-144-01.jpg" alt="">
                  </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- End listings-page --}}

@endsection