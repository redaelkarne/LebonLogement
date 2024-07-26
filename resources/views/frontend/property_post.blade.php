@extends('frontend.layout.master')
@section('title','Property post')
@section('property_post')

<section class="property-form">

    <form action="{{route('property.store')}}" method="POST" enctype="multipart/form-data">
       @csrf
        <h3>property details</h3>
        <div class="box">
            <p>property name <span>*</span></p>
            <input type="text" name="property_name" required maxlength="50" placeholder="enter property name" class="input">
        </div>
        <div class="flex">
            <div class="box">
                <p>property price <span>*</span></p>
                <input type="number" name="price" required min="0" max="9999999999" maxlength="10" placeholder="enter property price" class="input">
            </div>
            <div class="box">
                <p>deposite amount <span>*</span></p>
                <input type="number" name="deposite" required min="0" max="9999999999" maxlength="10" placeholder="enter deposite amount" class="input">
            </div>
            <div class="box">
                <p>property address <span>*</span></p>
                <input type="text" name="address" required maxlength="100" placeholder="enter property full address" class="input">
            </div>
            <div class="box">
                <p>offer type <span>*</span></p>
                <select name="offer" required class="input">
                    <option value="sale">sale</option>
                    <option value="resale">resale</option>
                    <option value="rent">rent</option>
                </select>
            </div>
            <div class="box">
                <p>property type <span>*</span></p>
                <select name="type" required class="input">
                    <option value="flat">flat</option>
                    <option value="house">house</option>
                    <option value="shop">shop</option>
                </select>
            </div>
            <div class="box">
                <p>property status <span>*</span></p>
                <select name="status" required class="input">
                    <option value="ready to move">ready to move</option>
                    <option value="under construction">under construction</option>
                </select>
            </div>
            <div class="box">
                <p>furnished status <span>*</span></p>
                <select name="furnished" required class="input">
                    <option value="furnished">furnished</option>
                    <option value="semi-furnished">semi-furnished</option>
                    <option value="unfurnished">unfurnished</option>
                </select>
            </div>
            <div class="box">
                <p>how many BHK <span>*</span></p>
                <select name="bhk" required class="input">
                    <option value="1">1 BHK</option>
                    <option value="2">2 BHK</option>
                    <option value="3">3 BHK</option>
                    <option value="4">4 BHK</option>
                    <option value="5">5 BHK</option>
                    <option value="6">6 BHK</option>
                    <option value="7">7 BHK</option>
                    <option value="8">8 BHK</option>
                    <option value="9">9 BHK</option>
                </select>
            </div>
            <div class="box">
                <p>how many bedrooms <span>*</span></p>
                <select name="bedroom" required class="input">
                    <option value="0">0 bedroom</option>
                    <option value="1" selected>1 bedroom</option>
                    <option value="2">2 bedroom</option>
                    <option value="3">3 bedroom</option>
                    <option value="4">4 bedroom</option>
                    <option value="5">5 bedroom</option>
                    <option value="6">6 bedroom</option>
                    <option value="7">7 bedroom</option>
                    <option value="8">8 bedroom</option>
                    <option value="9">9 bedroom</option>
                </select>
            </div>
            <div class="box">
                <p>how many bathrooms <span>*</span></p>
                <select name="bathroom" required class="input">
                    <option value="1">1 bathroom</option>
                    <option value="2">2 bathroom</option>
                    <option value="3">3 bathroom</option>
                    <option value="4">4 bathroom</option>
                    <option value="5">5 bathroom</option>
                    <option value="6">6 bathroom</option>
                    <option value="7">7 bathroom</option>
                    <option value="8">8 bathroom</option>
                    <option value="9">9 bathroom</option>
                </select>
            </div>
            <div class="box">
                <p>how many balconys <span>*</span></p>
                <select name="balcony" required class="input">
                    <option value="0">0 balcony</option>
                    <option value="1">1 balcony</option>
                    <option value="2">2 balcony</option>
                    <option value="3">3 balcony</option>
                    <option value="4">4 balcony</option>
                    <option value="5">5 balcony</option>
                    <option value="6">6 balcony</option>
                    <option value="7">7 balcony</option>
                    <option value="8">8 balcony</option>
                    <option value="9">9 balcony</option>
                </select>
            </div>
            <div class="box">
                <p>carpet area <span>*</span></p>
                <input type="number" name="carpet" required min="1" max="9999999999" maxlength="10" placeholder="how many squarefits?" class="input">
            </div>
            <div class="box">
                <p>property age <span>*</span></p>
                <input type="number" name="age" required min="0" max="99" maxlength="2" placeholder="how old is property?" class="input">
            </div>
            <div class="box">
                <p>total floors <span>*</span></p>
                <input type="number" name="total_floors" required min="0" max="99" maxlength="2" placeholder="how floors available?" class="input">
            </div>
            <div class="box">
                <p>floor room <span>*</span></p>
                <input type="number" name="room_floor" required min="0" max="99" maxlength="2" placeholder="property floor number" class="input">
            </div>
            <div class="box">
                <p>loan <span>*</span></p>
                <select name="loan" required class="input">
                    <option value="available">available</option>
                    <option value="not available">not available</option>
                </select>
            </div>
        </div>
        <div class="box">
            <p>property description <span>*</span></p>
            <textarea name="description" maxlength="1000" class="input" required cols="30" rows="10" placeholder="write about property..."></textarea>
        </div>
        <div class="checkbox">
            <div class="box">
                <p><input type="checkbox" name="lift" value="yes" />lifts</p>
                <p><input type="checkbox" name="security_guard" value="yes" />security guard</p>
                <p><input type="checkbox" name="play_ground" value="yes" />play ground</p>
                <p><input type="checkbox" name="garden" value="yes" />garden</p>
                <p><input type="checkbox" name="water_supply" value="yes" />water supply</p>
                <p><input type="checkbox" name="power_backup" value="yes" />power backup</p>
            </div>
            <div class="box">
                <p><input type="checkbox" name="parking_area" value="yes" />parking area</p>
                <p><input type="checkbox" name="gym" value="yes" />gym</p>
                <p><input type="checkbox" name="shopping_mall" value="yes" />shopping_mall</p>
                <p><input type="checkbox" name="hospital" value="yes" />hospital</p>
                <p><input type="checkbox" name="school" value="yes" />school</p>
                <p><input type="checkbox" name="market_area" value="yes" />market area</p>
            </div>
        </div>
        <div class="box">
            <p>image 01 <span>*</span></p>
            <input type="file" name="image_01" class="input" accept="image/*" required>
        </div>
        <div class="flex">
            <div class="box">
                <p>image 02</p>
                <input type="file" name="image_02" class="input" accept="image/*">
            </div>
            <div class="box">
                <p>image 03</p>
                <input type="file" name="image_03" class="input" accept="image/*">
            </div>
            <div class="box">
                <p>image 04</p>
                <input type="file" name="image_04" class="input" accept="image/*">
            </div>
            <div class="box">
                <p>image 05</p>
                <input type="file" name="image_05" class="input" accept="image/*">
            </div>
        </div>
        <input type="submit" value="post property" class="btn" name="post">
    </form>

</section>
@endsection

