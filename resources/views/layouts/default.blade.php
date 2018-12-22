<!DOCTYPE html>
<html lang="en">

<head>
	@include('includes.head')
</head>


<body class="page-body skin-black" >

    <div class="page-container">

    	@include('includes.sidebar')


    	        <div class="main-content">

		            @include('includes.header')

		            <div class="row">
			        	@yield('content')
			        </div>
		            
		        </div>

		       
	</div>


	 @include('includes.footer')

</body>

</html>		            