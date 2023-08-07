@php $links = config('links'); @endphp

<header>
    <div class="container">
        <nav class="navbar">
            <a href="#">
                <figure>
                    <img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics Logo">
                </figure>
            </a>
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a @class(['active' => $link['route'] === '/']) href="{{ $link['url'] }}">
                            {{ strtoupper($link['text']) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
