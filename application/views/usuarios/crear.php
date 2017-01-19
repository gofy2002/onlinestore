<!DOCTYPE html>
<html>
<head>
	<title><?php echo  $titulo; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/extra/css/jquery.dataTables.min.css">

	<style type="text/css">
		
				/* Credit to bootsnipp.com for the css for the color graph */
		.colorgraph {
		  height: 5px;
		  border-top: 0;
		  background: #c4e17f;
		  border-radius: 5px;
		  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		}
	</style>

	<script type="text/javascript" src="/extra/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/extra/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/extra/js/validator.min.js"></script>
	<script type="text/javascript" src="/extra/js/jquery.dataTables.min.js"></script>


	<script type="text/javascript">
		$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});

	</script>

</head>
<body>
	
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    	<?php echo form_open('',array( 'data-toggle' => 'validator', 'role' => 'form') ); ?>
			<?php echo form_hidden('id',$id); ?>
		
			<h2>Por favor Registrese <small>Es gratis y siempre será.</small></h2>
						<?php echo form_error('nombre'); ?>
						<?php echo form_error('apellidos'); ?>	
						<?php echo form_error('email'); ?>							
						<?php echo form_error('id'); ?>
						<?php echo form_error('password'); ?>	
						<?php echo form_error('password_confirmation'); ?>	
						<?php echo form_error('telefono'); ?>
						<?php echo form_error('cumpleanios'); ?>							

			<hr class="colorgraph">

			<div class="form-group">
                 <?php echo form_input($nombre); ?>
			</div>

			<div class="form-group">
                 <?php echo form_input($apellidos); ?>
             </div>

			<div class="form-group">
				<?php echo form_input($email); ?>
			</div>

			<div class="form-group">
				<?php echo form_input($telefono); ?>
			</div>

			<div class="form-group">
				<?php echo form_input($cumpleanios); ?>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php echo form_input($password); ?>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<?php echo form_input($password_confirmation); ?>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Acepto</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>

				<div class="col-xs-8 col-sm-9 col-md-9">
					 Por clicking <strong class="label label-primary">Registrar</strong>, Usted acepta los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terminos y Condiciones</a> establecidos por este sitio, incluyendo nuestro uso de cookies.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="<?php echo base_url("autorizar") ?>" class="btn btn-success btn-block btn-lg">Iniciar Sesion</a></div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terminos & Condiciones</h4>
			</div>
			<div class="modal-body">
				<p><strong>1. Introducci&oacute;n</strong></p>

				<p>Las presentes condiciones generales de uso de la p&aacute;gina web, regulan los t&eacute;rminos y condiciones de acceso y uso de www.direcci&oacute;nweb.com, propiedad de (indicar el nombre de la empresa o profesional propietario de el portal), con domicilio en (indicar) y con C&oacute;digo de Identificaci&oacute;n Fiscal n&uacute;mero (indicar), en adelante, &laquo;la Empresa&raquo;, que el usuario del Portal deber&aacute; de leer y aceptar para usar todos los servicios e informaci&oacute;n que se facilitan desde el portal.&nbsp;El mero acceso y/o utilizaci&oacute;n del portal, de todos o parte de sus contenidos y/o servicios significa la plena aceptaci&oacute;n de las presentes condiciones generales de uso.&nbsp;</p>

				<p><strong>2. Condiciones de uso</strong></p>

				<p>Las presentes condiciones generales de uso del portal regulan el acceso y la utilizaci&oacute;n del portal, incluyendo los contenidos y los servicios puestos a disposici&oacute;n de los usuarios en y/o a trav&eacute;s del portal, bien por el portal, bien por sus usuarios, bien por terceros. No obstante, el acceso y la utilizaci&oacute;n de ciertos contenidos y/o servicios puede encontrarse sometido a determinadas condiciones espec&iacute;ficas.</p>

				<p><strong>3.&nbsp;&nbsp; Modificaciones</strong></p>

				<p>La empresa se reserva la facultad de modificar en cualquier momento las condiciones generales de uso del portal. En todo caso, se recomienda que consulte peri&oacute;dicamente los presentes&nbsp;t&eacute;rminos de uso del portal, ya que pueden ser modificados.</p>

				<p><strong>4. Obligaciones del Usuario</strong></p>

				<p>El usuario deber&aacute; respetar en todo momento los t&eacute;rminos y condiciones establecidos en las presentes condiciones generales de uso del portal. De forma expresa el usuario manifiesta que utilizar&aacute; el portal de forma diligente y asumiendo cualquier responsabilidad que pudiera derivarse del incumplimiento de las normas.</p>

				<p>As&iacute; mismo, el usuario no podr&aacute; utilizar el portal para transmitir, almacenar, divulgar promover o distribuir datos o contenidos que sean portadores de virus o cualquier otro c&oacute;digo inform&aacute;tico, archivos o programas dise&ntilde;ados para interrumpir, destruir o perjudicar el funcionamiento de cualquier programa o equipo inform&aacute;tico o de telecomunicaciones.</p>

				<p><strong>5. Responsabilidad del portal</strong></p>

				<p>El usuario conoce y acepta que el portal no otorga ninguna garant&iacute;a de cualquier naturaleza, ya sea expresa o impl&iacute;cita, sobre los datos, contenidos, informaci&oacute;n y servicios que se incorporan y ofrecen desde el Portal.</p>

				<p>Exceptuando los casos que la Ley imponga expresamente lo contrario, y exclusivamente con la medida y extensi&oacute;n en que lo imponga, el Portal no garantiza ni asume responsabilidad alguna respecto a los posibles da&ntilde;os y perjuicios causados por el uso y utilizaci&oacute;n de la informaci&oacute;n, datos y servicios del Portal.</p>

				<p>En todo caso, el Portal excluye cualquier responsabilidad por los da&ntilde;os y perjuicios que puedan deberse a la informaci&oacute;n y/o servicios prestados o suministrados por terceros diferentes de la Empresa. Toda responsabilidad ser&aacute; del tercero ya sea proveedor o&nbsp;colaborador.</p>

				<p><strong>6. Propiedad intelectual e industrial</strong></p>

				<p>Todos los contenidos, marcas, logos, dibujos, documentaci&oacute;n, programas inform&aacute;ticos o cualquier otro elemento susceptible de protecci&oacute;n por la legislaci&oacute;n de propiedad intelectual o industrial, que sean accesibles en el portal corresponden exclusivamente a la empresa o a sus leg&iacute;timos titulares y quedan expresamente reservados todos los derechos sobre los mismos. Queda expresamente prohibida la creaci&oacute;n de enlaces de hipertexto (links) a cualquier elemento integrante de las p&aacute;ginas web del Portal sin la autorizaci&oacute;n de la empresa, siempre que no sean a una p&aacute;gina web del Portal que no requiera identificaci&oacute;n o autenticaci&oacute;n para su acceso, o el mismo est&eacute; restringido.</p>

				<p>En cualquier caso, el portal se reserva todos los derechos sobre los contenidos, informaci&oacute;n datos y servicios que ostente sobre los mismos. El portal no concede ninguna licencia o autorizaci&oacute;n de uso al usuario sobre sus contenidos, datos o servicios, distinta de la que expresamente se detalle en las presentes condiciones generales de uso del portal.</p>

				<p><strong>7. Legislaci&oacute;n aplicable, jurisdicci&oacute;n competente y notificaciones</strong></p>

				<p>Las presentes condiciones se rigen y se interpretan de acuerdo con las Leyes de Espa&ntilde;a. Para cualquier reclamaci&oacute;n ser&aacute;n competentes los juzgados y tribunales de (indicar la ciudad). Todas las notificaciones, requerimientos, peticiones y otras comunicaciones que el Usuario desee efectuar a la Empresa titular del Portal deber&aacute;n realizarse por escrito y se entender&aacute; que han sido correctamente realizadas cuando hayan sido recibidas en la siguiente direcci&oacute;n (indicar direcci&oacute;n de correo en la que se desean recibir las notificaciones).</p>

				<p>&nbsp;</p>

				<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<a class="boton_blog" href="https://formaldocs.com/modelo/contrato-condiciones-de-uso-de-pagina-web" target="_blank">Crea tus condiciones de uso personalizadas</a></p>

				<p>&nbsp;</p>
			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
</body>
</html>