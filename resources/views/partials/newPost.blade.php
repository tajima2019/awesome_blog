<div class="new-post mb-4">
    <form action="/blog/store" method="POST">
        @csrf
        <div class="form-group">
            <textarea name="content" id="10" rows="3" class="form-control" placeholder="Share your thoughts..."></textarea>
        </div>
        <div class="text-right">
            <button class="create-post btn btn-primary" type="submit">Post</button>

        </div>

    </form>
</div>