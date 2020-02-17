<BODY>     
	<div class="container-fluid">
		
	
		<div class="col-sm-4 col-sm-offset-4" class="div_geral">
            
       
			<div class="col-sm-12 col-sm-offset-0 div_central" >
                    <div class="row">
                        <div class="col-sm-12 text-center" style="margin-top:1%">
                            <img class="img-relative"  width="170" src="../imagem/logo.jpg" />
                        </div>
                        <div class="col-sm-10 col-sm-offset-1 text-center" style="margin-top:2%">
                            <h3 style="color:#DCDCDC"> Seja Bem-Vindo </h3>
                        </div>
                    </div>
                <!-- Form aqui -->
                <div class="col-sm-10 col-sm-offset-1" style="margin-top:3%">
						<form name="loginform" method="POST" action="{{ route('site.login.entrar')}}">
							{{ csrf_field() }}
							 <div class="form-group">
									<label style="color:white" for="login">Email</label>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
										</span>
									<input type="text" class="form-control" name="email" placeholder="Insira o Login">
									</div>

								  </div>
								  <div class="form-group">
									<label style="color:white" for="senha">Senha</label>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-lock"></i>
										</span>
									<input type="password" class="form-control" name="senha" placeholder="Insira a Senha">
									
									</div>
										<span ><a href="https://api.whatsapp.com/send?phone=5571993360015&text=Olá Kings,%20Esqueci%20minha%20senha" target="_blank">Esqueci a senha</a></span>
								   </div>
								  
									<button class="btn btn-success btn-md"><span class="glyphicon glyphicon-ok"></span> Entrar</button>
						</form>
					</div>
            </div>
        
		</div>
	</div>
	
	
	</BODY> 