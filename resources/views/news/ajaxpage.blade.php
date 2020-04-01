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
					<a href="#" class="btn btn-primary">编辑</a>|
					<a href="#" class="btn btn-danger">删除</a>
				</td>
			</tr>
			@endforeach

			<tr><td colspan="6">{{$news->links()}}</td></tr>