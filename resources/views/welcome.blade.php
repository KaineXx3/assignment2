@extends('layouts.master')
@section('content')

<style>
    .image {
        width: 100%;  
        height: 450px; 
        object-fit: cover; 
        display: block;
        margin: 0 auto; 
    }

    .card {
        text-align: center; 
        overflow: hidden; 
        height: auto; 
    }

    .card-body .card-title {
        font-size: 1.2em;
        font-weight: bold;
    }

    .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    /* Animated Content */
    .animated {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
    }

    .animated-delay {
        animation-delay: 0.3s;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<h2 class="text-center my-5 animated animated-delay">Our Team</h2>

<section class="animated animated-delay">
  <div class="container">
    <div class="row justify-content-center">
      <!-- Jimmy -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-lg rounded text-center border-0">
            <a href="{{ url('/aboutJimmy') }}">
                <img src="{{ asset('images/jimmy.jfif') }}" alt="" class="image">
            </a>
            <div class="card-body">
                <h3 class="card-title">JIMMY TANG JING MING</h3>
                <h5 class="card-text text-secondary fst-italic">CA21031</h5>
            </div>
        </div>
      </div>

      <!-- Gan -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-lg rounded text-center border-0">
            <a href="{{ url('/aboutGan') }}">
                <img src="{{ asset('images/ganweilin.jfif') }}" alt="" class="image">
            </a>
            <div class="card-body">
                <h3 class="card-title">GAN WEI LIN</h3>
                <h5 class="card-text text-secondary fst-italic">CA21085</h5>
            </div>
        </div>
      </div>

      <!-- Ming Fang -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-lg rounded text-center border-0">
            <a href="{{ url('/aboutMF') }}">
                <img src="{{ asset('images/ooimingfang.jpg') }}" alt="" class="image">
            </a>
            <div class="card-body">
                <h3 class="card-title">OOI MING FANG</h3>
                <h5 class="card-text text-secondary fst-italic">CD21059</h5>
            </div>
        </div>
      </div>

      <!-- Pei Yee -->
      <div class="col-md-3 mb-4">
        <div class="card shadow-lg rounded text-center border-0">
            <a href="{{ url('/aboutPeiYee') }}">
                <img src="{{ asset('images/tpy.jpeg') }}" alt="" class="image">
            </a>
            <div class="card-body">
                <h3 class="card-title">TAN PEI YEE</h3>
                <h5 class="card-text text-secondary fst-italic">CD21073</h5>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection


