<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: red;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: red;
}


</style>




<!--Top nav color-->



<nav class="navbar navbar-light fixed-top " style="padding:0;min-height: 3.5rem; background-color:grey;" >
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex; background-color:green;">
  		
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b> Kenya Express Parking Control System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>