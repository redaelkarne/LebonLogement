@extends('admin.master')
@section('title', 'User Favorites')

@section('content')
<section class="grid">
    <h1 class="heading">User Favorites</h1>

    <div class="box-container">
        @foreach($users as $user)
        <div class="box">
            <h2>{{ $user->name }}</h2>
            <p>Email: <span>{{ $user->email }}</span></p>
            <h3>Favorites:</h3>
            @if($user->favorites->isEmpty())
                <p>No favorites added yet.</p>
            @else
                <ul>
                    @foreach($user->favorites as $favorite)
                        <li>
                            <strong>Property:</strong> {{ optional($favorite->property)->property_name ?? 'N/A' }}<br>
                            <strong>Address:</strong> {{ optional($favorite->property)->address ?? 'N/A' }}<br>
                            <strong>Price:</strong> {{ optional($favorite->property)->price ?? 'N/A' }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        @endforeach
    </div>
</section>
@endsection
