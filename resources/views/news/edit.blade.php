<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>新闻详情页</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="table-responsive">
	<h3>当前访问量:{{$count}}</h3>
	<h3><a href="{{url('news/index')}}">展示</a></h3>
	<table class="table">
		<thead>
			<tr>
				<th>新闻标题</th>
				<th>新闻作者</th>
				<th>新闻分类</th>
				<th>新闻图片</th>
				<th>新闻简介</th>
				<th>前往详情页</th>
				<th>时间</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$news->new_title}}</td>
				<td>{{$news->new_author}}</td>
				<td>{{$news->n_name}}</td>
				<td>{{$news->new_desc}}</td>
				<td>{{$news->new_content}}</td>
				<td>{{$news->new_time}}</td>
			</tr>
		</tbody>
</table>
</div>  	
</body>
</html>