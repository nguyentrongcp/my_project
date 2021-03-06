<table class="ui celled striped table bulk_action">
    <thead>
    <th class="collapsing">
        <input type="checkbox" id="check-all" class="flat">
    </th>
    <th class="collapsing">STT</th>
    <th>Tên loại sản phẩm</th>
    <th class="center aligned">Sửa</th>
    </thead>

    <tbody>
    @foreach($product_types as $stt => $product_type)
        @php $specification_product_types = \App\SpecificationProductType::where('product_type_id', $product_type->id)->get() @endphp
        <tr>
            <td class="center aligned">
                <input type="checkbox" id="table_records" class="flat"
                       name="product-type-ids[]" value="{{ $product_type->id }}">
            </td>
            <td class="center aligned">{{ $stt + 1 }}</td>
            <td>{{ $product_type->name }}</td>
            <td class="collapsing center aligned">
                <a class="ui green small label" onclick="$('#modal-edit-product-type-{{$product_type->id}}').modal('show')">
                    <i class="edit fitted icon"></i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="ui column centered grid">
    {{ $product_types->links() }}
</div>