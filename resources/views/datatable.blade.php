@extends('layouts.main') @section( 'styles' )

<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/datatables.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/datatables.min.css" />
@endsection @section('title', "Users") @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-heading">Users</div>
            <div class="panel-body">
                <table class="table" id="datatable">
                    <input class="filter-input" type="text" data-column="1" placeholder="Search Name" />
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection @section("javascript")

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/b-html5-2.1.1/b-print-2.1.1/datatables.min.js"></script>

<script>
    $(document).ready(function () {
        var table = $("#datatable").DataTable({
            responsive: true,            serverside: true,
            ajax: {
                url: '{!! route('api.users') !!}',
            },
            columnDefs: [
                {
                    targets: -1,
                    render: function (data, type, row) {
                        return '<a href="" class="mr-2 btn btn-xs btn-info ">Edit</a>' + '<a href="" class="ml-2 btn btn-xs btn-danger">Delete</a>';


                    }
                },

            ],
            columns: [
                { data: 'id' },

                { data: 'name' },
                { data: 'email' },
                { data: '' },


            ], buttons: [
                {
                    extend: 'pdfHtml5',
                   title: 'Users',
                   messageTop: 'Here are the users you selected'
                },
                'colvis','copy', 'excel',  'print', 'csv',


            ],
            dom: "Blfrtip"



        });
        $(".filter-input").keyup(function () { table.column($(this).data('column')).search($(this).val()).draw(); });
    });
</script>
@endsection