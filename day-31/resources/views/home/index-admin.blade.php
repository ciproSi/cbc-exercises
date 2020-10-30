@extends('layouts.main-admin', ['title' => 'User dashboard'])

@section('content')



{{-- logout is post method so we need a  --}}
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>



@endsection