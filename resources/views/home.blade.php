@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Anggota Kelompok') }}
        </div>
        <div class="card-body">
            {{ __('Final Pemrograman WEB 2!') }}
        </div>
    </div>
    <h1></h1>
    <h2><center>KELOMPOK 1 </center></h2>
    <img src="{{ asset('img/aiii.jpg') }}" width ="200" height="250"> 
    <br>
    <p>Nur Aisya Heri</p>
    <img src="{{ asset('img/rin.jpg') }}" width ="200" height="250">
    <br>
    <p>Nurina Khairiah Usman</p>
    <img src="{{ asset('img/selsa.jpg') }}" width ="200" height="250">
    <br>
    <p>Selsa Novia Safitri</p>
    <img src="{{ asset('img/nirwan.jpeg') }}" width ="200" height="250">
    <br>
    <p>Nirwanuddin</p>
    <img src="{{ asset('img/maruf.jpeg') }}" width ="200" height="250">
    <br>
    <p>Muh. Ma'ruf Amiruddin</p>
@endsection
