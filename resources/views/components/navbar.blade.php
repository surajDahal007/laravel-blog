<header class="p-3" style="background-color: #04233a;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="text-decoration-none text-light">
          <h3 class="fst-italic">BLOGSITE</h3>
        </a>
        &nbsp;
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mx-4 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
        @auth
          <a href="/user/dashboard" class="btn btn-warning">My Dashboard</a>
          &nbsp; &nbsp;
          <form action="/logout" method="post">
            @csrf
            <button class="btn btn-danger fst-italic">Logout</button>
          </form>  
        @else
          <div class="text-end">
            <a href="/loginPage" class="btn btn-outline-light me-2">Login</a>
            <a href="/registerPage" class="btn btn-warning">Register</a>
          </div>
        @endauth
      </div>
    </div>
</header>