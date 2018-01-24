@extends ('layout')

@section('content')

    <div class="container">
    <div class="row">
    
    @if (Session::has('deleted'))
        <div class="bg-success">
                    Comment deleted successfully
        </div>


    @endif
     @if (Session::has('status'))
      
    <div class="bg-danger clearfix">
        Are you sure you want to delete this post?

        <form action="/comments/delete/sure/{{Session::get('status')}}" method="POST" class="pull-right">
            {{ csrf_field() }}
            
            <button name="delete" class="btn btn-danger" value"{{Session::get('status')}}">
                <i class="fa fa-btn fa-trash" title="delete"></i> confirm delete
            </button>
            

            <button name="cancel" class="btn btn-default" value="{{Session::get('status')}}">
                <i class="fa fa-btn fa-ban" title="cancel"></i> cancel
            </button>

        </form>
    </div>
    
    @endif
    


        <div class="col-md-10 col-md-offset-1">

            
            <div class="breadcrumb">
                
                <a href="../">← back to overview</a>

            </div>

            <!-- Display Validation Errors -->
            <!-- resources/views/common/errors.blade.php -->

            
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            

                                                    </div>

                            <div class="panel-content">
                                
                                <div class="vote">
                            @if(Auth::guest())
                                <div class="vote">
                                    <div class="form-inline upvote">
                                        <i class="fa fa-btn fa-caret-up disabled upvote" title="You need to be logged in to upvote"></i>
                                    </div>
                                    <div class="form-inline upvote">
                                        <i class="fa fa-btn fa-caret-down disabled downvote" title="You need to be logged in to downvote"></i>
                                    </div>
                                </div>
                            @elseif(Auth::id() == $post->user_id)
                                <div class="vote">
                                    <div class="form-inline upvote">
                                        <i class="fa fa-btn fa-caret-up disabled upvote" title="You can't vote on your own posts"></i>
                                    </div>
                                    <div class="form-inline upvote">
                                        <i class="fa fa-btn fa-caret-down disabled downvote" title="You can't vote on your own posts"></i>
                                    </div>
                                </div>
                            
                            @endif
                        </div>
                                   
                                    <div class="url">
                                        
                                        

                                        <a href="{{$post->link}}" class="urlTitle">Article: {{$post->title}}</a>

                                        

                                    </div> 
                                    
                                    
                                    <div class="info">
                                        {{ $post->vote_count }} points  | posted by {{$post->user->name}} | {{ count(App\Post::find($post->id)->comments) }} {{ str_plural('comment', count(App\Post::find($post->id)->comments)) }}
                                    </div>

                                <div class="comments">
                                    
                                        
                                            <ul>
                                                   @foreach($comments as $comment)
                                               
                                                
                                                    <li>
                                                    
                                                        <div class="comment-body">{{ $comment->text }}</div>

                                                        <div class="comment-info">
                                                            Posted by {{$comment->user->name}} on {{ $comment->created_at }}
                                                             @if(App\User::find($comment->user_id) == Auth::user())
                                                            <a href="{{ url('/comments/delete', $comment->id) }}" class ="btn btn-danger btn-xs edit-btn pull-right">
                                                                <i class="fa fa-btn fa-trash" title="delete"></i> delete 
                                                            </a>


                                                            <a href="/comments/edit/{{$comment->id}}" class ="btn btn-primary btn-xs edit-btn pull-right">edit</a>
                                                            @endif
                                                            
                                                        </div>
                                                    

                                                    </li>
 
                                              @endforeach
                                                 
                                            </ul>
                                        </div>

                                    
                                   

                                

                                </div>

                                
                
                    </div>

            </div>

        </div>
    </div>
@if(Auth::check())
    <form action="/comments/{{ $post->id }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- Comment data -->
        <div class="form-group">
            <label for="text" class="col-sm-3 control-label">Comment</label>
            @if (count($errors))
                @foreach($errors->all() as $error)
                    <div class="col-sm-6" style="color:red">
                    {{$error}}
                    </div>
                @endforeach
            @endif
            <div class="col-sm-6">
                <textarea type="text" name="text" id="text" class="form-control">{{old('text')}}</textarea>
            </div>
        </div>

        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <!-- Add comment -->
        <div class="form-group">
        
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add comment
                </button>
            </div>
        </div>
    </form>
    
    @else
     <div class="form-horizontal">   
        <p>You need to be <a href="../login">logged in</a> to comment</p>
    </div>
    @endif
</div>


   @stop