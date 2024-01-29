<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Lomba SI</a>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link px-3 btn-dark border-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-door-closed" viewBox="0 0 16 16">
                <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
            </svg>
            Log out
        </button>
    </form>
</header>
