<form action="{{ action('BookController@destroy', ['id' => $book->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Delete</button>
</form>