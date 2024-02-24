@extends('layouts.default')
@section('title', 'Work | ' . config('app.name'))
@section('content')

<section class="hero min-h-16 bg-base-200 pb-36">
    <div class="hero-content text-center">
        <div class="max-w-5xl mt-8 mb-8 lg:mt-16 lg:mb-16 flex items-center justify-center flex-col">
            <h1 class="text-4xl md:text-6xl font-bold">Work</h1>
            <p class="pt-8 pb-5 lg:pt-12 text-xl lg:text-2xl">
                Some of the jobs and projects I've worked on during my career.
            </p>
            <p class="pb-12 text-xl lg:text-2xl">
                If you'd like a copy of my C.V. please <a class="link" href="{{ route('contact.index') }}" title="Contact Me" target="_blank">contact me</a>.
            </p>
            <div class="flex flex-wrap justify-center items-center content-center gap-4">
                <a href="{{ route('contact.index') }}" title="Contact Me" class="btn btn-secondary">Contact Me</a>
                <a href="{{ config('content.social.github.url') }}" title="GitHub" target="_blank" class="btn btn-secondary">GitHub</a>
            </div>
        </div>
    </div>
</section>
<section class="container flex flex-col lg:flex-row gap-5 items-stretch justify-center justify-items-center mx-auto -mt-36 mb-5">
    <div class="w-full flex-grow bg-primary rounded-box place-items-center p-8 mx-3 lg:mx-0">
        <img src="/img/work/fusemetrix.png" class="rounded-lg mb-8 max-w-sm shadow-2xl w-3/4 border-4 mx-auto" alt="FuseMetrix" />
        <div class="w-full">
            <h2 class="text-center font-bold text-3xl lg:text-4xl mb-4 w-full">FuseMetrix</h2>
            <h3 class="text-center font-bold text-xl mb-4 w-full">Senior Developer</h3>
        </div>
        <p class="text-lg lg:text-xl pt-6 pb-6">
            My current, full-time role. <a class="link" href="https://www.fusemetrix.com" title="FuseMetrix" target="_blank">FuseMetrix</a> is a multi-tenant, Software as a Service (SaaS) company, providing a
            variety of web-based office systems, primarily to leisure attraction businesses, such as open farms, water parks, skiing and zip lining centres . This includes online booking, check-in, EPOS, CRM and finance
            systems.
        </p>
        <p class="text-lg lg:text-xl pb-6">
            My role at <a class="link" href="https://www.fusemetrix.com" title="FuseMetrix" target="_blank">FuseMetrix</a> includes the maintenance and enhancement of the core system, as well as bespoke client systems. An
            example of one of my recent projects is the integration of a car parking management API, into the core system. This allows for the issuance (or rescheduling/cancellation) of on-site parking permits, as part of the
            existing ticket booking process.
        </p>
    </div>
</section>
<section class="container flex flex-col lg:flex-row gap-5 items-stretch justify-center justify-items-center mx-auto mb-5">
    <div class="lg:w-1/2 flex-grow bg-primary rounded-box place-items-center p-8 mx-3 lg:mx-0">
        <img src="/img/work/glide.png" class="rounded-lg mb-8 max-w-sm shadow-2xl w-3/4 border-4 mx-auto" alt="Glide Utilities"/>
        <div class="w-full">
            <h2 class="text-center font-bold text-3xl lg:text-4xl mb-4 w-full">Glide Utilities</h2>
            <h3 class="text-center font-bold text-xl mb-4 w-full">Senior Software Engineer</h3>
        </div>
        <p class="text-lg lg:text-xl pt-6 pb-6">
            Working at <a class="link" href="https://www.glide.co.uk" title="Glide" target="_blank">Glide</a> gave me valuable exposure to much larger systems and applications than most of my previous roles.
            I had the opportunity to work on the main company website, internal APIs (including Laravel APIs), as well as the company's internal back-office system. This
            system is a monolithic, Symfony-based PHP application with a mature and extensive code base, providing me with some interesting challenges.
        </p>
        <p class="text-lg lg:text-xl pb-6">
            Over the summer of 2022, I led the project to migrate the company's financial system from Microsoft Navision to Sage X3. This involved the development of a PHP application
            which produced large amounts of financial data, sanitising and chunking that data, before pushing it to Sage X3 via its SOAP API. It also required the handling of data,
            pulled from Sage X3, into the company database. Despite some technical challenges, in particular those caused by the sheer volume of data being processed, the project was successful.
        </p>
        <p class="text-lg lg:text-xl pb-6">
            As a senior engineer, my time at <a class="link" href="https://www.glide.co.uk" title="Glide" target="_blank">Glide</a> also involved the mentoring of more junior engineers as well as
            attending (and often representing the development team at) regular management meetings.
        </p>
    </div>
    <div class="lg:w-1/2 flex-grow bg-primary rounded-box place-items-center p-8 mx-3 lg:mx-0">
        <img src="/img/work/discountvouchers.png" class="rounded-lg mb-8 max-w-sm shadow-2xl w-3/4 border-4 mx-auto" alt="DiscountVouchers.co.uk"/>
        <div class="w-full">
            <h2 class="text-center font-bold text-3xl lg:text-4xl mb-4 w-full break-words">Discount Vouchers</h2>
            <h3 class="text-center font-bold text-xl mb-4 w-full">Lead Developer</h3>
        </div>
        <p class="text-lg lg:text-xl pt-6 pb-6">
            Offering discount voucher codes and daily deals, <a class="link" href="https://www.discountvouchers.co.uk" title="DiscountVouchers.co.uk" target="_blank">DiscountVouchers.co.uk</a> is a website that started life in 2008
            and has grown and evolved ever since. Working there between 2013 and 2022, <a class="link" href="https://www.discountvouchers.co.uk" title="DiscountVouchers.co.uk" target="_blank">DiscountVouchers.co.uk</a> represents
            my longest running role so far.
        </p>
        <p class="text-lg lg:text-xl pb-6">
            While working at this company, I built the back-office admin system, the main company REST API and in 2019, I rebuilt the <a class="link" href="https://www.discountvouchers.co.uk" title="DiscountVouchers.co.uk" target="_blank">main website</a> into its current form.
            I was also responsible for the company's Email Service Provider integration, including marketing and transactional email templates, mailing lists and segmentation, as well as creating automation flows as required (for example contact reengagement processes).
        </p>
        <p class="text-lg lg:text-xl pb-6">
            In addition to this, I managed most third party services that the company used, including Google Workspace (e.g. provisioning Gmail and Drive storage to staff) Google Analytics and GitHub.
        </p>
    </div>
</section>
<section class="container flex flex-col lg:flex-row gap-5 items-stretch justify-center justify-items-center mx-auto mb-16">
    <div class="lg:w-1/2 flex-grow bg-primary rounded-box place-items-center p-8 mx-3 lg:mx-0">
        <img src="/img/work/lensfinder.png" class="rounded-lg mb-12 max-w-sm shadow-2xl w-3/4 border-4 mx-auto" alt="LensFinder.co.uk"/>
        <div class="w-full">
            <h2 class="text-center font-bold text-3xl lg:text-4xl mb-4 w-full">LensFinder.co.uk</h2>
            <h3 class="text-center font-bold text-xl mb-4 w-full">Founder</h3>
        </div>
        <p class="text-lg lg:text-xl pt-6 pb-6">
            <a class="link" href="http://www.lensfinder.co.uk" title="LensFinder.co.uk" target="_blank">LensFinder.co.uk</a> is a price comparison site I founded and built back in 2007. It compares the prices of several major online contact lens retailers, allowing users to quickly
            and easily discover the most affordable option for buying their contact lenses. It takes into account delivery costs, variations in price according to unit quantity and, after
            becoming established and reasonably well known, even exclusive discount codes for some of the retailers.
        </p>
        <p class="text-lg lg:text-xl pb-6">
            This was my first foray into founding my own revenue-generating online business and while being not only a successful site, it also gave me a much greater understanding of the non-technical
            aspects of operating an affiliate marketing based website.
        </p>
        <p class="text-lg lg:text-xl pb-6">
            I sold <a class="link" href="http://www.lensfinder.co.uk" title="LensFinder.co.uk" target="_blank">LensFinder.co.uk</a> in 2010 and despite the fact that the site seems to have fallen into disuse, this remains one of the most pivotal moments in my career so far.
        </p>
    </div>
    <div class="lg:w-1/2 flex-grow bg-primary rounded-box place-items-center p-8 mx-3 lg:mx-0">
        <img src="/img/work/asapventures.png" class="rounded-lg mb-12 max-w-sm shadow-2xl w-3/4 border-4 mx-auto" alt="ASAP Ventures"/>
        <div class="w-full">
            <h2 class="text-center font-bold text-3xl lg:text-4xl mb-4 w-full">ASAP Ventures</h2>
            <h3 class="text-center font-bold text-xl mb-4 w-full">Web Developer</h3>
        </div>
        <p class="text-lg lg:text-xl pt-6 pb-6">
            During my time at ASAP Ventures (2006 to 2013), I worked mainly on their core price comparison website for car hire, <a class="link" href="https://www.carrentals.co.uk" title="Carrentals.co.uk" target="_blank">Carrentals.co.uk</a>. I also worked on a number
            of associated sites (mainly car hire white labels) as well as many of the other sites in the travel and automotive sectors that the company owned.
        </p>
        <p class="text-lg lg:text-xl pb-6">
            While <a class="link" href="https://www.carrentals.co.uk" title="Carrentals.co.uk" target="_blank">Carrentals.co.uk</a> served (at the time) the UK market, I was responsible for building the international version, <a class="link" href="https://www.comparecarrentals.com" title="Comparecarrentals.com" target="_blank">Comparecarrentals.com</a>. This site was financially
            successful very quickly and was a personal highlight for me, of my time with the company.
        </p>
        <p class="text-lg lg:text-xl pb-6">
            ASAP Ventures has, in the years since I worked for them, sold their car hire websites which, under new ownership have continued to evolve. Both Carrentals.co.uk and Comparecarrentals.com are viewable (if somewhat
            broken), in their earlier states, via the Internet Archive site <a class="link" href="https://web.archive.org/web/20141231201421/http://www.carrentals.co.uk/" title="Carrentals.co.uk at the Internet Archive" target="_blank">here</a> and <a class="link" href="https://web.archive.org/web/20120426144133/http://www.comparecarrentals.com/" title="Comparecarrentals.com at the Internet Archive" target="_blank">here</a>
        </p>
        <p class="text-lg lg:text-xl pb-6">
            Working at ASAP Ventures gave me an amazing introduction to the world of Ecommerce, Affiliate Marketing and S.E.O and allowed me to meet some fantastic people.
        </p>
    </div>
</section>
<section class="container flex gap-5 items-stretch justify-center justify-items-center mx-auto mt-16 mb-5">
    <div class="flex flex-wrap justify-center items-center content-center gap-4">
        <a href="{{ route('contact.index') }}" title="Contact Me" class="btn btn-secondary">Contact Me</a>
        <a href="{{ config('content.social.github.url') }}" title="GitHub" target="_blank" class="btn btn-secondary">GitHub</a>
        <a href="{{ config('content.social.linkedin.url') }}" title="LinkedIn" target="_blank" class="btn btn-secondary">LinkedIn</a>
        <a href="{{ config('content.social.twitter.url') }}" title="Twitter" target="_blank" class="btn btn-secondary">Twitter</a>
    </div>
</section>
@stop
