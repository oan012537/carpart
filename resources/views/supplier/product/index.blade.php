@extends('supplier.layouts.template')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<input type="hidden" id="pageName" name="pageName" value="setting-product">
<div class="content" id="setting-product">
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Success!</strong> {!! session()->get('message') !!}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="box__titlepage">
                    <h3>{{ trans('file.Manage Product')}}</h3>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box__btnadd">
                    <a href="{{ route('products.create') }}" class="btn btn__add"><i class="fa-solid fa-circle-plus"></i>{{ trans('file.Add Product')}}</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="box__filter">
                    {{-- searching --}}
                    <form id="frm-search" action="{{ route('products.index') }}" method="get">
                        <div class="row">
                            <input type="hidden" name="status_code" value="{{ $status_code }}">
                            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="brand_id">{{ trans('file.Brand') }}</label>
                                    <select id="brand_id" class="selectpicker form-select" aria-label="Default select example" name="brand_id">
                                        <option value="">{{ trans('file.Select brand') }}</option>
                                        @foreach ($lims_brand_data as $brand)
                                            <option value="{{ $brand['id'] }}" @if($brand['id'] == $brand_id) selected @endif>{{ $brand['name_en'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="category_id">{{ trans('file.Category')}}</label>
                                    <select id="category_id" class="form-select" aria-label="Default select example" name="category_id">
                                        <option value="">{{ trans('file.Select category') }}</option>
                                        @foreach ($lims_category_data as $category)
                                            <option value="{{ $category['id'] }} @if($category['id'] == $category_id) selected @endif">{{ $category['name_en'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="form-group">
                                    <label for="product_name">{{ trans('file.Product Name')}}</label>
                                    <input id="product_name" type="text" name="product_name" class="form-control"
                                            placeholder="{{ trans('file.Specify') }}" value="{{ $product_name }}">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                                <div class="bot__btn">
                                    <button type="submit" class="btn btn__search">{{ trans('file.Search')}}</button>
                                    <button type="button" class="btn btn__reset">{{ trans('file.Reset')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- searching --}}
                </div>

                {{-- product status --}}
                <div class="box__tab">
                    <form id="frm-get-product" action="{{ route('products.index') }}" method="get">
                    </form>
                    <nav>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($status_code == 'all' && $total_all_record > 0) active @endif" 
                                        id="total-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#total" 
                                        type="button" role="tab" 
                                        aria-controls="total" 
                                        aria-selected="true">{{ trans('file.All')}}
                                        <span>{{ $total_all_record }}</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($status_code == 'selling') active @endif"
                                        id="selling-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#selling" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="selling" 
                                        aria-selected="false">{{ trans('file.Selling')}}
                                        <span>{{ $total_selling_record }}</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($status_code == 'sold') active @endif" 
                                        id="sold-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#sold" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="sold" 
                                        aria-selected="false">{{ trans('file.Sold')}}
                                        <span>{{ $total_sold_record }}</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($status_code == 'suspended') active @endif" 
                                        id="banned-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#banned" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="banned" 
                                        aria-selected="false">{{ trans('file.Suspended')}}
                                        <span>{{ $total_suspended_record }}</span>
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if($status_code == 'cancle') active @endif" 
                                        id="cancle-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#cancle" 
                                        type="button" 
                                        role="tab" 
                                        aria-controls="cancle" 
                                        aria-selected="false">{{ trans('file.Cancel')}}
                                        <span>{{ $total_cancle_record }}</span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                    {{-- product status --}}

                    {{-- table header --}}
                    <div class="tab-content" id="contentproduct">

                        <div class="tab-pane fade show active" id="total" role="tabpanel" aria-labelledby="total-tab">
                            <div class="box__options">
                                {{-- implement later --}}
                                {{-- <div class="row">
                                    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                                        <div class="wrapper__btn">
                                            <button class="btn btn__import"><i class="fa-solid fa-download"></i> {{ trans('file.Import')}}</button>
                                            <button class="btn btn__export"><i class="fa-solid fa-upload"></i> {{ trans('file.Export')}}</button>
                                            <button class="btn btn__print"><i class="fa-solid fa-print"></i> {{ trans('file.Print')}}</button>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- table header --}}

                            {{-- datatable --}}
                            <div class="table-responsive">
                                <table id="product-list-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="not-exported"></th>
                                            <th>{{ trans('file.Product Code')}}</th>
                                            <th>{{ trans('file.Image')}}</th>
                                            <th>{{ trans('file.Item Name')}}</th>
                                            <th>{{ trans('file.Category / Sub Category')}}</th>
                                            <th>{{ trans('file.Brand')}}</th>
                                            <th>{{ trans('file.Model')}}</th>
                                            <th>{{ trans('file.Price')}}</th>
                                            <th>{{ trans('file.Status')}}</th>
                                            <th>{{ trans('file.Updated By')}}</th>
                                            <th>{{ trans('file.Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product_list as $key => $product)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{ $product['product_code'] }}</td>
                                            <td><i class="fa-solid fa-image" style="width:50px;height:50px;"></i></td>
                                            <td>{{ $product['name_en'] }}</td>
                                            <td>{{ $product['category'] }}</td>
                                            <td>{{ $product['brand'] }}</td>
                                            <td>{{ $product['model'] }}</td>
                                            <td>{{ $product['price'] }}</td>
                                            <td>
                                                @if ($product['status_code'] == 'selling')
                                                    <div class="box__status status-selling">{{ $product['status_code'] }}</div>
                                                @elseif ($product['status_code'] == 'sold')
                                                    <div class="box__status status-sold">{{ $product['status_code'] }}</div>
                                                @elseif ($product['status_code'] == 'suspended')
                                                    <div class="box__status status-banned">{{ $product['status_code'] }}</div>
                                                @elseif ($product['status_code'] == 'cancle')
                                                    <div class="box__status status-cancle">{{ $product['status_code'] }}</div>
                                                @endif
                                            </td>
                                            <td>{{ $product['updated_by'] }}</td>
                                            <td>
                                                <div class="box__wrapperbutton">
                                                    <a href="{{ route('products.edit', $product['id']) }}" class="btn btn__edit">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- event log --}}
                {{-- implement later --}}
                {{-- <div class="box__history">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ประวัติเอกสาร
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>15-01-2564 21:14:06 Thanatcha Singsomboon เพิ่มสินค้า PRO001</p>
                                    <p>15-01-2564 21:14:05 Thanatcha Singsomboon ส่งออกข้อมูลสินค้า</p>
                                    <p>15-01-2564 21:14:05 Thanatcha Singsomboon แก้ไขสินค้า PRO001</p>
                                    <p>15-01-2564 21:13:28 Thanatcha Singsomboon เปิดดสินค้า PRO001</p>
                                    <p> 15-01-2564 21:13:24 Thanatcha Singsomboon เปิดดสินค้า PRO001</p>
                                    <p>14-01-2564 21:13:24 Thanatcha Singsomboon เปิดดสินค้า PRO001 </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}
                {{-- event log --}}
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(".nav_list #product #product-list-menu").addClass("activemenumain");

    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // auto close alert
         setTimeout(() => {
            $('.alert').alert('close');
        }, 3000);   
        // auto close alert

        // datatable
        var table = $('#product-list-table').DataTable({
            "order": [],
            'language': {
                'lengthMenu': '{{ trans("file.Show") }} _MENU_ {{trans("file.records per page")}}',
                "info": '<small>{{trans("file.Showing")}} _START_ - _END_ (_TOTAL_)</small>',
                "search": '{{trans("file.Search")}}',
                'paginate': {
                    'previous': '<i class="fa-solid fa-chevron-left"></i>',
                    'next': '<i class="fa-solid fa-chevron-right"></i>'
                }
            },
            'columnDefs': [{
                    "orderable": false,
                    'targets': [0, 2, 10]
                },
                {
                    'render': function(data, type, row, meta) {
                        if (type === 'display') {
                            data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes" style="width:20px;height:20px;"><label></label></div>';
                        }

                        return data;
                    },
                    'checkboxes': {
                        'selectRow': true,
                        'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                    },
                    'targets': [0]
                }
            ],
            'select': { style: 'multi',  selector: 'td:first-child'},
            'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],

        });
        // datatable


        // load data by product status
        var status_code = null;

        $('#total-tab').on('click', function() {
            status_code = 'all';
            $('#frm-get-product').append('<input type="hidden" name="status_code" value="' + status_code + '">');
            $('#frm-get-product').submit();
        });

        $('#selling-tab').on('click', function() {
            status_code = 'selling';
            $('#frm-get-product').append('<input type="hidden" name="status_code" value="' + status_code + '">');
            $('#frm-get-product').submit();
            // getproductByStatus(status_code);
        });

        $('#sold-tab').on('click', function() {
            status_code = 'sold';
            $('#frm-get-product').append('<input type="hidden" name="status_code" value="' + status_code + '">');
            $('#frm-get-product').submit();
        });

        $('#banned-tab').on('click', function() {
            status_code = 'suspended';
            $('#frm-get-product').append('<input type="hidden" name="status_code" value="' + status_code + '">');
            $('#frm-get-product').submit();
        });

        $('#cancle-tab').on('click', function() {
            status_code = 'cancle';
            $('#frm-get-product').append('<input type="hidden" name="status_code" value="' + status_code + '">');
            $('#frm-get-product').submit();
        });

        // not use
        function getproductByStatus(status_code) {
            $.ajax({
                type: 'get',
                url: 'products/get-product-data',
                data: {
                    'status_code': status_code
                },
                dataType: 'json',
                success: function(data) {
                    var newBody = $("<tbody>");
                    data.forEach(product => {
                        var newRow = $("<tr>");
                        var cols = '';
                        cols += '<td>' + product.key + '</td>';
                        cols += '<td>' + product.product_code + '</td>';
                        cols += '<td>' + product.image + '</td>';
                        cols += '<td>' + product.name_en + '</td>';

                        cols += '<td>' + product.category + product.sub_category + '</td>';
                        cols += '<td>' + product.brand + '</td>';
                        cols += '<td>' + product.model + '</td>';
                        cols += '<td>' + product.price + '</td>';
                        cols += '<td>' + product.status_code + '</td>';
                        cols += '<td>' + product.updated_by + '</td>';
                        cols += '<td>' + product.options + '</td>';

                        newRow.append(cols);
                        newBody.append(newRow);

                    });
                    $('#product-list-table').append(newBody);

                    window.location.reload();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        // load data by product status

        $('.btn__reset').on('click', function(){
            $('select[name="brand_id"]').prop('selectedIndex', 0);
            $('select[name="category_id"]').prop('selectedIndex', 0);
            $('input[name="product_name"]').val('');
            $('#frm-search').submit();
        });


    });
</script>
@endsection
