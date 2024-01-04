@extends('layouts.main')

@section('container')
        <!-- home section design -->
        <section class="home" id="home">
            <div class="home-content">
                <h3>Halo, nama ku</h3>
                <h1>{{ $nama }}</h1>
                <p>
                    Saya adalah seorang web developer yang akan membuat website indah dan fungsional bagi orang orang yang ingin membuat perbedaan di dunia
                </p>
                <p>
                    saat ini saya adalah mahasiswa di Universitas Teknologi Yogyakarta , dimana saya sedang belajar bagaimana membuat situs web yang indah dan fungsional menggunakan HTML, CSS, JavaScript, Laravel
                </p>
    
                <div class="social-media">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
    
                <a href="#" class="btn">Download CV</a>
            </div>
    
            <div class="profession-container">
                <div class="profession-box">
                    <div class="profession" style="--i:0;">
                        <i class='bx bx-code-alt'></i>
                        <h3>Web Developer</h3>
                    </div>
                    <div class="profession" style="--i:1;">
                        <i class='bx bx-camera'></i>
                        <h3>Photographer</h3>
                    </div>
                    <div class="profession" style="--i:2;">
                        <i class='bx bx-palette'></i>
                        <h3>Web Designer</h3>
                    </div>
                    <div class="profession" style="--i:3;">
                        <i class='bx bx-video-recording'></i>
                        <h3>Videographer</h3>
                    </div>
    
                    <div class="circle"></div>
                </div>
    
                <div class="overlay"></div>
            </div>
    
            <div class="home-img">
                <img src="{{ $image }}" alt="">
            </div>
        </section>
@section('container')