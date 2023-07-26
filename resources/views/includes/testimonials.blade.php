@if(!empty($testimonials))
    <section class="container flex gap-5 items-center justify-center justify-items-center mx-auto mb-5 ">
        <div class="flex-grow bg-primary text-primary-content rounded-box place-items-center p-8 mx-3 2xl:mx-0">
            <h2 class="text-center text-base-content font-bold text-2xl mb-6">Testimonials</h2>
            <div id="container-testimonials" class="carousel w-full">
                @foreach($testimonials as $i => $testimonial)
                    <div id="item{{$i + 1}}" class="carousel-item relative w-full flex-col" data-item="{{$i + 1}}">
                        <div class="avatar block mx-auto mt-3 mb-8">
                            <div class="w-28 md:w-40 mx-auto rounded-full ring ring-primary-content ring-offset-base-100 ring-offset-2 shadow-2xl">
                                @if(!empty($testimonial['link_url']))
                                    <a href="{{ $testimonial['link_url'] }}" title="{{ $testimonial['name'] }}" target="_blank" class="border-none">
                                        @endif
                                        <img src="{{ $testimonial['avatar_url'] }}" alt="{{ $testimonial['name'] }}" />
                                        @if(!empty($testimonial['link_url']))
                                    </a>
                                @endif
                            </div>
                        </div>
                        <p class="text-center mx-auto mb-6 text-lg lg:text-2xl">
                            &quot;{{ $testimonial['text'] }}&quot;
                        </p>
                        <h3 class="text-center text-lg font-bold mx-auto mb-1">
                            @if(!empty($testimonial['link_url']))
                                <a href="{{ $testimonial['link_url'] }}" title="{{ $testimonial['name'] }}" target="_blank" class="link-hover">
                                    @endif
                                    {{ $testimonial['name'] }}
                                    @if(!empty($testimonial['link_url']))
                                </a>
                            @endif
                        </h3>
                        <h4 class="text-center text-sm font-normal mx-auto">{{ $testimonial['position'] }}</h4>
                    </div>
                @endforeach
            </div>
            <div id="container-testimonials-buttons" class="flex justify-center w-full pt-12 gap-2">
                @for ($i = 1; $i <= count($testimonials); $i++)
                    <a href="#item{{ $i }}" class="btn btn-xs rounded-full btn-testimonial border-2 {{ $i == 1 ? 'border-secondary bg-secondary' : 'border-primary bg-base-300' }}" data-target="{{ $i }}" title="{{ $i }}">&nbsp;</a>
                @endfor
            </div>
        </div>
    </section>
@endif
