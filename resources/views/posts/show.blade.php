@extends('layouts.default')

@section('content')

<h1> {{ $post ->title }} </h1>

@if( !Auth::guest() & (Auth::user()->id  == $post->user_id) )

<div class="clearfix">
<a href="/posts/{{ $post->id }}/edit" class="btn btn-default">
<i class="fas fa-edit"></i>  Edit post
</a>
 
 <div class="pull-right">
{!! form::open(['action'=>['PostsController@destroy', $post->id ] , 'method'=>'POST', ]) !!}

 {{ Form::hidden('_method', 'DELETE') }}

 <button class="btn btn-danger" type="submit">
<i class="fas fa-trash"></i>
 Delete Post
 </button>

{!! form::close() !!}
 </div>
 </div>
 @endif
<hr />

<div>
  <img src="{{asset('images/posts/'.  $post->photo) }}" class="img-responsive">
  {!! $post->body  !!} 
</div>

@foreach($post->tags as $tag)
  <a href="{{ route('tags.show', $tag->id) }}"> 
                    <label class="label label-info">
                        <i class="fa fa-tag"></i> {{ $tag->tag }}
                    </label>
                </a>
                &nbsp;
            @endforeach
<hr />

<!------------------------- comments part -------------------------------------------->

<h4>Comments: {{ $post->comments->count() }}</h4>   <!-- this to show the number of comments -->


<ul class="comments">

    @foreach($post->comments as $comment)   
    <li class="comment">
        <div class="clearfix">
            <h4 class="pull-left">{{ $comment->user->name }}</h4>
            <p class="pull-right">{{ $comment->created_at->format('d M Y') }}</p>
        </div>

        <p>{{ $comment->body }}</p>
    </li>
    @endforeach
</ul>


<!-- Comments Form -->
<div class="panel panel-default">
    <div class="panel-heading">Add Your Comment</div>
    <div class="panel-body">

        @guest
            <div class="alert alert-info">Please login to comment</div>
        @else
        <form action="{{ route('comments.store', $post->slug) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Comment">Comment</label>
                <textarea name="body" class="form-control" placeholder="Enter your comment" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
        @endguest

    </div>
</div>
<!-- Comments Form -->

</div>
            
        
            



@endsection