<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>
	<div class="header">
<h3>Sale</h3>
<h5 style="color: #005086;">Credit</h5>
<label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>

<h5>Cash</h5>
<i class="iconsm fa fa-calculator" aria-hidden="true"></i>
<i class="icon1 fa fa-times-circle" aria-hidden="true"></i>


</div>
<hr>
<div class="row">
  <div class="col-8">
  	<div class="form-group">
	<input id="txt" type="text" name="" placeholder="Customer  *" >
</div>

  </div>
  <div class="col-4">
  	<div class="first num">
  	Invoice Number &nbsp; &nbsp;
  	<input type="text" name="" placeholder="1">
  	<div class="first row">
  		Invoice Date &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
  		  		<input type="Date" name="" placeholder="">

  		
  	</div>
  	  	<div class="second row">
  		State of Supply &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
        <select>
            <option>NONE</option>
        </select>
  		
  	</div>


  	</div>
  </div>
</div>
  <div class="container-fluid">
    <!-- Control the column width, and how they should appear on different devices -->
    <div class="row">
    	      <div class="col-lg-1" style="border:1px solid black">#</div>

      <div class="col-lg-4" style="border:1px solid black">ITEMS</div>
          	      <div class="col-lg-1" style="border:1px solid black">QTY</div>
    	      <div class="col-lg-1" style="border:1px solid black">UNIT</div>
    	          	      <div class="col-lg-1" style="border:1px solid black">PLACEMENT</div>
    	          	         <div class="col-lg-1" style="border:1px solid black">DISCOUNT</div>
    	          	      <div class="col-lg-2" style="border:1px solid black">TAX</div>
    	          	  	      <div class="col-lg-1" style="border:1px solid black">AMOUNT</div>
    	          	  	  </div>

    <div class="row">
    	      <div class="col-lg-1" style="border:1px solid black"> </div>

      <div class="col-lg-4" style="border:1px solid black"> </div>
          	      <div class="col-lg-1" style="border:1px solid black"> </div>
    	      <div class="col-lg-.5" style="border:1px solid black"> </div>
    	          	      <div class="col-lg-.5" style="border:1px solid black"> </div>
    	          	         <div class="col-lg-1" style="border:1px solid black">NONE </div>
    	          	      <div class="col-lg-2" style="border:1px solid black"> </div>
    	          	  	      <div class="col-lg-1" style="border:1px solid black"> </div>





</div>



    </div>
    
<hr style="margin-top: 300px;">
<div class="button" style="margin-right: 40px;">
	<button  type="button" class="one btn btn-outline-primary" >SHARE </button>

<button class="btn btn-primary">SHAVE</button>
</div>

	
<script type="text/javascript">
	 $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
            	if($('.fa-calculator').hasClass('iconsm');)
            	{
                	$('.fa-calculator').removeClass('iconsm');
                	$('.fa-calculator').addClass('icon');
            	}
            	else
                	$('.fa-calculator').addClass('iconsm');
            });

        });
</script>
</body>
</html>