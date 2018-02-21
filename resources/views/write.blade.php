<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Post Aticle</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/styleWrite.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
    <div class="container">
    <div class="col-md-5">
        <div class="form-area">
            <form role="form">
            <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Post Article</h3>
        				<div class="form-group">
    						<input type="text" class="form-control" id="title" name="title" placeholder="Type your title here..." required>
    					</div>
              <div class="form-group">
                <select class="form-control" name="item_id" required>
                  <option value="" selected disabled>Choose a category</option>
                  @foreach($items as $item)
                   <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
               <div class="form-group">
                  <textarea class="form-control" type="textarea" id="message" placeholder="Type your article here..." rows="7" required></textarea>
               </div>
            <input class="btn btn-success pull-right" type="submit" name="submitArticle" value="Post!">
            </form>
        </div>
    </div>
    </div>
  </body>
</html>
