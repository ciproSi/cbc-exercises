<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.index') }}">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Books
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('admin.books.index') }}">List all books</a>
            <a class="dropdown-item" href="{{ route('admin.books.create') }}">Create new book</a>
            {{-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> --}}
          </div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ action('CategoryController@index') }}">List all categories</a>
            <a class="dropdown-item" href="{{ action('CategoryController@create') }}">Create new category</a>
            {{-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> --}}
          </div>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Subcategories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ action('SubcategoryController@index') }}">List all subcategories</a>
              <a class="dropdown-item" href="{{ action('SubcategoryController@create') }}">Create new subcategory</a>
              {{-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a> --}}
            </div>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn text-muted">Logout</button>
        </form>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search to be done</button>
      </form>
    </div>
  </nav>