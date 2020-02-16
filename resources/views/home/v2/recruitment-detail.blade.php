@extends('layouts.v2.index')
@section('mainContainer')
<link rel="stylesheet" href="{{url('public/tuyendung')}}/assets/css/style.css">
<link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<div class="container">
        @if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong><center>{{Session::get('success')}}</center></strong>
    </div>
    @endif  
    <div class="row" style="padding: 25px 25px; border: 1px solid #ccc;">

        <div class="col-md-3">  
            <img src="{{url('uploads/works')}}/{{$news->cover_image}}" alt="" style="width:400px; height: 300px;">
        </div>
        <div class="col-md-9">
            <h2>{{$news->name}}</h2>
            <br>
            <b>
                <a href="">Công ty Cổ phần Hợp long</a>
            </br>
        </br>
        <p>Địa điểm: {{$news->addWork->title}}</p>
        <p>Mức lương: {{$news->salary}}</p>
        <p>Hạn nộp hồ sơ: {{date('d/m/Y',strtotime($news->deadline))}}</p>
    </b>
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addCategory">
                    Nộp hồ sơ
                </button>
                <!-- Modal -->
                <div class="modal fade " id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 150px;">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel" style="color:#3498db;">Vui lòng nộp CV.pdf tại đây!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" role="form" enctype="multipart/form-data">    
                                    <input type="file" name="file_upload">                      
                                    <input type="hidden" name="title" value="{{$news->name}}">
                                </br>
                                    @csrf
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        <button type="submit" class="btn btn-primary">Nộp hồ sơ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row" style="padding: 25px 25px; border: 1px solid #ccc;" >   
    <div class="col-md-6">
        <h3 style="margin-left: 15px">Thông tin tuyển dụng</h3>
        <br>
        <div class="col-md-6">
            <p>
            Kinh nghiệm: {{$news->experience}}
        </p>
        <p>
            Yêu cầu bằng cấp: {{$news->education}}
        </p>
        <p>
            Ngành nghề: {{$news->catWork->name}} 
        </p>
        </div>
        <p>
            Hình thức làm việc: {{$news->timework}}
        </p>
        <p>
            Chức vụ: {{$news->level}}
        </p>
        <p>
            Giới tính: {{$news->gender}}
        </p>

    </div>
    <div class="col-md-6">
        <h3>Quyền lợi được hưởng</h3>
        <br>
        <p>
            {!!$news->salary2!!} 
        </p>

    </div> 

  <div class="col-md-12">
        <div class="col-md-6">
        <h3>Yêu cầu công việc</h3>
        <br>
        <p>
            {!!$news->content!!}
        </p>    
    </div>

    <div class="col-md-6">
        <h3>Yêu cầu hồ sơ</h3>
        <br>
        <p>
            {!!$news->requirement!!}
        </p>  
    </div>  
  </div>
</div>
</div>
</br>
<img src="{{url('uploads/logo')}}/banner-tuyendung.jpg" width="100%" alt="">
@stop