<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
      <li class="nav-item sidebar-category">
          <p>WIKBOOK</p>
          <span></span>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/dashboard">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
          </a>
      </li>
      @if (Auth::user()->role == 'admin')
          <li class="nav-item">
              <a class="nav-link" href="/users">
                  <i class="mdi mdi-account menu-icon"></i>
                  <span class="menu-title">Data</span>
              </a>
          </li>
      @endif
      @if (Auth::user()->role == 'admin')
          <li class="nav-item">
              <a class="nav-link" href="/books">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Book</span>
              </a>
          </li>
      @endif
      @if (Auth::user()->role == 'admin')
          <li class="nav-item">
              <a class="nav-link" href="/categories">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Categories</span>
              </a>
          </li>
      @endif
  </ul>
</nav>