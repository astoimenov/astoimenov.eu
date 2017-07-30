<header id="header" class="center">
    <div class="header">
        @if ($headerImage)
            <aside class="image cover" style="background-image: url({{ $headerImage }})">
                <img src="{{ $headerImage }}"/>
            </aside>
        @endif

        <section class="content">
            <hgroup class="heading">
                @if ($logo)
                    <h1>
                        <a class="logo" href="{{ url('/') }}" title="{{ $title }}" target="_self">
                            <img src="{{ $logo }}"/>
                        </a>
                    </h1>
                @endif
                {{-- @if ($description)
                    <h2 class="description">{{ $description }}</h2>
                @endif --}}
            </hgroup>

            <div class="navigation-holder">
                <nav class="navigation">
                    <div class="navigation-wrapper">
                        <button class="toggle genericon genericon-menu"></button>

                        <ul class="menu">
                            <li>
                                <h1 class="title">
                                    <a href="{{ url('') }}">
                                        {{ $title }}
                                    </a>
                                </h1>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
    </div>
</header>
