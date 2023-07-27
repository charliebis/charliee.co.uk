@extends('layouts.default')
@section('content')

    <section class="hero min-h-16 bg-base-200 pb-36">
        <div class="hero-content text-center">
            <div class="max-w-5xl mt-8 mb-8 lg:mt-16 lg:mb-16 flex items-center justify-center flex-col">
                <h1 class="text-4xl md:text-6xl font-bold">Contact Me</h1>
                <p class="pt-8 pb-5 lg:pt-12 text-xl lg:text-2xl">
                    If you'd like to get in touch, the easiest way is by emailing me, using the form below.
                </p>
                <p class="pb-12 text-xl lg:text-2xl">
                    A copy of my C.V. is available on request.
                </p>
                <div class="flex flex-wrap justify-center items-center content-center gap-4">
                    <a href="{{ config('content.social.github.url') }}" title="GitHub" target="_blank" class="btn btn-secondary">GitHub</a>
                    <a href="{{ config('content.social.linkedin.url') }}" title="LinkedIn" target="_blank" class="btn btn-secondary">LinkedIn</a>
                    <a href="{{ config('content.social.twitter.url') }}" title="Twitter" target="_blank" class="btn btn-secondary">Twitter</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container max-w-5xl flex gap-5 items-center justify-center justify-items-center mx-auto -mt-36 mb-5">
        <div class="w-full flex-grow bg-primary text-primary-content rounded-box place-items-center p-8 mx-3 2xl:mx-0">
            @if(!empty($success))
                <div class="alert alert-success w-4/5 mx-auto mb-8 mt-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span class="text-success-content">{{ $success }}</span>
                </div>
            @else
                @if($errors->any())
                    <div class="alert alert-warning w-4/5 mx-auto my-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><span class="text-lg text-warning-content">{{ $error }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form title="Contact Me" method="post" class="w-full" id="contact-form">
                    @csrf
                    <div class="flex flex-col md:flex-row justify-center content-start gap-x-8 w-full lg:w-4/5 mx-auto">
                        <div class="form-control w-full mb-3 md:mb-2">
                            <label class="label" for="name">
                                <span class="text-xl text-primary-content">Name</span>
                            </label>
                            <input type="text" id="name" name="name" required class="input input-bordered input-secondary w-full h-auto py-3" maxlength="255" />
                        </div>
                        <div class="form-control w-full mb-3 md:mb-2">
                            <label class="label" for="email">
                                <span class="text-xl text-primary-content">Email</span>
                            </label>
                            <input type="email" id="email" name="email" required class="input input-bordered input-secondary w-full h-auto py-3" maxlength="255" />
                        </div>
                    </div>
                    <div class="flex justify-center content-start gap-8 w-full lg:w-4/5 mx-auto">
                        <div class="form-control w-full">
                            <label class="label" for="message">
                                <span class="text-xl text-primary-content">Message</span>
                            </label>
                            <textarea id="message" name="message" class="input input-bordered input-secondary w-full h-96 py-4"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-center content-start w-full lg:w-4/5 mx-auto">
                        <input type="submit" value="Send Message" class="btn btn-secondary mt-9 px-12 g-recaptcha"
                               data-sitekey="{{ config('recaptcha.site_key') }}"
                               data-callback='onContactFormSubmit'
                               data-action='ContactFormSubmit'
                        />
                    </div>
                    <div class=" w-full lg:w-4/5 mx-auto mt-8">
                        <p class="text-sm text-center">
                            This site is protected by reCAPTCHA and the Google
                            <a href="https://policies.google.com/privacy" class="link">Privacy Policy</a> and
                            <a href="https://policies.google.com/terms" class="link">Terms of Service</a> apply.
                        </p>
                    </div>
                </form>
            @endif
        </div>
    </section>
@stop
