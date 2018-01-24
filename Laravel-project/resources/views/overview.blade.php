
@extends ('layout')

@section('content')

    <div class="container">
    <div class="row">
     @if (Session::has('upvote'))
        <div class="bg-success">
                    You have upvoted {{Session::get('upvote')}}
        </div>
    @endif
         @if (Session::has('downvote'))
        <div class="bg-success">
                    You have downvoted {{Session::get('downvote')}}
        </div>


    @endif
    @if (Session::has('status'))
        <div class="bg-success">
                    Article {{Session::get('status')}} deleted successfully
        </div>
    @endif
     @if (Session::has('article'))
     
      <div class="bg-success">
                    Article {{Session::get('article')}} created successfully
        </div>

     @endif
        <div class="col-md-10 col-md-offset-1">
      
            
            <div class="panel panel-default">
                <div class="panel-heading">Article overview</div>

                <div class="panel-content">
                                
                    <ul class="article-overview">
                        
                    @foreach ($posts as $post)


                       <!--@foreach($votes as $vote)
                          {{var_dump($vote->post_id)}}

                            @endforeach-->

                        <li>

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

                                 @elseif($vote->where(['user_id' => Auth::id(), 'post_id' => $post->id, 'hasUpvoted' => 0, 'hasDownvoted' => 1])->first())
                                 <div class="vote">
                                    <div class="form-inline upvote">
                                        <i class="fa fa-btn fa-caret-up disabled upvote" title="You already upvoted"></i>
                                    </div>
                                    </div>
                                 <form action="/vote/down/{{$post->id}}" method="POST"
                                      class="form-inline downvote">
                                    {{ csrf_field() }}

                                    <button name="post_id" value="{{ $post->id }}">
                                        <i class="fa fa-btn fa-caret-down" title="downvote"></i>
                                    </button>

                                </form>

                                 @elseif($vote->where(['user_id' => Auth::id(), 'post_id' => $post->id, 'hasUpvoted' => 1, 'hasDownvoted' => 0])->first())
                                  <form action="/vote/up/{{$post->id}}" method="POST"
                                      class="form-inline upvote">
                                    {{ csrf_field() }}
                                    <button name="post_id" value="{{ $post->id }}">
                                        <i class="fa fa-btn fa-caret-up" title="upvote"></i>
                                    </button>

                                </form>
                                 <div class="vote">
                                  <div class="form-inline upvote">
                                        <i class="fa fa-btn fa-caret-down disabled downvote" title="You already downvoted"></i>
                                    </div>
                                </div>
                                @elseif($vote)
                                <form action="/vote/up/{{$post->id}}" method="POST"
                                      class="form-inline upvote">
                                    {{ csrf_field() }}
                                    <button name="post_id" value="{{ $post->id }}">
                                        <i class="fa fa-btn fa-caret-up" title="upvote"></i>
                                    </button>

                                </form>
                                <form action="/vote/down/{{$post->id}}" method="POST"
                                      class="form-inline downvote">
                                    {{ csrf_field() }}

                                    <button name="post_id" value="{{ $post->id }}">
                                        <i class="fa fa-btn fa-caret-down" title="downvote"></i>
                                    </button>

                                </form>

                            @endif
                        </div>

                        <div class="url">



                            <a href="{{$post->link}}" class="urlTitle" target="_blank">{{ $post->title }}</a>
                            @if(App\User::find($post->user_id) == Auth::user())
                                <a href="{{ url('/post/edit', $post->id) }}" class="btn btn-primary btn-xs edit-btn">edit</a>
                            @endif
                            

                        </div> 
                        
                        
                        <div class="info">
                            {{ $post->vote_count }} points  | posted by {{$post->user->name}} | <a href="comments/{{$post->id}}">{{ count(App\Post::find($post->id)->comments) }} {{ str_plural('comment', count(App\Post::find($post->id)->comments)) }}</a>
                        </div>
                    
                    </li>
                    
                    @endforeach


                        </ul>

                </div>
                
            </div>
        </div>
    </div>
</div>

@stop

  