@extends('admin.master')
@section('title','View_property')
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
@endsection
@section('content')

    <!-- view property section starts  -->

    <section class="view-property">

        <h1 class="heading">property details</h1>



        @if($property->count() > 0){

        <div class="details">
            <div class="swiper images-container">
                <div class="swiper-wrapper">
                        <?php $path="attachments/$property->user_id/$property->id/$property->image_01"?>
                    <img src="{{\Illuminate\Support\Facades\URL::asset($path) }} " alt="" class="swiper-slide">

                @if(!empty($property->image_02))
                            <?php $path="attachments/$property->user_id/$property->id/$property->image_02"?>
                        <img src="{{\Illuminate\Support\Facades\URL::asset($path) }} " alt="" class="swiper-slide">

                    @endif
                    @if(!empty($property->image_03))

                            <?php $path="attachments/$property->user_id/$property->id/$property->image_03"?>
                        <img src="{{\Illuminate\Support\Facades\URL::asset($path) }} " alt="" class="swiper-slide">

                    @endif
                    @if(!empty($property->image_04))

                            <?php $path="attachments/$property->user_id/$property->id/$property->image_04"?>
                            <img src="{{\Illuminate\Support\Facades\URL::asset($path) }} " alt="" class="swiper-slide">

                    @endif
                    @if(!empty($property->image_05))
                            <?php $path="attachments/$property->user_id/$property->id/$property->image_05"?>
                        <img src="{{\Illuminate\Support\Facades\URL::asset($path) }} " alt="" class="swiper-slide">
                    @endif
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <h3 class="name">{{$property->property_name}}</h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span>{{$property->address}}</span></p>
            <div class="info">
                <p><i class="fas fa-euro"></i><span>{{$property->price}}</span></p>
                <p><i class="fas fa-user"></i><span>{{$property->user_name}}</span></p>
                <p><i class="fas fa-phone"></i><a href="tel:{{$user->phone}}">{{$user->phone}}</a></p>
                <p><i class="fas fa-building"></i><span>{{$property->type}}</span></p>
                <p><i class="fas fa-house"></i><span>{{$property->offer}}</span></p>
                <p><i class="fas fa-calendar"></i><span>{{$property->date}}</span></p>
            </div>
            <h3 class="title">details</h3>
            <div class="flex">
                <div class="box">
                    <p><i>rooms :</i><span>{{$property->bnk}} BHK</span></p>
                    <p><i>deposit amount : </i><span><span class="fas fa-euro" style="margin-right: .5rem;"></span>{{$property->desopite}} </span></p>
                    <p><i>status :</i><span>{{$property->status}}</span></p>
                    <p><i>bedroom :</i><span>{{$property->bedroom}}</span></p>
                    <p><i>bathroom :</i><span>{{$property->bathroom}}</span></p>
                    <p><i>balcony :</i><span>{{$property->balcony}}</span></p>
                </div>
                <div class="box">
                    <p><i>carpet area :</i><span>{{$property->carpet}}sqft</span></p>
                    <p><i>age :</i><span>{{$property->age}} years</span></p>
                    <p><i>total floors :</i><span>{{$property->total_floors}}</span></p>
                    <p><i>room floor :</i><span>{{$property->room_floor}}</span></p>
                    <p><i>furnished :</i><span>{{$property->furnished}}</span></p>
                    <p><i>loan :</i><span>{{$property->loan}}</span></p>
                </div>
            </div>
            <h3 class="title">amenities</h3>
            <div class="flex">
                <div class="box">
                    <p><i class="fas fa-<?php if($property->lift == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>lifts</span></p>
                    <p><i class="fas fa-<?php if($property['security_guard'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>security guards</span></p>
                    <p><i class="fas fa-<?php if($property['play_ground'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>play ground</span></p>
                    <p><i class="fas fa-<?php if($property['garden'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>gardens</span></p>
                    <p><i class="fas fa-<?php if($property['water_supply'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>water supply</span></p>
                    <p><i class="fas fa-<?php if($property['power_backup'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>power backup</span></p>
                </div>
                <div class="box">
                    <p><i class="fas fa-<?php if($property['parking_area'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>parking area</span></p>
                    <p><i class="fas fa-<?php if($property['gym'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>gym</span></p>
                    <p><i class="fas fa-<?php if($property['shopping_mall'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>shopping mall</span></p>
                    <p><i class="fas fa-<?php if($property['hospital'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>hospital</span></p>
                    <p><i class="fas fa-<?php if($property['school'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>schools</span></p>
                    <p><i class="fas fa-<?php if($property['market_area'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>market area</span></p>
                </div>
            </div>
            <h3 class="title">description</h3>
            <p class="description"><?= $property['description']; ?></p>
            <form action="{{ route('property.destroy', $property->id) }}" method="POST" style="margin-top: 1rem;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this property?')" class="btn btn-danger">Delete Property</button>
</form>
        </div>
        @else
            echo '<p class="empty">property not found! <a href="{{route('property')}}" style="margin-top:1.5rem;" class="btn">add new</a></p>';

        @endif

    </section>

    <!-- view property section ends -->






@endsection


@section('script')
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>

    var swiper = new Swiper(".images-container", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop:true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 200,
            modifier: 3,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

</script>

@endsection







