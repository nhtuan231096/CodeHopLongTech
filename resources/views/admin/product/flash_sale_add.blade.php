@extends('layouts.admin')
@section('title','Flash Sale Management')
@section('links','Sản phẩm')    
@section('main')
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="http://benalman.com/code/projects/jquery-throttle-debounce/jquery.ba-throttle-debounce.js"></script>
<!-- <script src="{{url('public/homev2/js/flashSaleCtrl.js')}}"></script> -->
<div class="wrapp">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<legend>Tạo sự kiện flash sale</legend>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="">Tiêu đề</label>
					<input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề" required>
				</div>

				<div class="form-group">
					<label for="">Ảnh đại diện</label>
					<input type="file" class="form-control" name="file_upload" style="padding: 0" required>
				</div>

				<div class="form-group">
					<label for="">Ngày kết thúc</label>
					<input type="date" class="form-control" name="end_time" required>
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
		@csrf
	</form>
</div>

@stop()
