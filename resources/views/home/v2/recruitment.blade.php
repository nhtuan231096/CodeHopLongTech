@extends('layouts.v2.index')
@section('mainContainer')
  <link rel="stylesheet" href="{{url('public/tuyendung')}}/assets/css/style.css">
  <!-- <link type="text/css" media="all" href="{{url('public/home/home')}}/wp-content/cache/autoptimize/1/css/autoptimize.css" rel="stylesheet" /> -->
  <!-- <link type="text/css" media="screen" href="{{url('public/home/home')}}/wp-content/cache/autoptimize/1/css/autoptimize_aa70d04ac018ff6c48774c3cb5f049f0.css" rel="stylesheet" /> -->
  <!-- <script type="text/javascript" src="{{url('public/home/home')}}/wp-content/cache/autoptimize/1/js/autoptimize_f094c667fc4e187057102ea897a84833.js"></script> -->
  <link rel="stylesheet" href="{{url('public/css')}}/mystyle.css">
  <!-- <link rel="stylesheet" href="{{url('public/css')}}/newstyle.css"> -->


<script type="text/javascript" src="{{url('public/homev2/js/customize')}}/megamenu.js"></script>
<section class="jobguru-job-tab-area section_70">
    <div class="container">
        <div class=" job-tab">
            <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-companies-tab" data-toggle="pill" href="" role="tab" aria-controls="pills-companies" aria-selected="true">Tuyển dụng mới nhất</a>
                </li>
            </ul>
        </div>
        <div class="top-company-tab">
            <ul>
                @foreach($news as $neww)
                <li>
                    <div class="top-company-list">
                        <div class="company-list-logo">
                            <a href="{{route('tuyen-dung2',['id'=>$neww->id])}}">
                                <div class="img-hoso">
                                    <img src="{{url('uploads/works')}}/{{$neww->cover_image}}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="company-list-details">
                            <h3><a href="{{route('tuyen-dung2',['id'=>$neww->id])}}">{{$neww->name}}</a></h3>
                            <p class="open-icon"><i class="fa fa-briefcase"></i>{{$neww->catWork->name}}</p>
                            <p class="company-state"><i class="fa fa-map-marker"></i>{{$neww->addWork->title}}</p>
                            <p class="varify"><i class="fa fa-money"></i>{{$neww->salary}}</p>
                        </div>
                        <div class="company-list-btn">
                            <a href="{{route('tuyen-dung2',['id'=>$neww->id])}}" class="jobguru-btn" style="text-decoration: none;">Xem chi tiết</a>                            
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </br>
    <div class="row" id="recruitment-wr">
        <div class="col-md-12">
            <div class=" job-tab">
                <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-companies-tab" data-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">Danh sách tuyển dụng</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                    <div class="top-company-tab">
                        <ul>
                            @foreach($news_work as $new)
                            <li>
                                <div class="top-company-list">
                                    <div class="company-list-logo">
                                        <a href="{{route('tuyen-dung2',['id'=>$new->id])}}">
                                            <div class="img-hoso">
                                                <img src="{{url('uploads/works')}}/{{$new->cover_image}}" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="company-list-details">
                                        <h3><a href="{{route('tuyen-dung2',['id'=>$new->id])}}">{{$new->name}}</a></h3>
                                        <p class="open-icon"><i class="fa fa-briefcase"></i>{{$new->catWork->name}}</p>
                                        <p class="company-state"><i class="fa fa-map-marker"></i>{{$new->addWork->title}}</p>
                                        <p class="varify"><i class="fa fa-money"></i>{{$new->salary}}</p>
                                    </div>
                                    <div class="company-list-btn">
                                        <a href="{{route('tuyen-dung2',['id'=>$new->id])}}" class="jobguru-btn" style="text-decoration: none;">Xem chi tiết</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- Video Start -->
<img src="{{url('uploads/logo')}}/banner-tuyendung.jpg" width="100%" alt="">
<script type="text/javascript">
    $('#pills-companies').css('opacity',1);
</script>
@stop()

