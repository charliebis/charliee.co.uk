<footer class="footer gap-y-4 footer-center p-10 bg-base-200 text-primary-content mt-16 lg:mt-24">
    <div class="grid grid-flow-col gap-4">
        @foreach(config('content.nav') as $routeName => $item)
            @if($item['display'])
                <a href="{{ route($routeName) }}" title="{{ $item['label'] }}" class="link link-hover">{{ $item['label'] }}</a>
            @endif
        @endforeach
    </div>
    <div class="grid grid-flow-col gap-4 my-4">
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
    <div class="mt-4">
        <h5 class="font-bold text-base">This site's stack:</h5>
        <div class="flex flex-wrap justify-center items-center content-center gap-2">
            @foreach(config('content.stack') as $i => $stackItem)
                <a href="{{ $stackItem['url'] }}" title="{{ $stackItem['alt'] }}" target="_blank">
                    @if($stackItem['icon']['type'] === 'blade')
                        @include('includes.' . $stackItem['icon']['path'])
                    @else
                        <img src="{{ $stackItem['icon']['path'] }}" alt="{{ $stackItem['alt'] }}" width="{{ $stackItem['icon']['width'] }}" class="px-2 py-1 bg-white rounded" />
                    @endif
                </a>
            @endforeach
        </div>
        <p class="my-2 text-base">This site is available to view on my public <a href="{{ config('content.social.github.url') }}" title="GitHub profile" target="_blank" class="link">GitHub profile</a>.</p>
        <div class="mx-auto mt-14 mb-5">
            @include('includes.svg.logo')
        </div>
        <p class="font-bold">
            Charles Edwards<br/>
            Software Engineer | Leighton Buzzard, U.K.
        </p>
        <p>Copyright © {{ date('Y') }} - All right reserved</p>
    </div>
</footer>
