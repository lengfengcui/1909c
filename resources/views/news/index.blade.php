<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>品牌列表</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <!-- <center><h2>商品品牌列表<a style="float:right;" href="{{url('gory/create')}}" class="btn btn-default">添加</a></h2></center><hr/>  -->
<!-- <form>
	<input type="text" name="g_name" placeholder="请输入品牌关键字">
	 
	<button>搜索</button>
</form> -->
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>新闻ID</th>
				<th>新闻标题</th>
				<th>新闻作者</th>
				<th>新闻分类</th>
				<th>新闻图片</th>
				<th>新闻简介</th>
				<th>前往详情页</th>
				<th>时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($news as $v) 
			<tr>
				<td>{{$v->new_id}}</td>
				<td>{{$v->new_title}}</td>
				<td>{{$v->new_author}}</td>
				<td>{{$v->n_name}}</td>
				<td>@if($v->new_logo)<img src="{{env('UPLOADS_URL')}}{{$v->new_logo}}" height="35" width="35">@endif</td>
				<td>{{$v->new_desc}}</td>
				<td>{{$v->new_content}}</td>
				<td>{{$v->new_time}}</td>
				<td>
					<a href="{{url('/news/edit/'.$v->new_id)}}" class="btn btn-primary">编辑</a>|
					<a href="#" class="btn btn-danger">删除</a>
				</td>
			</tr>
			@endforeach

			<tr><td colspan="6">{{$news->links()}}</td></tr>
		</tbody>
</table>
</div>  	

<script>
	$(document).on('click','.pagination a',function(){
		var url=$(this).attr('href');
		$.get(url,function(result){
			$('tbody').html(result);
		});
		return false;
	});
</script>
</body>
</html>