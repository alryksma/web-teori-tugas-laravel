@extends('layouts.main')

@section('container')
        <!-- about section design -->
        <section class="about" id="about">
            <div class="about-img">
                <img src="images/alipgitar.jpg" alt="">
            </div>
    
            <div class="about-content">
                <h2 class="heading">About <span>Me</span></h2>
                <h3>
                    halo semua, selamat datang di website saya! aku alif, seorang web developer yang senang belajar tentang Teknologi dan memecahkan masalah dengan coding!!!
                    {{-- Hi there, welcome to my website! I'm Cristian,
                    a passionate web developer who enjoys learning new technologies
                    and solving problems with code! --}}
                </h3>
                <p>
                    website ini adlah web personal saya dimana saya menuliskan tentang web development  yang membuat tertarik dan menginspirasi saya
                    {{-- This website is my personal blog where I write about web development
                    topics that interest me and inspire me. --}}
                </p>
                <p>
                    Thank you for visiting my website and getting to know me better. I hope you
                    enjoyed reading my blog posts and
                    found
                    them useful and informative. If you want to read more of my posts, subscribe
                    to my newsletter where I send
                    weekly
                    updates on web development trends and tips. If you have any feedback or
                    suggestions, please let me know. I'd love to hear from you.
                </p>
                <a href="#" class="btn">Read More</a>
            </div>
        </section>
@endsection