@extends("layouts.main")

@section('content')
    <div align="center">
        <h1> - </h1>
        <img src="https://marketplace.canva.com/EAFNlUJs5g4/2/0/1600w/canva-white-simple-certificate-of-appreciation-Fcz7KkZ5YaU.jpg" style="width:60%">
        <a href="{{ route('profile.show', ['user' => Auth::user()]) }}">
            <p><button class="w3-button w3-light-grey w3-block" style="width:200px">Back To Profile</button></p>
        </a>
    </div>


@endsection
