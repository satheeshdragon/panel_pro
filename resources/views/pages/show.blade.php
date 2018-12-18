@extends('layouts.default')
@section('content')

    <div class="row">
    	 
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            	<?php foreach ($member as $key => $value): ?>
		    		<?php  echo($value->data); ?>
		    	<?php endforeach ?>
                <strong>Data:</strong>
                	{{ var_dump($member[0]) }} 
                	{{ var_dump($users) }}
            </div>
        </div>
    </div>


@stop