<div class="col-sm-8 blog-main">
    <h1>Publish a offer for cars</h1>
    <form method="POST" action="/offers/save">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>
        <div class="form-group">
            <label for="start">Start Date</label>
            <input type="date" class="form-control" id="start" name="start">
        </div>
        <div class="form-group">
            <label for="body">End Date</label>
            <input type="date" class="form-control" id="end" name="end">
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>
