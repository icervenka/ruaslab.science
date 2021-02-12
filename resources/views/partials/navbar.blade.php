<header class="fixed-top" style="background-color:#2F4F4F;">
  <div class="container-fluid">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#home"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item rounded">
            <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link text-white" href="{{ url('team') }}">Team</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link text-white" href="{{ url('projects') }}">Projects</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link text-white" href="{{ url('publications') }}">Publications</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link text-white" href="{{ url('funding') }}">Funding</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link text-white" href="{{ url('contactus') }}">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
