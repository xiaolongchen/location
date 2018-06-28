<h1>Register</h1>

<form method="POST" action="/register">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password_confirmation" class="form-control" id="password_confirmation" name="password">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <select class="form-control" id="type" name="type">
            <option value="user" selected>User</option>
            <option value="admin">Administrator</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control">Register</button>
    </div>
    <div class="form-group">
        @if (count($errors))
            <div class="form-group">
                <div>class="alert alert-danger</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                </ul>
            </div>
    </div>
</form>
