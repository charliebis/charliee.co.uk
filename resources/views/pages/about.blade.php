@extends('layouts.default')
@section('title', 'About Me | ' . config('app.name'))
@section('content')
    <section class="hero min-h-16 bg-base-200 pb-36">
        <div class="hero-content text-center">
            <div class="max-w-5xl mt-8 mb-8 lg:mt-16 lg:mb-16 flex items-center justify-center flex-col">
                <h1 class="text-4xl md:text-6xl font-bold">About Me</h1>
                <p class="pt-8 pb-12 lg:pt-12 text-xl lg:text-2xl">
                    Embracing Life's Adventures, One Pedal Stroke at a Time
                </p>
                <div class="flex flex-wrap justify-center items-center content-center gap-4">
                    <a href="{{ route('contact.index') }}" title="Contact Me" class="btn btn-secondary">Contact Me</a>
                    <a href="{{ config('content.social.github.url') }}" title="GitHub" target="_blank" class="btn btn-secondary">GitHub</a>
                    <a href="{{ config('content.social.linkedin.url') }}" title="LinkedIn" target="_blank" class="btn btn-secondary">LinkedIn</a>
                    <a href="{{ config('content.social.twitter.url') }}" title="Twitter" target="_blank" class="btn btn-secondary">Twitter</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container flex gap-5 items-center justify-center justify-items-center mx-auto -mt-36 mb-5">
        <div class="w-full flex-grow bg-primary text-primary-content rounded-box p-8 mx-3 2xl:mx-0">
            <p class="text-lg lg:text-xl py-3">Welcome to my personal website! My name is Charles Edwards (call me Charlie), and I'm thrilled to have this opportunity to
                share a little bit about myself with you.</p>
            <p class="text-lg lg:text-xl py-3">I'm a proud husband as well as the father of two wonderful children. Spending quality time with my
                family is an absolute priority for me, and we enjoy engaging in various activities together. Whether
                it's exploring new places, embarking on outdoor adventures, or simply enjoying a movie night,
                our family moments are treasured and cherished.</p>
            <p class="text-lg lg:text-xl py-3">Beyond my family life, I have a diverse range of interests. One of
                my greatest passions is mountain biking. There's something invigorating about the thrill of
                exploring nature's trails, pushing my limits, and experiencing the freedom that cycling brings.
                Additionally, I find solace and joy in gardening, tending to my green space, and watching it
                flourish. When I'm not outdoors, I indulge in my DIY projects, always eager to learn new skills and
                transform my living space into something uniquely my own.</p>
            <img src="/img/charlie_bike_1b.jpg" class="mx-auto my-12 rounded-lg shadow-2xl sm:w-80max-w-4xl border-8" alt="Charles Edwards"/>
            <p class="text-lg lg:text-xl py-3">Another aspect of my life that keeps me constantly engaged is my passion for technology. I hold a
                degree in computer science and have been working in web development since 2006. However, my journey
                in the world of web began even earlier, as I created my very first website back in 1999. Over the
                years, I have honed my skills, adapting to the ever-evolving landscape of the digital realm. Web
                development is not merely a profession for me; it's a true calling that allows me to unleash my
                creativity and problem-solving abilities.</p>
            <p class="text-lg lg:text-xl py-3">A pivotal moment in my professional life came in 2013 when I transitioned from the office environment
                to working remotely. This shift provided me with greater flexibility,
                autonomy, and work-life balance. I thrive in this setup and have found that being able to work from
                home allows me to stay focused and productive.</p>
            <p class="text-lg lg:text-xl py-3">Apart from my technical expertise, I pride myself on being personable and easy to get along with.
                Collaboration and effective communication are paramount to me, and I enjoy building strong
                relationships with clients, colleagues, and collaborators. I firmly believe that a positive and
                respectful working environment fosters creativity, innovation, and success.</p>
            <p class="text-lg lg:text-xl py-3">Thank you for taking the time to learn a little about me. If you have any questions or would like to
                connect, feel free to reach out via <a href="{{ route('contact.index') }}" title="Contact Me via Email" class="link">email</a> or <a href="{{ config('content.social.linkedin.url') }}" title="LinkedIn" class="link" target="_blank">LinkedIn</a>. I look forward to sharing more with you through my website and
                exploring new opportunities together.</p>
        </div>
    </section>
@stop
