<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand px-md-0 px-3" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-mandiri.svg') }}" alt="Mandiri Investment" width="68">
            </a>
            <button class="navbar-toggler border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('about') }}">
                            <p>About us</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('management') }}">
                            <p>Management team</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('strategy') }}">
                            <p>Our strategy</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">
                            <p>Contact us</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>