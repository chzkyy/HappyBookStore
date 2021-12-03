<div class="sub-category">
  <h2>Categories</h2>
</div>
<div class="isi-category">
  @foreach ($categories as $item)
      <p>
          <a class="dropdown-item" href="/category/{{ $item->category }}">{{ $item->category }}</a>   
      </p>
  @endforeach
</div>