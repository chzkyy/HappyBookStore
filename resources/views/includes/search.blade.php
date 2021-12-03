<div class="nav justify-content-center mt-4">
  <div class="col-md-3">
      <form action="{{ route('search') }}">
          <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search Book Title" name="search" value="{{ request('search') }}">
              <button class="btn btn-outline-success" type="submit" id="button-addon2">Search</button>
          </div>
      </form>
  </div>
</div>