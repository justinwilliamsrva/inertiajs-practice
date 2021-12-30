@extends('layouts.main') @section( 'styles' )
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/datatables.min.css"/>


@endsection @section('title', "Users") @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-heading">Users</div>
            <div class="panel-body">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/datatables.min.js"></script> -->

@endsection @section("javascript")
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/b-2.1.1/b-colvis-2.1.1/datatables.min.js"></script>

<script>
    $(document).ready(function () {
        var table = $("#datatable").DataTable({

            serverside: true,
            ajax: {
                url: '{!! route('api.users') !!}',
            },

            columns: [
            { data: 'id' },

                { data: 'name' },
                { data: 'email' },

            ], buttons: ['colvis'],
            dom:"Blfrtip"



        });
        table.buttons().container()
        .insertBefore( '#datatable_filter' );
    });
</script>
@endsection
