<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #20c997;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SAMBUNGIN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home")? 'active' : ''}}" aria-current="page" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" {{ ($active === "product")? 'active' : ''}}" href="#">PRODUCT</a>
          </li>
          <!--
        </ul>
            <li class="nav-item">
                <a href="/login" class="nav-link {{ ($active === "login")? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          -->
      </div>
    </div>
  </nav>