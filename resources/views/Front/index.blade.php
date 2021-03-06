
@extends('Front.layout')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <!-- Decoding The Enconding DB into php associative Array -->
                            <h5>{{json_decode($banner->content ,true)['title']}}</h5> 
                            <!-- Decoding Into Php Object -->
                            <h1>{{json_decode($banner->content)->subtitles}}</h1>
                            <p>{{json_decode($banner->content)->desc}}</p>
                            <a href="#" class="btn_1">View Course </a>
                            <a href="#" class="btn_2">Get Started </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>{{json_decode($features->content)->desc}} </p>
                        <a href="#" class="btn_1">Read More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Better Future</h4>
                            <p>{{json_decode($features->content)->desc}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Qualified Trainers</h4>
                            <p>{{json_decode($features->content)->desc}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Job Oppurtunity</h4>
                            <p>{{json_decode($features->content)->desc}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$courses_count}}</span>
                        <h4>All Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$trainers_count}}</span>
                        <h4> Trainers </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{$students_count}}</span>
                        <h4> All Students </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>{{json_decode($courses_content->content)->title}}</p>
                        <h2>{{json_decode($courses_content->content)->subtitles}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $c)
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                            <img src="{{asset('Uploads/Courses/'.$c->img)}}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="{{route('Front.cat' , $c->cat->id)}}" class="btn_4">{{$c->cat->name}}</a>
                                <h4>${{$c->price}}</h4>
                                <a href="{{route('Front.show' ,[$c->cat->id , $c->id] )}}"><h3>{{$c->name}}</h3></a>
                                <p>{{$c->small_desc}}</p>
                                <div class="author_info">
                                    <div class="author_img">
                                        <img src="{{asset('Uploads/Trainers/'.$c->trainer->img) }}" alt="">
                                        <div class="author_info_text">
                                            <p>Conduct by:</p>
                                            <h5>{{$c->trainer->name}}</h5>
                                        </div>
                                    </div>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="{{asset('Front/img')}}/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="{{asset('Front/img')}}/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="{{asset('Front/img')}}/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="{{asset('Front/img')}}/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="{{asset('Front/img')}}/icon/star.svg" alt=""></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
                <div class='d-flex justify-content-center w-100  mt-5'>
                    {!!$courses->render()!!} <!-- Pagination Of The Courses Not To Make Pressure On The Same Page-->
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->


    <!--::review_part start::-->
    <section class="testimonial_part padding_top pb-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">

                        @foreach ($tests as $t)
                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p>{{$t->desc}}</p>
                                            <h4>{{$t->name}}</h4>
                                            <h5> {{$t->spec}}</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-2 col-sm-4">
                                        <div class="testimonial_slider_img">
                                            <img src="{{asset('Uploads/Tests/'.$t->img)}}" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->


@endsection

    