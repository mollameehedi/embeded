<div class="p-2">


@forelse ($books as $book)
<div class="first-result">
    <a href="{{ $book->link }}">
    <div class="row">
      <div class="col-lg-5">
        <img src="{{ asset('uploads/book') }}/{{ $book->thumbnail }}" alt="movie image preview">
      </div>
      <div class="col-lg-7">
        <h3>{{ $book->name }}</h3>
        <p>By {{ category_name($book->category_id) }}</p>
      </div>
    </div>
  </a>
  </div>
  @empty
  <div class="first-result">
    <h5  class="text-danger"> Book Not Found</h5>
  </div>
@endforelse
</div>
