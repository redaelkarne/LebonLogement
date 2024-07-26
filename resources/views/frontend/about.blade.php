@extends('frontend.layout.master')
@section('title','About Us')
@section('about')
<!-- about section starts  -->
<section class="about">

   <div class="row">
      <div class="image">
         <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/about-img.svg')}}" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorem provident voluptatum distinctio laborum veritatis vitae suscipit praesentium fugiat unde?</p>
         <a href="{{route('contact')}}" class="inline-btn">contact us</a>
      </div>
   </div>

</section>
<!-- about section ends -->
@endsection
@section('steps')
<!-- steps section starts  -->
<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/step-1.png')}}" alt="">
         <h3>search property</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

      <div class="box">
         <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/step-2.png')}}" alt="">
         <h3>contact agents</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

      <div class="box">
         <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/step-3.png')}}" alt="">
         <h3>enjoy property</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

   </div>

</section>
<!-- steps section ends -->
@endsection
@section('review')
<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/pic-1.png')}}" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/pic-2.png')}}" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/pic-3.png')}}" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/pic-4.png')}}" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/pic-5.png')}}" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/pic-6.png')}}" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

   </div>

</section>
@endsection
<!-- review section ends -->











