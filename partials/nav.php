<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Simple header</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="/" class="nav-link <?php echo urlIs("/") ? 'active' : '' ?>" aria-current="page">Home</a>
            </li>
            <li class="nav-item"><a href="/posts" class="nav-link <?php echo urlIs("/posts") ? 'active' : '' ?>">Posts</a></li>
            <li class="nav-item"><a href="/about" class="nav-link <?php echo urlIs("/about") ? 'active' : '' ?>">About</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link <?php echo urlIs("/contact") ? 'active' : '' ?>">Contact</a></li>

        </ul>
    </header>
</div>