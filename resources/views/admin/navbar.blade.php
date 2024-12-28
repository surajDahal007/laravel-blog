<div class="container py-4">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
         <a href="/admin/dashboard" class="link-body-emphasis text-decoration-none">
          <span class="fs-4">Admin Dashboard</span>
         </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          {{-- <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Features</a>
          <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Enterprise</a> --}}
          <a class="me-3 btn btn-warning" href="/" target="_blank">My Website</a>
          <form action="/logout" method="post">
                @csrf
                <button class="btn btn-danger">Logout</button>
              </form>  
        </nav>
    </div>
</div>

