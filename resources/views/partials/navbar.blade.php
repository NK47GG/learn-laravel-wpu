<nav class="navbar navbar-expand-lg bg-body-dark bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about" >About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "blog") ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($active === "categories") ? 'active' : '' }}" href="/categories-list">Categories</a>
          </li>
         
        </ul>
      </div>
    </div>
</nav>