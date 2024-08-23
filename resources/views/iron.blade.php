@extends('layout')
@section('content')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Iron Items Scrap -->
    <div class="container">
        <div class="mid_area">
            <div class="cms_area">

                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="list_left">
                            <p class="fs11 float-right clear_all"><a href="products.html" class="uu ">Clear All</a></p>

                            <h2 class="fs14 d-none d-lg-block"><b>Filter Results</b></h2>

                            <h2 class="d-md-block d-lg-none show_next hand">Filter Results <i class="fas fa-bars"></i>
                                <p class="clearfix"></p>
                            </h2>
                            <div class="filter_dis">
                                <div class="flter_bx">
                                    <div class="filt_hed">Categories</div>
                                    <div id="categories_list" class="list_area">
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat1">
                                            <a href="{{url('paper')}}">Paper</a>
                                        </p>
                                        <div id="cat1" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat2">
                                            <a href="{{url('plastic')}}">Plastic</a>
                                        </p>
                                        <div id="cat2" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat3">
                                            <a href="{{url('iron')}}">Iron Items</a>
                                        </p>
                                        <div id="cat3" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat4">
                                            <a href="{{url('copper')}}">Copper Items</a>
                                        </p>
                                        <div id="cat4" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat5">
                                            <a href="{{url('electronic')}}">Electronic Items</a>
                                        </p>
                                        <div id="cat5" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat6">
                                            <a href="{{url('metal')}}">Metal-Others</a>
                                        </p>
                                        <div id="cat6" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat7">
                                            <a href="{{url('glass')}}">Glass</a>
                                        </p>
                                        <div id="cat7" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="mb20">Iron Items Scrap Price List</h1>
                        <div class="scrap_listing">
                            <form action="" id="myform" method="post" accept-charset="utf-8">
                                <input type="hidden" name="per_page" value="">
                                <input type="hidden" name="offset" value="0">
                            </form>
                            <div id="my_data">
                                <ul id="prodListingContainer">
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/metal.jpg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Iron</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;30.00/kg</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;250.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/tin.jpg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Tin/Light Iron</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;16.00/kg</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;16.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/bike.jpeg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">bike per piece</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,500.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;2,200.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/scooty.jpeg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Scooter per piece</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,300.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;2,000.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



    <!-- Iron ItemsEnd -->
@endsection
