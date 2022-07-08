<!DOCTYPE html>
<html>
<head>
<title>TASK FARIZ</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<style>
  .show_office {
    background-color: #C2FBD7;
    border-radius: 50px;
    border-width: 0;
    box-shadow: rgba(25, 25, 25, 0.04) 0 0 1px 0, rgba(0, 0, 0, 0.1) 0 3px 4px 0;
    color: #008000;
    cursor: pointer;
    display: inline-block;
    font-family: Arial, sans-serif;
    font-size: 1em;
    height: 40px;
    padding: 0 25px;
    transition: all 200ms;
  }
  </style>
</head>
<body>

<div class="container">
<h1 align="center">LARAVEL DEVELOPER FARIZ</h1>
<br/>


<table id="example" class="table table-striped table-bordered text-center" >
    <thead>
        <tr id="">
            <th width="5%">No</th>
            <th width="5%">Name</th>
            <th width="30%">Email</th>
            <th width="30%">Office Details</th>
            <th width="20%">Action</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($employees_details as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->company->office_name}}</td>
            <td>
                <button type="button" class="show_office" data-toggle="modal" data-target="#exampleModalCenter"
                data-office_name="{{$employee->company->office_name}}" 
                data-address="{{$employee->company->address}}" 
                data-state="{{$employee->company->state}}" 
                data-country="{{$employee->company->country}}">
                    Office Details
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <div class="form-group row p-l-10">
                    <label class="col-sm-3 control-label">Office Name</label>
                        <div class="col-sm-8 p-l-10">
                            <input type="text" class="form-control" id="office_name" name="office_name" readonly >
                        </div>
                    </div>
                    <div class="form-group row p-l-10">
                    <label class="col-sm-3 control-label">Address </label>
                        <div class="col-sm-8 p-l-10">
                        <input type="text" class="form-control"  id="address" name="address" readonly >
                        </div>
                    </div>
                    <div class="form-group row p-l-10">
                    <label class="col-sm-3 control-label">State </label>
                        <div class="col-sm-8 p-l-10">
                        <input type="text" class="form-control"  id="state" name="state"  readonly>
                        </div>
                    </div>
                    <div class="form-group row p-l-10">
                    <label class="col-sm-3 control-label">Country </label>
                        <div class="col-sm-8 p-l-10">
                        <input type="text" class="form-control"  id="country" name="country" readonly >
                        </div>
                    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"  data-dismiss="modal">CLOSE</button>
      </div>
    </div>
  </div>
</div>

</body>

<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript">

$(document).ready(function () {

/* Show details office */
$('.show_office').on("click", function(event){

var office_name = $(this).data('office_name');
var address = $(this).data('address');
var state = $(this).data('state');
var country = $(this).data('country');

$('input[name="office_name"]').val(office_name);
$('input[name="address"]').val(address);
$('input[name="state"]').val(state);
$('input[name="country"]').val(country);
});

$('#example').DataTable( {
    
        "oLanguage": {
                "sLengthMenu": "Papar _MENU_ Rekod",
                "sSearch": "<span>Cari:</span> _INPUT_", //search
        "oPaginate": {
                "sNext": "Seterusnya",
                "sPrevious": "Sebelum"
        }
        },

        "bInfo" : false,

    });

});

</script>
</html>