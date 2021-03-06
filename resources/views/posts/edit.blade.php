@extends('layouts.default')

@section('content')
<h1> Edit {{ $post->title }}</h1>
<hr />

{!! Form::open(['action'=> ['PostsController@update', $post->id ], 'method'=>'POST','files'=>true  ])  !!}
    
    {{  Form::hidden('_method', 'PUT') }}
    
    

    <div class="form-group">
        {{ Form::label('title') }}
        {{ Form::text('title', $post->title , [ 'placeholder'=>'Enter Post Title', 'class'=>'form-control ckeditor' ]) }}
    </div>

    <div class="form-group">
       
        {{ Form::label('body') }}
        {{ Form::textarea('body', $post->body , [ 'placeholder'=>'Enter Post ', 'class'=>'form-control ckeditor' ]) }}
                
    </div>

    <div class="form-group">
        {{ Form::label('Tags') }}
        <select name="tags[]" class="form-control tags" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{  $tag->tag }} </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
           
        {{ Form::label('Featured Image') }}
        {{ Form::file('photo', ['class'=>'form-control' ]) }}
    </div>


<img style="max-width:200px;" class="img-responsive" src="{{ asset('images/upload/.$post->photo') }}" />
   


    <div class="form-group pull-right">
        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
    </div>

  

{!! Form::close()  !!}

@endsection


@section('javascript')
<script type="text/javascript">        //this code to make select2 working in edit page and chagne the opation in select manie
    $(document).ready(function() {     
        $('.tags').select2().val({!! json_encode($post->tags()->pluck('id')) !!}).trigger('change');
    });
</script>
@endsection

