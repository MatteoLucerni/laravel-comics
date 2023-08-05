<header>
    <div class="container">
        <nav class="navbar">
            <a href="#">
                <img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics Logo">
            </a>
            <ul>
                <li>ciaooo</li>
                {{-- <li v-for="link in links">
                    <a :class="{ active: link.current }" href="#">{{ link . text . toUpperCase() }}</a>
                </li> --}}
                @foreach ($links as $link)
                    <li>
                        <a href="{{ $link['url'] }}">
                            {{ $link['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
