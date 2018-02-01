@extends('layouts.app')
@section('css')
    <style>
        .tab-content {
            border: 1px solid #ddd;
            border-top: none;
            padding: 50px;
            border-radius: 0 0 5px 5px;
        }
        #b > img {
            box-shadow: 1px 1px 12px;
            margin-bottom: 10px;
        }
    </style>
@endsection
@section('content')
    <div id="content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li>关于我们</li>
            </ol>
            <div class="divider"></div>
        </div>
        <div class="container">
            <ul class="nav nav-tabs">
                <li  class="active"><a href="#a" data-toggle="tab">公司介绍</a></li>
                <li><a href="#b" data-toggle="tab">公司资质</a></li>
            </ul>
            <ul class="tab-content">
                <li id="a" class="tab-pane active"> &nbsp;&nbsp;&nbsp;
                    无锡坤龙工程机械有限公司是一家拥有新型振动锤高新技术研发中心的高新技术企业，致力于桩工机械的研发与销售，公司拥有强大的研发中心，
                    通过对整套挖掘机沉拔桩工作系统的深入研究,利用专业的设计软件全新设计，进行有限元分析、动态模拟、焊接工艺分析等，最大限度保证整套系统
                    设计的合理性,使设备具有低重量、高激振力、低噪音、低磨损、高寿命等特性</li>
                <li id="b" class="tab-pane">
                    {{--<img class="img-responsive center-block " src="{{ asset('pc/image/z1.png') }}">--}}
                    {{--<img class="img-responsive center-block " src="{{ asset('pc/image/z2.jpg') }}">--}}
                </li>
            </ul>
        </div>
    </div>
@endsection

