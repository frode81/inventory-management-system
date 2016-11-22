@extends('en.layouts.master')

@section('title')
    Configure System
@endsection

@section('sources_top')
    @include('en.layouts._sources_tbl_top')
@endsection

@section('cf')
    class='active'
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="panel-title col-sm-8">Configure Items</div>
                        <div class="col-sm-4 text-right">
                            <a href="#" id="enable" class="btn btn-default">Enable Editing</a>&nbsp;
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-white">
                <div class="panel-body">
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab-category" role="tab" data-toggle="tab">Categories</a></li>
                            <li role="presentation"><a href="#tab-unity" role="tab" data-toggle="tab">Unity</a></li>
                            <li role="presentation"><a href="#tab-type" role="tab" data-toggle="tab">Types</a></li>
                            <li role="presentation"><a href="#tab-vat" role="tab" data-toggle="tab">VAT</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade in" id="tab-category">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Add Category</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="item-code" class="col-sm-2 control-label">Category Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="category-name" name="category-name" placeholder="Category Name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Item Type</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control m-b-sm" id="category-item" name="category-item">
                                                                <option value="0">Raw Material</option>
                                                                <option value="1">Product</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-success" id="cat-btn">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive col-md-6">
                                        <table id="cat-table" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Item</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-unity">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Add Unity</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="item-code" class="col-sm-2 control-label">Unity Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="unity-name" name="category-name" placeholder="Unity Name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Item Type</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control m-b-sm" id="unity-item" name="unity-item">
                                                                <option value="0">Raw Material</option>
                                                                <option value="1">Product</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-success" id="unity-btn">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive col-md-6">
                                        <table id="unity-table" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                            <tr>
                                                <th>Unity</th>
                                                <th>Item</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-type">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Add Type</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="item-type" class="col-sm-2 control-label">Type Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="type-name" name="type-name" placeholder="Type Name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Item Type</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control m-b-sm" id="type-item" name="type-item">
                                                                <option value="0">Raw Material</option>
                                                                <option value="1">Product</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-success" id="type-btn">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive col-md-6">
                                        <table id="type-table" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Item</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-vat">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Add VAT</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="item-code" class="col-sm-2 control-label">VAT Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="vat-name" name="vat-name" placeholder="VAT Name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">VAT Value</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="vat-value" name="vat-value" placeholder="VAT Value (ex. 0.2)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-success" id="vat-btn">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive col-md-6">
                                        <table id="vat-table" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                            <tr>
                                                <th>VAT</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        //editable
        $.fn.editable.defaults.mode = 'inline';
        //enable / disable
        $('#enable').livequery(function() {
            $(this).click(function () {
                $('#cat-table .editable').editable('toggleDisabled');
                $('#unity-table .editable').editable('toggleDisabled');
                $('#type-table .editable').editable('toggleDisabled');
                $('#vat-table .editable').editable('toggleDisabled');
            });
        });

        /* Category */
        //datatables
        var cat_tbl = $('#cat-table').DataTable({
            bProcessing: true,
            serverSide: true,
            bDestroy: true,
            bFilter: false,
            pageLength: 5,
            bLengthChange: false,
            ajax: {
                url: "{{URL::asset('/grid/categories')}}",
                type: "post"
            },

            columns: [
                { "data": "category" },
                { "data": "item" },
                { "data": "id" },
            ],
            columnDefs: [
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-title='Enter Category' " +
                                "data-pk='"+row.id+"' data-type='text' data-name='category' " +
                                "class='editable'>"+data+"</a>"
                    },
                    targets: 0
                },
                {
                    render: function ( data, type, row ) {
                        if(data == 0)
                            return "<a href='#' data-title='Select Item' " +
                                "data-pk='"+row.id+"' data-type='select' " +
                                "data-source='{{URL::asset('/configure/items')}}' "+
                                "data-name='name' "+
                                "class='editable'>Raw Material</a>";
                        else
                            return "<a href='#' data-title='Select Item' " +
                                    "data-pk='"+row.id+"' data-type='select' " +
                                    "data-source='{{URL::asset('/configure/items')}}' "+
                                    "data-name='type'"+
                                    "class='editable'>Product</a>";
                    },
                    targets: 1
                },
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-pk='"+row.id+"' class='delete-btn btn btn-sm btn-danger'>Delete</a>";
                    },
                    targets: 2
                },
                { orderable: false, "targets": 2 }
            ]
        });

        //delete event
        $('#cat-table .delete-btn').livequery(function() {
            $(this).unbind().click(function () {
                $.ajax({
                    url: "{{URL::asset('/configure/category/delete')}}",
                    type: "POST",
                    data: {pk: $(this).attr('data-pk')},
                    success: function (response) {
                        if(response.status != 200)
                        {
                            toastr.error(response.message)
                        }
                        else {
                            toastr.success(response.message);
                            cat_tbl.draw();
                        }
                    }
                });
            });
        });

        $('#cat-table .editable').livequery(function() {
            $(this).editable({
                url: "{{URL::asset('/configure/category/edit')}}",
                disabled: true,
                validate: function(value) {
                    if($.trim(value) == '') {
                        return 'This field is required';
                    }
                },
                success: function(response) {
                    if(response.status != 200)
                    {
                        toastr.error(response.message);
                        return "";
                    }
                    else {
                        toastr.success(response.message);
                    }
                }
            });
        });

        //submit form
        $('#cat-btn').unbind().livequery(function() {
            $(this).click(function () {
                var name = $('#category-name').val();
                var type = $('#category-item').val();
                $.ajax({
                    url: "{{URL::asset('/configure/category/add')}}",
                    type: "POST",
                    data: {name: name, type: type},
                    success: function (response) {
                        if(response.status != 200)
                        {
                            toastr.error('Category could not be added!')
                        }
                        else {
                            toastr.success('Category successfully added!');
                            cat_tbl.draw();
                        }
                    }
                });
            });
        });

        /* Unity */
        //datatables
        var unity_tbl = $('#unity-table').DataTable({
            bProcessing: true,
            serverSide: true,
            bDestroy: true,
            bFilter: false,
            pageLength: 5,
            bLengthChange: false,
            ajax: {
                url: "{{URL::asset('/grid/unity')}}",
                type: "post"
            },

            columns: [
                { "data": "unity" },
                { "data": "item" },
                { "data": "id" },
            ],
            columnDefs: [
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-title='Enter Unity' " +
                                "data-pk='"+row.id+"' data-type='text' data-name='unity' " +
                                "class='editable'>"+data+"</a>"
                    },
                    targets: 0
                },
                {
                    render: function ( data, type, row ) {
                        if(data == 0)
                            return "<a href='#' data-title='Select Item' " +
                                    "data-pk='"+row.id+"' data-type='select' " +
                                    "data-source='{{URL::asset('/configure/items')}}' "+
                                    "data-name='name' "+
                                    "class='editable'>Raw Material</a>";
                        else
                            return "<a href='#' data-title='Select Item' " +
                                    "data-pk='"+row.id+"' data-type='select' " +
                                    "data-source='{{URL::asset('/configure/items')}}' "+
                                    "data-name='type'"+
                                    "class='editable'>Product</a>";
                    },
                    targets: 1
                },
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-pk='"+row.id+"' class='delete-btn btn btn-sm btn-danger'>Delete</a>";
                    },
                    targets: 2
                },
                { orderable: false, "targets": 2 }
            ]
        });

        //delete event
        $('#unity-table .delete-btn').livequery(function() {
            $(this).unbind().click(function () {
                $.ajax({
                    url: "{{URL::asset('/configure/unity/delete')}}",
                    type: "POST",
                    data: {pk: $(this).attr('data-pk')},
                    success: function (response) {
                        if(response.status != 200)
                        {
                            toastr.error('Unity could not be deleted!')
                        }
                        else {
                            toastr.success('Unity successfully removed!');
                            unity_tbl.draw();
                        }
                    }
                });
            });
        });


        $('#unity-table .editable').livequery(function() {
            $(this).editable({
                url: "{{URL::asset('/configure/unity/edit')}}",
                disabled: true,
                validate: function(value) {
                    if($.trim(value) == '') {
                        return 'This field is required';
                    }
                },
                success: function(response) {
                    if(response.status != 200)
                    {
                        toastr.error(response.message);
                        return "";
                    }
                    else {
                        toastr.success(response.message);
                    }
                }
            });
        });

        //submit form
        $('#unity-btn').unbind().livequery(function() {
            $(this).click(function () {
                var name = $('#unity-name').val();
                var type = $('#unity-item').val();
                $.ajax({
                    url: "{{URL::asset('/configure/unity/add')}}",
                    type: "POST",
                    data: {name: name, type: type},
                    success: function (response) {
                        if(response.status != 200)
                        {
                            toastr.error('Unity could not be added!')
                        }
                        else {
                            toastr.success('Unity successfully added!');
                            unity_tbl.draw();
                        }
                    }
                });
            });
        });

        /* Type */
        //datatables
        var type_tbl = $('#type-table').DataTable({
            bProcessing: true,
            serverSide: true,
            bDestroy: true,
            bFilter: false,
            pageLength: 5,
            bLengthChange: false,
            ajax: {
                url: "{{URL::asset('/grid/type')}}",
                type: "post"
            },

            columns: [
                { "data": "type" },
                { "data": "item" },
                { "data": "id" },
            ],
            columnDefs: [
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-title='Enter Type' " +
                                "data-pk='"+row.id+"' data-type='text' data-name='type' " +
                                "class='editable'>"+data+"</a>"
                    },
                    targets: 0
                },
                {
                    render: function ( data, type, row ) {
                        if(data == 0)
                            return "<a href='#' data-title='Select Item' " +
                                    "data-pk='"+row.id+"' data-type='select' " +
                                    "data-source='{{URL::asset('/configure/items')}}' "+
                                    "data-name='name' "+
                                    "class='editable'>Raw Material</a>";
                        else
                            return "<a href='#' data-title='Select Item' " +
                                    "data-pk='"+row.id+"' data-type='select' " +
                                    "data-source='{{URL::asset('/configure/items')}}' "+
                                    "data-name='type'"+
                                    "class='editable'>Product</a>";
                    },
                    targets: 1
                },
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-pk='"+row.id+"' class='delete-btn btn btn-sm btn-danger'>Delete</a>";
                    },
                    targets: 2
                },
                { orderable: false, "targets": 2 }
            ]
        });

        //delete event
        $('#type-table .delete-btn').livequery(function() {
            $(this).unbind().click(function () {
                $.ajax({
                    url: "{{URL::asset('/configure/type/delete')}}",
                    type: "POST",
                    data: {pk: $(this).attr('data-pk')},
                    success: function (response) {
                        if(response.status != 200)
                        {
                            toastr.error('Type could not be deleted!')
                        }
                        else {
                            toastr.success('Type successfully removed!');
                            type_tbl.draw();
                        }
                    }
                });
            });
        });


        $('#type-table .editable').livequery(function() {
            $(this).editable({
                url: "{{URL::asset('/configure/type/edit')}}",
                disabled: true,
                validate: function(value) {
                    if($.trim(value) == '') {
                        return 'This field is required';
                    }
                },
                success: function(response) {
                    if(response.status != 200)
                    {
                        toastr.error(response.message);
                        return "";
                    }
                    else {
                        toastr.success(response.message);
                    }
                }
            });
        });

        //submit form
        $('#type-btn').unbind().livequery(function() {
            $(this).click(function () {
                var name = $('#type-name').val();
                var type = $('#type-item').val();
                $.ajax({
                    url: "{{URL::asset('/configure/type/add')}}",
                    type: "POST",
                    data: {name: name, type: type},
                    success: function (response) {
                        if(response.status != 200)
                        {
                            toastr.error('Type could not be added!')
                        }
                        else {
                            toastr.success('Type successfully added!');
                            type_tbl.draw();
                        }
                    }
                });
            });
        });

        /* VAT */
        //datatables
        var vat_tbl = $('#vat-table').DataTable({
            bProcessing: true,
            serverSide: true,
            bDestroy: true,
            bFilter: false,
            pageLength: 5,
            bLengthChange: false,
            ajax: {
                url: "{{URL::asset('/grid/vat')}}",
                type: "post"
            },

            columns: [
                { "data": "vat" },
                { "data": "value" },
                { "data": "id" },
            ],
            columnDefs: [
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-title='Enter VAT' " +
                                "data-pk='"+row.id+"' data-type='text' data-name='vat-name' " +
                                "class='editable'>"+data+"</a>"
                    },
                    targets: 0
                },
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-title='Enter Value' " +
                                "data-pk='"+row.id+"' data-type='text' data-name='vat-value' " +
                                "class='editable'>"+data+"</a>"
                    },
                    targets: 1
                },
                {
                    render: function ( data, type, row ) {
                        return "<a href='#' data-pk='"+row.id+"' class='delete-btn btn btn-sm btn-danger'>Delete</a>";
                    },
                    targets: 2
                },
                { orderable: false, "targets": 2 }
            ]
        });

        //delete event
        $('#vat-table .delete-btn').livequery(function() {
            $(this).unbind().click(function () {
                $.ajax({
                    url: "{{URL::asset('/configure/vat/delete')}}",
                    type: "POST",
                    data: {pk: $(this).attr('data-pk')},
                    success: function (response) {
                        if(response.status != 200)
                        {
                            toastr.error('VAT could not be deleted!')
                        }
                        else {
                            toastr.success('VAT successfully removed!');
                            vat_tbl.draw();
                        }
                    }
                });
            });
        });

        $('#vat-table .editable').livequery(function() {
            $(this).editable({
                url: "{{URL::asset('/configure/vat/edit')}}",
                disabled: true,
                validate: function(value) {
                    if($.trim(value) == '') {
                        return 'This field is required';
                    }
                },
                success: function(response) {
                    if(response.status != 200)
                    {
                        toastr.error(response.message);
                        return "";
                    }
                    else {
                        toastr.success(response.message);
                    }
                }
            });
        });

        //submit form
        $('#vat-btn').unbind().livequery(function() {
            $(this).click(function () {
                var name = $('#vat-name').val();
                var type = $('#vat-value').val();
                $.ajax({
                    url: "{{URL::asset('/configure/vat/add')}}",
                    type: "POST",
                    data: {name: name, type: type},
                    success: function (response) {
                        if(response.status != 200)
                        {
                            toastr.error('VAT could not be added!')
                        }
                        else {
                            toastr.success('VAT successfully added!');
                            vat_tbl.draw();
                        }
                    }
                });
            });
        });

    </script>
@endsection

@section('sources_bottom')
@endsection