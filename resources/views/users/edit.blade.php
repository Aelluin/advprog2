<h1>Users Edit Page</h1>
<p>This is Edit page with id {{ $id }}</p>
<div class="row">
    <div class="col-6">
        <form action="{{ url('users' , $id) }}" method="post">
            @csrf
            @method('PUT') <!-- PUT method -->

            <div class="form-group">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control" id="fullname"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<form action="{{ url('users' , $id) }}" method="post">
    @csrf
    @method('DELETE')
    <div class="form-group">
        <button class="btn btn-danger" type="submit">Delete</button>
    </div>
</form>
