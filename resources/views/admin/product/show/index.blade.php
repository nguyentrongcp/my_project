@extends('admin.master')

@section('title', 'Chi tiết sản phẩm')

@section('nav_title', 'Chi tiết sản phẩm')

@section('content')

    <h2 class="ui dividing header">
        Sản phẩm >> <span class="header-2"> {{ $product->name }}</span>
    </h2>

    @include('admin.layouts.components.success')

    <div class="ui secondary menu">
        <a class="item active" data-tab="first">Thông tin</a>
        <a class="item" data-tab="second">Mô tả</a>
    </div>
    <div class="ui tab active segment" data-tab="first">
        <h3 class="ui dividing header" style="margin-top: 0px">Thông tin cơ bản</h3>
        <div class="ui two column grid">
            <div class="column">
                <div class="ui grid">
                    <div class="five wide column">
                        <strong>Tên sản phẩm:</strong>
                    </div>
                    <div class="eleven wide column">
                        {{ $product->name }}
                    </div>
                    <div class="five wide column">
                        <strong>Ngày tạo:</strong>
                    </div>
                    <div class="eleven wide column">
                        {{ $product->product_created_at }}
                    </div>
                    <div class="five wide column">
                        <strong>Ngày cập nhật:</strong>
                    </div>
                    <div class="eleven wide column">
                        {{ $product->product_updated_at }}
                    </div>
                    <div class="five wide column">
                        <strong>Số lượng tồn kho:</strong>
                    </div>
                    <div class="eleven wide column">
                        {{ $product->quantity }}
                    </div>
                    <div class="five wide column">
                        <strong>Giá:</strong>
                    </div>
                    <div class="eleven wide column">
                        <a href="#" data-tooltip="Xem lịch sử thay đổi giá">
                            <strong>
                                {{ number_format($product->currentPrice()) }} đ
                            </strong>
                        </a>
                    </div>
                    <div class="five wide column">
                        <strong>Tình trạng bán:</strong>
                    </div>
                    <div class="eleven wide column">
                        {{ ($product->is_activated)?'Đang bán':'Không kinh doanh' }}
                    </div>
                    <div class="five wide column">
                        <strong>Thương hiệu:</strong>
                    </div>
                    <div class="eleven wide column">
                        {{ $product->trademark->name }}
                    </div>
                    <div class="five wide column">
                        <strong>Loại sản phẩm:</strong>
                    </div>
                    <div class="eleven wide column">
                        {{ $product->productType->name }}
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui grid">
                    <div class="five wide column">
                        <strong>Ảnh đại diện:</strong>
                    </div>
                    <div class="eleven wide column">
                        <div class="ui small image">
                            <img src="/{{ $product->avatar }}">
                        </div>
                    </div>
                </div>
                <div class="ui grid">
                    <div class="five wide column">
                        <strong>Ảnh chi tiết:</strong>
                    </div>
                    <div class="eleven wide column">
                        <div class="ui three column grid">
                            @foreach($images as $image)
                                <div class="column">
                                    <div class="ui small image">
                                        <img src="/{{ $image->link }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="ui dividing header" style="margin-top: 40px">Thông số kỹ thuật</h3>
        <div class="ui two column grid">
            <div class="column">
                <div class="ui grid">
                    @foreach($specs as $spec)
                        <div class="five wide column">
                            {{ $spec->getSpecName() }}:
                        </div>
                        {{--<div class="eleven wide column">--}}
                            {{--{{ $product->getSpecValue($spec->specification_id) }}--}}
                        {{--</div>--}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="ui tab segment" data-tab="second">

    </div>

@endsection