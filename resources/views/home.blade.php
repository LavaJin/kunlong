@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="carousel slide" id="slidershows" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#slidershows" data-slide-to="0"></li>
                                <li  data-target="#slidershows" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('pc/image/banner02.jpg') }}" alt="" class="img-responsive center-block">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('pc/image/banner02.jpg') }}" alt="" class="img-responsive center-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <p class="text-center">
                    <span style="color: #0055ab;">新闻资讯 </span>
                    <span style="color: #949494"> |  New center</span>
                    <a href="/category/{{ $category->id ?? 0 }}"><span class="glyphicon glyphicon-arrow-right"></span></a>
                </p>
                <div class="animated newCenter text-center">
                    <span style="color: #949494">{{ $news->created_at ?? '' }} <a href="/news/{{ $news->id ?? '' }}">查看</a> </span>
                    <p> {{  $news->title ?? '' }}</p>
                </div>
                <div class="text-center" style="margin-top: 18px;">
                    <span class="glyphicon icons glyphicon-triangle-left" style="margin-right: 10px;"></span>
                    <span class="glyphicon icons glyphicon-triangle-right"></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 Mycol">
                <p class="text-center">
                    <span style="color: #0055ab;">公司简介 </span>
                    <span style="color: #949494"> |  About us</span>
                    <a href="/about"><span class="glyphicon glyphicon-arrow-right"></span></a>
                </p>
                <div>
                    <p style="text-indent:25px;padding-bottom: 13px;">江苏宜宝设备制造有限公司成立于2015年，总投资1500万，主要从事高效节能设备 —板式换热器以及换热机组，蒸发冷凝设备及其系统的生产销售；及换热设备维护和供热节能系统的技术咨询与服务。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #fbfbfb;margin-top: 20px;">
        <div class="row">
            <div class="text-center" style="padding: 20px 0;">
                <span style="color: #0055ab;">产品中心 </span>
                <span style="color: #949494"> |  Product center</span>

            </div>
        </div>
    </div>
    <div class="container" >
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <span>公司资质</span>
                <span> | </span>
                <span style="color: #949494">Honor</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                <img src="{{ asset('pc/image/img1.jpg') }}" alt="">
                <span>无锡坤龙工程机械有限公司是一家拥有新型振动锤高新技术研发中心的高新技术企业，致力于桩工机械的研发与销售，通过对整套挖掘机沉拔桩工作系统的深入研究，利用专业的设计软件全新设计，进行有限元分析、动态模拟、焊接工艺分析等，最大限度保证整套系统设计的合理性，使设备具有低重量、高激振力、低噪音、低磨损、高寿命等特性.</span>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span>经典案例</span>
                <span> | </span>
                <span style="color: #949494">Case</span>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                <img src="{{ asset('pc/image/img2.jpg') }}" alt="">
                <span>公司产品在上海、杭州、海门等多地销售，深得客户好评。在市政、桥梁、铁路、湖泊围堰、建筑地基等中短桩工程，用于打拔平板桩、槽钢、工字钢、水泥方桩、圆筒桩及各种形状拉森桩，在现阶段由于产品大偏心力矩的设计，使得在施工水泥桩有突出优势，在业界有良好的口碑.</span>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span>技术支持</span>
                <span> | </span>
                <span style="color: #949494">Support</span>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
                <img src="{{ asset('pc/image/img3.jpg') }}" alt="">
                <span>公司生产的高频液压振动沉拔桩锤是专门搭配挖掘机使用，有效利用挖掘机的液压动力及充分发挥挖掘机的机动性强, 操作灵活的特性使桩基工程施工迈向新阶段,大幅节约施工成本,提高工作效率 让您的挖掘机实现一机多用，提高投资效益.</span>
            </div>
        </div>
    </div>
@endsection

