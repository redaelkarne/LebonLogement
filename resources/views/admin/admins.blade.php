@extends('admin.master')
@section('title','admins')
@section('content')
    <section class="grid">

        <h1 class="heading">admins</h1>




        <form action="{{route('admin.search')}}" method="POST" class="search-form">
            @csrf
            <input type="text" name="search_box" placeholder="search admins..." maxlength="100" required>
            <button type="submit" class="fas fa-search" name="search_btn"></button>
        </form>
        <div class="box-container">


            @foreach($admins as $admin)
            <div class="box">

                <p>name : <span><?= $admin->name; ?></p>
                <p>email : <span><?= $admin->email; ?></p>
                @if($admin->id !=1)
                <form action="{{route('admin.destroy',$admin->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="submit" value="delete admin" onclick="return confirm('delete this admin?');" name="delete" class="delete-btn">
                </form>
                @endif
            </div>
            @endforeach
        </div>
    </section>

@endsection
