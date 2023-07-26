@extends('layouts.default')
@section('content')

<section class="hero min-h-16 bg-base-200 pb-36">
    <div class="hero-content text-center">
        <div class="max-w-5xl mt-8 mb-8 lg:mt-16 lg:mb-16 flex items-center justify-center flex-col">
            <img src="/img/charlie1c.jpg" class="mb-12 w-48 md:w-60 lg:w-72 rounded-full ring ring-primary-content ring-offset-base-100 ring-offset-2 shadow-2xl" alt="Charles Edwards"/>
            <h1 class="text-4xl md:text-6xl font-bold">Charles Edwards</h1>
            <p class="text-base md:text-xl py-6">
                Software Engineer | Leighton Buzzard, U.K.
            </p>
            <div class="flex flex-wrap justify-center items-center content-center gap-4">
                @foreach(config('content.social') as $i => $socialItem)
                    <a href="{{ $socialItem['url'] }}" title="{{ $socialItem['alt'] }}" target="_blank">
                        @if($socialItem['icon']['type'] === 'blade')
                            @include('includes.' . $socialItem['icon']['path'])
                        @else
                            <img src="{{ $socialItem['icon']['path'] }}" alt="{{ $socialItem['alt'] }}" class="border-none" />
                        @endif
                    </a>
                @endforeach
            </div>
            <p class="pt-8 pb-12 lg:pt-12 text-xl lg:text-2xl">
                Hi! I’m Charlie, a Software Engineer with over 20 years of experience in building and maintaining websites and applications.
                I work mainly within LAMP/LEMP stacks, but I’m always open to exploring new technologies and opportunities to learn.
            </p>
            <div class="flex flex-wrap justify-center items-center content-center gap-4">
                <a href="{{ route('about.index') }}" title="About Me" class="btn btn-secondary">More About Me</a>
                <a href="{{ route('contact.index') }}" title="Contact Me" class="btn btn-secondary">Get in touch</a>
            </div>
        </div>
    </div>
</section>
<section class="container flex flex-col lg:flex-row gap-5 items-stretch justify-center justify-items-center mx-auto -mt-36 mb-5">
    <div class="flex-grow bg-primary text-primary-content rounded-box place-items-center p-8 mx-3 2xl:mx-0">
        <h2 class="text-center text-base-content font-bold text-2xl mb-6">Core Skills</h2>
        <ul class="list-disc pl-4 text-lg lg:text-xl">
            <li class="mb-3">Full-stack web development, including experience in custom tracking, reporting, content management systems (CMS), API platforms, mobile optimization, and search engine optimisation (SEO). My experience spans a wide range of areas, enabling me to deliver comprehensive solutions that meet diverse project requirements.</li>
            <li class="mb-3">Languages, frameworks, systems, patterns including PHP, Laravel, Zend, Javascript/JQuery/AJAX, HTML, CSS, Tailwind, SQL, XML, REST, JSON, MVC.</li>
            <li class="mb-3">Proficiency with web and related technologies, including Linux, Apache/Nginx, MySQL/MariaDB, PostgreSQL, AWS, Docker, CloudFlare, Wordpress, Google apps including Search Console, Analytics, Workspace, Tag Manager, Postmaster tools.</li>
            <li class="mb-3">I possess a solid understanding of Affiliate Marketing concepts, platforms, and integrations, and have worked extensively with price comparison, voucher codes, and deals sites.</li>
            <li class="mb-3">Email Service Provider concepts, platforms and integrations. I have a lot of experience with HTML email templates, integration of ESP systems with client back-ends via API, as well as ESP automation flows.</li>
        </ul>
    </div>
</section>
<section class="container flex flex-col lg:flex-row gap-5 items-stretch justify-center justify-items-center mx-auto mb-5">
    <div class="lg:w-1/2 flex-grow bg-primary text-primary-content rounded-box place-items-center p-8 mx-3 2xl:mx-0">
        <h2 class="text-center text-base-content font-bold text-2xl mb-6">Other Skills, Experience &amp; Technologies</h2>
        <ul class="list-disc pl-4 text-lg lg:text-xl">
            <li class="mb-3">Development methodologies inc. AGILE, Kanban.</li>
            <li class="mb-3">Issue tracking systems (Jira, YouTrack etc).</li>
            <li class="mb-3">Day to day use of code versioning systems, primarily Git in recent times, with earlier experience utilising SVN.</li>
            <li class="mb-3">Setting up and managing remote repositories using GitHub. I also have experience with BitBucket and GitLab.</li>
            <li class="mb-3">CI/CD solutions, mainly Atlassian Bamboo.</li>
            <li class="mb-3">JetBrains software (mainly PHPStorm and DataGrip).</li>
            <li class="mb-3">Typical I.T. and communication software such as MS Office, Google Docs, MS Teams, Slack.</li>
            <li class="mb-3">As a senior software developer, I have demonstrated my commitment to fostering a collaborative and supportive team environment by actively mentoring and assisting junior developers.</li>
        </ul>
    </div>
    <div class="lg:w-1/2 flex-grow bg-primary text-primary-content rounded-box place-items-center p-8 mx-3 2xl:mx-0">
        <h2 class="text-center text-base-content font-bold text-2xl mb-6">Developing Skills</h2>
        <ul class="list-disc pl-4 text-lg lg:text-xl">
            <li class="mb-3">After gaining valuable experience with Laravel 10 throughout the past year, I am eagerly anticipating the upcoming release of <a href="https://laravel-news.com/laravel-11" class="link" title="Laravel 11" target="_blank">Laravel 11</a> later this year. I am committed to further expanding my expertise in this framework as I move forward.</li>
            <li class="mb-3">I am in the early stages of learning Vue.js. After many years of experience with Vanilla Javascript and jQuery, it's time to learn a more modern front-end framework.</li>
            <li class="mb-3">I am currently in the process of setting up GitLab as a self-hosted installation, including CI/CD runners. This is to improve my capabilities with this software.</li>
        </ul>
    </div>
</section>
@include('includes.testimonials')
@stop
