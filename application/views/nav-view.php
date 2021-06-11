<style type="text/css">
	.navbar{
		border-radius: 0px;
		border: none;
		margin-bottom: 0px;
	}
</style>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Demo Project</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span>  <span class="caret"></span></a>
        	<div class="dropdown-menu">
	           <div><a href="<?php echo base_url();?>auth/logout">Logout</a></div>
	        </div>
        </li>
      </ul>
    </div>
  </div>
</nav>