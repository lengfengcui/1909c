<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>新闻添加</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- <center><h2>新闻添加<a style="float:right;" href="{{url('news/index')}}" class="btn btn-default">列表</a></h2></center><hr/>
 --><form action="{{url('/news/store')}}" method="post" enctype="multipart/form-data"  class="form-horizontal" role="form">
	@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">新闻标题</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="new_title" 
				   placeholder="新闻标题">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">新闻作者</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="new_author" 
				   placeholder="新闻作者">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">新闻分类</label>
		<div class="col-sm-8">
			<select name="n_id">
				<option value="0">-请选择-</option>
				@foreach ($newa as $k=>$v)
				<option value="{{$v->n_id}}">{{$v->n_name}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">新闻图片</label>
		<div class="col-sm-8">
			<input type="file" class="form-control" id="firstname" name="new_logo" 
				   placeholder="新闻图片">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">新闻简介</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="new_desc" 
				   placeholder="新闻简介">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">新闻内容</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="new_content" 
				   placeholder="新闻内容">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
</form>

</body>
</html>