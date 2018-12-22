@extends('layouts.default')
@section('content')

<h1>VIEWING</h1>
         <table class="table table-bordered datatable" id="table-4" style="color: black;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $value): ?>
                        <tr class="odd gradeX">
                            <td class="center"><?php  echo $key; ?></td>
                            <td class="center"><?php  echo($value->name); ?></td>
                            <td class="center"><?php  echo($value->email); ?></td>
                        </tr>                        
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Count</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
            </table>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    var $table4 = jQuery("#table-4");
                    $table4.DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            'excelHtml5',
                            'csvHtml5',
                            'pdfHtml5'
                        ]
                    });
                });
            </script>

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>  
@endif

<h1>INSERTING</h1>
            <div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-options"> <a href="index.html#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="index.html#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="index.html#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="index.html#" data-rel="close"><i class="entypo-cancel"></i></a> </div>
    </div>
    <div class="panel-body">
        <form action = "{{ url('/') }}/members/create" method = "post">
            @csrf
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" class="form-control" name="form[name]" data-validate="required" data-message-required="This is custom message for required field." placeholder="Required Field"> </div>
            <div class="form-group">
                <label class="control-label">Email Field</label>
                <input type="text" class="form-control" name="form[email]" data-validate="email" placeholder="Email Field"> </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success">Validate</button>
                <button type="reset" class="btn">Reset</button>
            </div>
        </form>
    </div>
</div>

<a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-default">Show Me</a>

<h1>EDITING</h1>


            <h3>Table without DataTable Header</h3>
            <script type="text/javascript">
                jQuery(window).load(function() {
                    var $table2 = jQuery("#table-2");
                    // Initialize DataTable
                    $table2.DataTable({
                        "sDom": "tip",
                        "bStateSave": false,
                        "iDisplayLength": 8,
                        "aoColumns": [{
                                "bSortable": false
                            },
                            null,
                            null,
                            null,
                            null
                        ],
                        "bStateSave": true
                    });
                    // Highlighted rows
                    $table2.find("tbody input[type=checkbox]").each(function(i, el) {
                        var $this = $(el),
                            $p = $this.closest('tr');
                        $(el).on('change', function() {
                            var is_checked = $this.is(':checked');
                            $p[is_checked ? 'addClass' : 'removeClass']('highlight');
                        });
                    });
                    // Replace Checboxes
                    $table2.find(".pagination a").click(function(ev) {
                        replaceCheckboxes();
                    });
                });
                // Sample Function to add new row
                var giCount = 1;

                function fnClickAddRow() {
                    jQuery('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount + ".2", giCount + ".3", giCount + ".4"]);
                    replaceCheckboxes(); // because there is checkbox, replace it
                    giCount++;
                }
            </script>
            <table class="table table-bordered table-striped datatable" id="table-2">
                <thead>
                    <tr>
                        <th>
                            <div class="checkbox checkbox-replace">
                                <input type="checkbox" id="chk-1"> </div>
                        </th>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody style="color: black">
                     <?php foreach ($users as $key => $value): ?>
                        <tr>
                            <td>
                                <div class="checkbox checkbox-replace">
                                    <input type="checkbox" id="chk-1"> </div>
                            </td>  
                            <td class="center"><?php  echo $key; ?></td>
                            <td class="center"><?php  echo($value->name); ?></td>
                            <td class="center"><?php  echo($value->email); ?></td>
                            <td>
                            <a class="btn btn-default btn-sm btn-icon icon-left" onclick="edit_data('<?php  echo ($value->id); ?>','<?php  echo($value->name); ?>','<?php  echo($value->email); ?>')"> <i class="entypo-pencil"></i> Edit
                            </a>
                            <a class="btn btn-danger btn-sm btn-icon icon-left" onclick="delete_data(<?php  echo($value->id); ?>);"> <i class="entypo-cancel"></i> Delete
                            </a>
                            <a class="btn btn-info btn-sm btn-icon icon-left"> <i class="entypo-info"></i> Profile
                            </a>
                        </td>
                        </tr>                        
                    <?php endforeach ?>                    
                </tbody>
            </table>


    <div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Editing Data</h4> </div>
                <div class="modal-body">
                    <form action="{{ url('/') }}/members/update" method="post">
                    <div class="row">
                        @csrf
                        <div class="col-md-6">
                            <input type="text" name="this_id" class="data_id" value="">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Name</label>
                                <input type="text" class="form-control data_name" name="member[name]" id="field-1" placeholder="John"> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Email</label>
                                <input type="text" class="form-control data_email" name="member[email]" id="field-2" placeholder="Doe@gmail.com"> </div>
                        </div>
                    </div>
                                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save changes</button>
                </div>
                </form> 
            </div>
        </div>
    </div>


        <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Delete Data</h4> </div>
                <div class="modal-body">
                    <meta name="csrf-token" content="{{ csrf_token() }}" />
                    <h3 class="text-center">Are You Sure Delete !</h3>
                    <input type="hidden" class="delete_id_data" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal" onclick="destroy_data();" >Delete</button>
                </div>
            </div>
        </div>
    </div>



<script>
    function edit_data(id,name,email){
        $('.data_id').val(id);
        $('.data_name').val(name);
        $('.data_email').val(email);
        jQuery('#modal-6').modal('show', {backdrop: 'static'});
    }


    function delete_data(id){
        $('.delete_id_data').val(id);
        jQuery('#modal-1').modal('show');
    }
    function destroy_data(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
         $.ajax({
                   type: "POST",
                   url: "members/destroy",
                   data: {_token: CSRF_TOKEN,data_id: $('.delete_id_data').val()},
                   cache: true,
                   async: false,
                   success: function(data){
                        var opts = {
                        "closeButton": true,
                        "debug": false,
                        "positionClass": "toast-bottom-right",
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        };
                        toastr.success("Successfully", "Deleted", opts);
                        location.reload();
                   }
                 });
    }
</script>
@stop