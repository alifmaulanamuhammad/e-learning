@extends('frontend.layouts.master')
@section('content')
<section class="wsus__courses_3 pt_120 xs_pt_100 mt_120 xs_mt_90 pb_120 xs_pb_100">
    <div class="container">

        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_45">
                    <h5>Project Student</h5>
                    <h2>See what projects our students have created</h2>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-xxl-6 col-xl-8 m-auto">
                <div class="wsus__filter_area mb_15">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id=""
                                    data-bs-toggle="pill" data-bs-target="" type="button"
                                    role="tab" aria-controls="pills-home"
                                    aria-selected="true"></button>
                            </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id=""
                                data-bs-toggle="pill" data-bs-target="" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true"></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id=""
                                data-bs-toggle="pill" data-bs-target="#" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true"></button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id=""
                                data-bs-toggle="pill" data-bs-target="" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true"></button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id=""
                                data-bs-toggle="pill" data-bs-target="#" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true"></button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="{{ asset('frontend/assets/images/inventory.png') }}" alt="Courses" class="img-fluid">

                                <span class="time"><i class="far fa-clock"></i></span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <span></span>
                                    </p>
                                </div>
                                <a class="title" href=""></a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/author_img_2.jpg') }}" alt="Author" class="img-fluid">
                                    </div>
                                    <h4></h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn add_to_cart" href="#" data-course-id="">Read More<i class="far fa-arrow-right"></i></a>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="{{ asset('frontend/assets/images/inventory.png') }}" alt="Courses" class="img-fluid">

                                <span class="time"><i class="far fa-clock"></i></span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <span></span>
                                    </p>
                                </div>
                                <a class="title" href=""></a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/author_img_2.jpg') }}" alt="Author" class="img-fluid">
                                    </div>
                                    <h4></h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn add_to_cart" href="#" data-course-id="">Read More<i class="far fa-arrow-right"></i></a>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="{{ asset('frontend/assets/images/inventory.png') }}" alt="Courses" class="img-fluid">

                                <span class="time"><i class="far fa-clock"></i></span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <span></span>
                                    </p>
                                </div>
                                <a class="title" href=""></a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/author_img_2.jpg') }}" alt="Author" class="img-fluid">
                                    </div>
                                    <h4></h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn add_to_cart" href="#" data-course-id="">Read More<i class="far fa-arrow-right"></i></a>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="{{ asset('frontend/assets/images/inventory.png') }}" alt="Courses" class="img-fluid">

                                <span class="time"><i class="far fa-clock"></i></span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <span></span>
                                    </p>
                                </div>
                                <a class="title" href=""></a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/author_img_2.jpg') }}" alt="Author" class="img-fluid">
                                    </div>
                                    <h4></h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn add_to_cart" href="#" data-course-id="">Read More<i class="far fa-arrow-right"></i></a>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Project <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="" alt="Courses" class="img-fluid">

                                <span class="time"><i class="far fa-clock"></i></span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span></span>
                                    </p>
                                </div>

                                <a class="title" href=""></a>
                                <ul>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <a class="author" href="#">
                                    <div class="img">
                                        <img src="" alt="Author" class="img-fluid">
                                    </div>
                                    <h4></h4>
                                </a>
                            </div>
                            <div class="wsus__single_courses_3_footer">
                                <a class="common_btn add_to_cart" href="#" data-course-id="">Read More<i class="far fa-arrow-right"></i></a>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
