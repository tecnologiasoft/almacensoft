<div class= "pagebackground"></div>
<div class="container">
     
	<div class="d-flex justify-content-center h-100">
		<div class="card login-car">
			<div class="card-header text-center">
				<h3><?php echo $title; ?></h3>
		
				<p class = "text-white text-uppercase">Sign in to start your session</p>
			</div>
           <div class="clearfix"></div>

			<div class="card-body">
				<div id = "response"></div>
				<!-- <?php //echo form_open($formAction,'class = "m-login__form m-form"');?> -->
             <form role="form" method="post" class="form-signin m-login__form m-form" enctype="multipart/form-data" id="login">

					

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user-o"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username" value="<?php echo set_value('username'); ?>" id="username">
						
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password" value="<?php echo set_value('password'); ?>" id="password">
						
					</div>

					<div class="input-group form-group">
							
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user-o"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="company id" name="company_id" value="<?php echo set_value('company_id'); ?>">
							
							
						</div>
						
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					
					<div class="form-group text-center m-t-40 m-b-0">
                            <div class="col-xs-12">
                                <button type="submit" name="entrar" value="1" id="entrar" class="btn btn-primary btn-block">Log In</button>
                            </div>
                    </div>
					<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#" class="text-white">Register</a>
				</div>
				        <div class="col-md-12">
                           <div class="mensaje"></div> 
						   <div class="validation-error"></div> 
                       </div>
				</form>
				<div class="card-footer">
				
			</div>
			</div>
		
		</div>
	</div>
</div>

<script type="text/javascript">


$(document).ready(function() {

    $('#login')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'El Usuario es Requerido'
                        },
                        /*stringLength: {
                            min: 6,
                            max: 30,
                            message: 'El nombre de usuario debe tener más de 6 y menos de 30 caracteres'
                        },*/
                    }
                },

                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        }
                    }
                }
            }
        })

       .on('success.form.bv', function(event) {
         event.preventDefault();
       //alert("hola")
      console.log('serialized data', $("#login").serialize());
                $.ajax({
                url: 'login',
                data: $("#login").serialize(),
                type: 'POST',
                dataType: 'json'

              }).done(function(data) {

              //console.log('data diplo', data)
              if(data.st == 0)
                {
                  //alert(data.msg);
                 //$('.validation-error').html(data.msg);      
                 $("#password").closest('.has-feedback').removeClass('has-success');
                 $("#password").closest('.has-feedback').addClass('has-error');
                 $("#password").closest('div').next().removeClass('glyphicon-ok');
                 $("#password").closest('div').next().addClass('glyphicon-remove');
                 //$("#usuar_password").html('div');
                   // $(".glyphicon").addClass('glyphicon-remove');                    

                }

              if(data.st == 1)
              {
                $('.validation-error').html(data.msg).css('color', 'green');
                $('.validation-error').html(data.msgsuccess).css('color', 'green');      
                //alert(data.msg);
                setTimeout(function(){
                  window.location.href= data.url;
                },1500);
               
              }

              });
            event.preventDefault();
        });

});
</script>