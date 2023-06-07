<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{ route('contacts') }}">Contacts</a>
          </li>
      </div>
    </div>
  </nav>
</header>
