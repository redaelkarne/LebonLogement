@extends('frontend.layout.master')
@section('title','Register')
@section('register')
    <!-- register section starts  -->

    <section class="form-container">

        <form action="{{ route('register') }}" method="post">
            @csrf
            <h3>create an account!</h3>
            <input type="tel" name="name" required maxlength="50" placeholder="enter your name" class="box">
            <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
            <input type="text" name="phone" required maxlength="11" placeholder="enter your phone" class="box">
            <input type="password" name="password" required maxlength="20" placeholder="enter your password" class="box">
            <input type="password" name="c_pass" required maxlength="20" placeholder="confirm your password" class="box">
            <p>already have an account? <a href="{{route('login')}}">login now</a></p>
            <input type="submit" value="register now" name="submit" class="btn">
        </form>

    </section>

    <!-- register section ends -->
@endsection















