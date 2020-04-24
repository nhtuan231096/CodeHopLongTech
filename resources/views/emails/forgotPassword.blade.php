<span style="font-size: 16px;font-weight: bold">Kính chào quý khách</span>
<br>
<form action="{{route('customer-reset-password')}}" method="POST" class="form-inline" role="form">

	<div class="form-group">
		<input type="hidden" name="email" class="form-control" value="{{$data['email']}}">
		<input type="hidden" name="password" class="form-control" value="{{$data['password']}}">
		@csrf
		<input name="_token" value="ixBpBoXCKx9wDkY5HDF6L7PYhZfJUeNiYPDoMEA1" autocomplete="off" type="hidden">
	</div>
	<button type="submit" class="btn btn-primary">Vui lòng click vào đây để đặt lại mật khẩu</button>
</form>
