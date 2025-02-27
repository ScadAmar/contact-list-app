<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        @guest
        <li class="nav-item">
          <a class="nav-link" wire:navigate href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" wire:navigate href="/register">Register</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
          <a wire:navigate class="nav-link active" aria-current="page" href="/Contacts">Contact List</a>
        </li>
        <li class="nav-item">
          <button class="btn btn-secondary" wire:click="logout">Logout</button>
        </li>
        @endauth
                 
     
    </div>
  </div>
</nav>