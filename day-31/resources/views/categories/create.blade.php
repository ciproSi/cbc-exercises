<form action="/categories" method="POST">
    {{-- csrd = cross-site forgery attack  --}}
    @csrf
    <input type="text" name="category-name">
    <button>Submit</button>
</form>