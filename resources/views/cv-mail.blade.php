<h2>Tuyển dụng Hợp long</h2>
<table border="1" class="table table-hover">
	<thead>
		<tr>
			<th>Stt</th>
			<th>Tiêu đề tuyển dụng</th>
			<th>File CV</th>	
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{$id}}</td>
			<td>{{$title}}</td>
			<td><a href="{{route('cv_send_mail',['id'=>$id])}}">Xem chi tiết</a></td>
		</tr>
	</tbody>
</table>
