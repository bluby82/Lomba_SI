<div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin') ? 'active' : '' }}"
                    href="/admin">
                    <svg class="bi">
                        <use xlink:href="#house-fill" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin/question') ? 'active' : '' }}"
                    href="/admin/question">
                    <svg class="bi">
                        <use xlink:href="#file-earmark-text" />
                    </svg>
                    Question
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('admin/answer') ? 'active' : '' }}"
                    href="/admin/answer">
                    <svg class="bi">
                        <use xlink:href="#file-earmark" />
                    </svg>
                    Answer
                </a>
            </li>
        </ul>
    </div>
</div>
