 @extends ('layout')

@section('content')

<div class="container">

<div class="row">
 @if (Session::has('comment'))
        <div class="bg-success">
                    Comment edited successfully
        </div>
    @endif
     @if (Session::has('status'))
      
    <div class="bg-danger clearfix">
        Are you sure you want to delete this post?

        <form action="{{ url('/comments/delete/sure', $comment->id) }}" method="POST" class="pull-right">
            {{ csrf_field() }}
            
            <button name="delete" class="btn btn-danger" value="$comment->id}}">
                <i class="fa fa-btn fa-trash" title="delete"></i> confirm delete
            </button>
            

            <button name="cancel" class="btn btn-default" value="{{ $comment->id }}">
                <i class="fa fa-btn fa-ban" title="cancel"></i> cancel
            </button>

        </form>
    </div>
    
    @endif




            <div class="breadcrumb">
                
                <a href="../../">← back to overview</a>

            </div>



<div class="panel panel-default">

        <div class="panel-heading clearfix">Edit comment
            <a href="{{ url('/comments/delete', $comment->id) }}" class="btn btn-danger btn-xs pull-right">
                <i class="fa fa-btn fa-trash" title="delete"></i> delete comment
            </a>
        </div>

        <div class="panel-content">

            <form action="/comments/{{ $comment->id }}" method="POST" class="form-horizontal">
            {{ method_field('PATCH') }}
            {{csrf_field()}}

            <!-- Article data -->
                <div class="form-group">
                    <label for="comment-text" class="col-sm-3 control-label">Comment</label>
                    
                    <div class="col-sm-6">
                        <input type="text" name="text" id="comment-text" class="form-control"
                               value="{{ $comment->text }}" >
                    </div>
                </div>

                <!--<input type="hidden" name="comment_id" value="{{ $comment->id }}">-->

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-pencil-square-o"></i> Edit Comment
                        </button>
                    </div>
                </div>
            </form>

        </div>


    </div> 
</div>

</div>
   @stop