@extends('layouts.app')
@section('content')
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
        <h2>Blog Archive</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
        <div class="container">
            <div class="row">
                <!-- start course content -->
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="courseArchive_content">
                        <!-- start blog archive  -->
                        <div class="row">
                            <!-- start single blog archive -->
                            <div class="col-lg-12 col-12 col-sm-12">
                                <div class="single_blog_archive wow fadeInUp">
                                    <div class="blogimg_container">
                                        <a href="#" class="blog_img">
                                            <img alt="img" src="{{asset('img/blog.jpg')}}">
                                        </a>
                                    </div>
                                    <h2 class="blog_title"><a href="blog-single.html"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
                                    <div class="blog_commentbox">
                                        <p><i class="fa fa-user"></i>Richard Remus</p>
                                        <p><i class="fa fa-calendar"></i>15 March 2015</p>
                                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a>
                                    </div>
                                    <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                                    <a class="blog_readmore" href="blog-single.html">Read More</a>
                                </div>
                            </div>
                            <!-- start single blog archive -->
                            <!-- start single blog archive -->
                            <div class="col-lg-12 col-12 col-sm-12">
                                <div class="single_blog_archive wow fadeInUp">
                                    <div class="blogimg_container">
                                        <a href="#" class="blog_img">
                                            <img alt="img" src="{{asset('')}}img/blog.jpg">
                                        </a>
                                    </div>
                                    <h2 class="blog_title"><a href="blog-single.html"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
                                    <div class="blog_commentbox">
                                        <p><i class="fa fa-user"></i>Richard Remus</p>
                                        <p><i class="fa fa-calendar"></i>15 March 2015</p>
                                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a>
                                    </div>
                                    <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                                    <a class="blog_readmore" href="blog-single.html">Read More</a>
                                </div>
                            </div>
                            <!-- start single blog archive -->
                            <!-- start single blog archive -->
                            <div class="col-lg-12 col-12 col-sm-12">
                                <div class="single_blog_archive wow fadeInUp">
                                    <div class="blogimg_container">
                                        <a href="#" class="blog_img">
                                            <img alt="img" src="{{asset('img/blog.jpg')}}">
                                        </a>
                                    </div>
                                    <h2 class="blog_title"><a href="blog-single.html"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
                                    <div class="blog_commentbox">
                                        <p><i class="fa fa-user"></i>Richard Remus</p>
                                        <p><i class="fa fa-calendar"></i>15 March 2015</p>
                                        <a href="#"><i class="fa fa-comments"></i>20 Comments</a>
                                    </div>
                                    <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                                    <a class="blog_readmore" href="blog-single.html">Read More</a>
                                </div>
                            </div>
                            <!-- start single blog archive -->
                        </div>
                        <!-- end blog archive  -->
                        <nav>
                            <ul class="pagination wow fadeInLeft">
                                <li><a href="#"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>




                <!-- start course archive sidebar -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="courseArchive_sidebar">
                        <!-- start single sidebar -->
                        <div class="single_sidebar">
                            <h2>Type d'actualité <span class="fa fa-angle-double-right"></span></h2>
                            <ul class="news_tab">
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#" class="news_img">
                                                <img alt="img" src="{{asset('img/news.jpg')}}" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">Actualité</a>
                                            <span class="feed_date">test</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#" class="news_img">
                                                <img alt="img" src="{{asset('img/news.jpg')}}" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">Notification</a>
                                            <span class="feed_date">test</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#" class="news_img">
                                                <img alt="img" src="{{asset('img/news.jpg')}}" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">Evenement</a>
                                            <span class="feed_date">test</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End single sidebar -->




                    </div>
                </div>
                </div>
            </div>
    </section>

@endsection