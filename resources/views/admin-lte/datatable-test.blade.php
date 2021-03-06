<?php
//Minor (semi-working simple without CRUD)example of datatables, for Core/Major version of DataTables with CRUD see /Controllers/YajraDataTablesCrudController + /views/yajra-data-tables-crud2/data_smaple.php
//Or see simple without CRUD)example of datatables, see /Controllers/AdminLTEController/public function adminlte()
?>
@extends('layouts.app')


@section('content')


	
<div class="container mt-5">
    <h2 class="mb-4">Laravel 7|8 Yajra Datatables Example</h2>
	<p>Minor (semi-working simple without CRUD)example of datatables, for Core/Major version of DataTables with CRUD see /Controllers/YajraDataTablesCrudController + /views/yajra-data-tables-crud2/data_smaple.php</p>
    <p> Or see simple without CRUD)example of datatables, see /Controllers/AdminLTEController/public function adminlte()</p>
	<table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


@stop



@section('js')

<!--- SOLUTION!!!! MEGA Fix -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<!--- SOLUTION!!!! MEGA Fix -->


<script>
$(document).ready( function () {
//$(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('students.list') }}",  //ajax: "http://localhost/abz/public/students/list",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'username', name: 'username'},
            {data: 'phone', name: 'phone'},
            {data: 'dob', name: 'dob'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
	
	
	
	
	

    
  //});
  
  });
</script>


@stop



