@foreach($blogs as $blog)
<div class="media my-3">
    <div class="avatar square">
        <div class="default">
            <i class="glyphicon glyphicon-user">

            </i>
        </div>
    </div>

    <div class="col-12 card px-0">
        <div class="card-header text-right py-1">
            <a href="/blog/edit/{{$blog->id}}" class="btn btn-warning" role="button">
                <i class="fa fa-pencil square-o fa-lg" area-hidden="true"></i>
            </a>

            <form action="/blog/delete/{{$blog->id}}" class="d-inline" method="POST">
            @csrf
                <button class="btn btn-danger" type="submit">
                    <i class="fa fa-trash fa-lg"></i>
                </button>
            </form>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p> {{$blog->content}} </p>
                <footer class="blockquote-footer">
                    Posted <cite>{{$blog->created_at->diffForHumans()}}</cite>
                </footer>
            </blockquote>
        </div>
    </div>
</div>
@endforeach
