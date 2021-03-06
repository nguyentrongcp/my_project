<div class="ui segment">
    <div class="ui tiny five statistics">
        <div class="statistic">
            <div class="value">
                <i class="clipboard outline icon"></i>
                <span>{{ $order_quantity['total_of_quantity'] }}</span>
            </div>
            <div class="label">
                Tổng số đơn hàng
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                <i class="icons">
                    <i class="clipboard outline icon"></i>
                    <i class="bottom right corner yellow exclamation circle icon"></i>
                </i>
                <span>{{ $order_quantity['unapprove'] }}</span>
            </div>
            <div class="label">
                Chưa duyệt
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                <i class="icons">
                    <i class="clipboard outline icon"></i>
                    <i class="bottom right corner blue clock icon"></i>
                </i>
                <span>{{ $order_quantity['approved'] }}</span>
            </div>
            <div class="label">
                Đã duyệt
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                <i class="icons">
                    <i class="clipboard outline icon"></i>
                    <i class="bottom right corner green check circle icon"></i>
                </i>
                <span>{{ $order_quantity['complete'] }}</span>
            </div>
            <div class="label">
                Đã giao hàng
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                <span>{{ number_format($order_quantity['total_of_price']) }}</span><sup>đ</sup>
            </div>
            <div class="label">
                Tổng tiền
            </div>
        </div>
    </div>
</div>