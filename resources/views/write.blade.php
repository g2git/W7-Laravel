@extends ('layout')


@section ('content')
    <div class="col-md-5">
        <div class="form-area">
            <form method="post" action="/posts">
              {{ csrf_field() }}
            <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Post Article</h3>
        				<div class="form-group">
    						<input type="text" class="form-control" name="article_title" placeholder="Type your title here..." required>
    					</div>
              <div class="form-group">
                <select class="form-control" name="category_id" required>
                  <option value="" selected disabled>Choose a category</option>
                  @foreach($items as $item)
                   <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
               <div class="form-group">
                  <textarea class="form-control" name="article_body" placeholder="Type your article here..." rows="7" required></textarea>
               </div>
            <input class="btn btn-success pull-right" type="submit" name="submitArticle" value="Post!">
            </form>
        </div>
    </div>
@endsection
