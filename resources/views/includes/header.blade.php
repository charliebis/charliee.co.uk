<header class="container mx-auto">
    <div class="navbar items-center bg-base-100 p-0 mx-0 md:mx-3 w-auto">
        <div class="navbar-start">
            <div class="dropdown">
                <a tabindex="0" class="btn btn-ghost lg:hidden">
                    @include('includes.svg.burger')
                </a>
                <nav>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-1 z-[1] p-2 shadow bg-base-100 w-52">
                        @foreach(config('content.nav') as $routeName => $item)
                            @if($item['display'])
                                <li><a href="{{ route($routeName) }}" title="{{ $item['label'] }}" class="text-lg px-6 py-4">{{ $item['label'] }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
            </div>
            <a href="/" title="Home" class="ml-3 md:ml-0">
                @include('includes.svg.logo')
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-lg">
                @foreach(config('content.nav') as $routeName => $item)
                    @if($item['display'])
                        <li><a href="{{ route($routeName) }}" title="{{ $item['label'] }}" class="py-6 px-8">{{ $item['label'] }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="navbar-end">
            <div class="grid grid-flow-col gap-4 mr-4">
                <div id="container-theme-setting" aria-label="auto" aria-live="polite">
                    <a href="#" class="theme-setting" data-theme-setting="dark" title="Dark Mode" aria-hidden="true">
                        @include('includes.svg.theme.dark')
                    </a>
                    <a href="#" class="theme-setting" data-theme-setting="light" title="Light Mode" aria-hidden="true">
                        @include('includes.svg.theme.light')
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
