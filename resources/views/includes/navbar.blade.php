<div class="container-navbar">
    <div class="logo">
        HAPPY BOOK STORE
    </div>

    <div class="container-nav">
        <ul class="nav justify-content-center">
            <li class="nav-item {{ $title == 'Home' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ $title === 'Category' ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">Category</a>
                <ul class="dropdown-menu">
                  <li>
                    @foreach ($categories as $category)
                    <a class="dropdown-item" href="{{ route('category',[$category->category]) }}" > {{ $category->category }}</a>
                    @endforeach
                  </li>
                </ul>
              </li>
            <li class="nav-item">
                <a class="nav-link  {{ $title === 'Contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</div>
