@extends('layouts.main') @section( 'styles' )
<link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"
/>
@endsection @section('title', "Users") @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-heading">Users</div>
            <div class="panel-body">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
              
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection @section("javascript")
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"
></script>
<script
    type="text/javascript"
    charset="utf8"
    src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"
></script>
<script>
        $(document).ready(function () {
            $("#datatable").DataTable({
    processing: true,
    serverside: true,
    ajax: {
                        url: '{!! route('api.users') !!}',},

                        columns: [
                    {data: 'name'},
                    {data: 'email'},

    ]

            });
        });
</script>
@endsection
