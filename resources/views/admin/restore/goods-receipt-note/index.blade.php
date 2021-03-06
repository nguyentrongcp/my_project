@extends('admin.master')

@section('title', 'Phục hồi - Nhập hàng')

@section('content')
    <h2 class="ui dividing header">Phục hồi >>
        <span class="header-2">Nhập hàng</span>
    </h2>

    @include('admin.layouts.components.success')

    <form action="{{ route('goods_receipt_note_restore.store', [0]) }}" method="post">
        {{ csrf_field() }}

        <button class="ui blue button" data-tooltip="Phục hồi đã chọn" type="submit"
                onclick="return confirm('Xác nhận phục hồi?')" data-position="right center">
            <i class="undo fitted icon"></i>
        </button>

        @include('admin.restore.goods-receipt-note.table')
    </form>

@endsection