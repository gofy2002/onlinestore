<!DOCTYPE html>
<html>
	<head>
    	<title>Log In</title>
    	<meta charset="utf-8">      <!-- Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
      	<link rel="stylesheet" href="/extra/css/jquery.dataTables.min.css">
      	<link rel="stylesheet" href="/extra/css/admin.css">    
      	  	
      	<script src="/extra/js/jquery-1.11.3.min.js"></script>
      	<script src="/extra/bootstrap/js/bootstrap.min.js"></script>
      	<script src="/extra/js/validator.min.js"></script>
		
		<script>

		$(document).ready(function() {
    		$("div.bhoechie-tab-menu>ul.list-group>a").click(function(e) {
	        	e.preventDefault();
	        	$(this).siblings('a.active').removeClass("active");
	        	$(this).addClass("active");
	        	var index = $(this).index();
	        	$("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
	        	$("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    		});
		});

		</script>

  	</head>
  
  	<body>
		<div id="fullscreen_bg" class="fullscreen_bg"/>
			<div class="container">
			    <div class="row">
			        <div class="col-lg-5 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container">
			            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
			              <ul class="list-group">
			                <a href="#" class="list-group-item active">
			                  <br/><br/><i class="glyphicon glyphicon-home"></i> Home<br/><br/>
			                  </a>
			                <a href="#" class="list-group-item ">
			                  <br/><br/><i class="glyphicon glyphicon-road"></i> Train<br/><br/>
			                </a>
			                <a href="#" class="list-group-item">
			                  <br/><br/><h4 class="glyphicon glyphicon-transfer"></h4> Trip<br/><br/>
			                </a>
			                <a href="Invitado/logout" class="list-group-item">
			                  <br/><br/><h4 class="glyphicon glyphicon-off"></h4> Cerrar Sesion<br/><br/>
			                </a>

			              </ul>
			            </div>

			            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
			                <!-- flight section -->
			                <div class="bhoechie-tab-content active">
			                    <center>
			                      <h2 class="glyphicon glyphicon-wrench" style="font-size:10em;color:#00001a"></h2>
			                      <h3 style="margin-top: 0;color:#00001a">Bienvenido</h3>
			                      <h4 style="margin-top: 0;color:#00001a">Administrador <?php echo $email; ?></h4>
			                    </center>
			                </div>
			                <!-- train section -->
			                <div class="bhoechie-tab-content">
			                    <center>
			                      <h2 class="glyphicon glyphicon-road" style="font-size:8em;color:#00001a"></h1>
			                      <h3 style="margin-top: 0;color:#00001a"><a href="" class="btn btn-sm btn-primary btn-block" role="button">Trains</a></h2>
			                      <h4 style="margin-top: 0;color:#00001a">Configuración del Usuario</h3>
			                    </center>
			                </div>
			    
			                <!-- hotel search -->
			                <div class="bhoechie-tab-content">
			                    <center>
			                      <h2 class="glyphicon glyphicon-transfer" style="font-size:8em;color:#00001a"></h2>
			                      <h3 style="margin-top: 0;color:#00001a"><a href="" class="btn btn-sm btn-primary btn-block" role="button">Trips</a></h3>
			                      <h4 style="margin-top: 0;color:#00001a">Configuración del Sistema</h4>
			                    </center>
			                </div>
			            </div>
			        </div>
			  </div>
		</div>
	</div>

	</body>
 </html>