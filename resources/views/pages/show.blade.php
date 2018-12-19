@extends('layouts.default')
@section('content')

    <div class="row">   	 
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>VIEW</strong>
            	<?php foreach ($member as $key => $value): ?>
		    		<?php  //echo($value->data); ?>
		    	<?php endforeach ?>
                	{{ var_dump($member[0]) }} 
                	{{ var_dump($users) }}
            </div>
        </div>
    </div>


<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">Insert<small><code></code></small></div>
        <div class="panel-options"> <a href="index.html#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="index.html#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="index.html#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="index.html#" data-rel="close"><i class="entypo-cancel"></i></a> </div>
    </div>
    <div class="panel-body">
        <form action = "{{ url('/') }}/members/create" method = "post">
            @csrf
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" class="form-control" name="name" data-validate="required" data-message-required="This is custom message for required field." placeholder="Required Field"> </div>
            <div class="form-group">
                <label class="control-label">Email Field</label>
                <input type="text" class="form-control" name="email" data-validate="email" placeholder="Email Field"> </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success">Validate</button>
                <button type="reset" class="btn">Reset</button>
            </div>
        </form>
    </div>
</div>


@stop