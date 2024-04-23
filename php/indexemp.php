<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TELA INICIAL</title>
	<link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
</head>
<body style="background-color: #ddd">
	<center>
	<?php
	@$nome_cookie = $_COOKIE["nome_e"];
  	if (isset($nome_cookie)) {
      echo "<div class='topnav'>
				<a class='active' href='index.php'>Início</a>
				<a href='relatorio.php'>Relatórios</a>
				<a href='logoutemp.php'>Sair</a>
			</div>";
      echo "<br><br><br><br><br><br>";
      echo "<img src='../img/logo.png' width='20%'>
			<br><br><br><br>
			<h1 style='color: #1b62b7'>Bem-vindo, $nome_cookie !</h1>
		<div class='navbar'>
	</div>";
  	}else{
       echo "<div class='topnavbar'>
					</div>
					<br><br><br>
					<img src='../img/logo.png' width='20%'>
					<br><br><br>
					<div class='section'>
						<div class='container'>
							<div class='row full-height justify-content-center'>
								<div class='col-12 text-center align-self-center py-5'>
									<div class='section pb-5 pt-5 pt-sm-2 text-center'>
										<input class='checkbox' type='checkbox' id='reg-log' name='reg-log' />
										<label for='reg-log'></label>
										<div class='card-3d-wrap mx-auto'>
											<div class='card-3d-wrapper'>
												<div class='card-front'>
													<div class='center-wrap'>
														<form method='post' action='checklogin_u.php'>
															<div class='section text-center'>
																<h4 class='mb-4 pb-3'>Conta Senai</h4>
																<div class='form-group'>
																	<input type='text' class='form-style' placeholder='Usuário' name='user_u' id='user_u' required>
																	<i class='input-icon uil uil-at'></i>
																</div>
																<br>
																<div class='form-group mt-2'>
																	<input type='password' class='form-style' placeholder='Senha' name='senha_u' id='senha_u' required>
																	<i class='input-icon uil uil-lock-alt'></i>
																</div>
																<br>
																<button type='submit' class='btn mt-4'>ENTRAR</button>
																<p class='mb-0 mt-4 text-center'><a href='cadastro_u.php' class='link'>Cadastrar</a></p>
															</div>
														</form>
													</div>
												</div>
												<div class='card-back'>
													<div class='center-wrap'>
													<form method='post' action='checklogin_e.php'>
															<div class='section text-center'>
																<h4 class='mb-4 pb-3'>Conta Empresarial</h4>
																<div class='form-group'>
																	<input type='text' class='form-style' placeholder='Usuário' name='user_e' id='user_e' required>
																	<i class='input-icon uil uil-at'></i>
																</div>
																<br>
																<div class='form-group mt-2'>
																<input type='password' class='form-style' placeholder='Senha' name='senha_e' id='senha_e' required>
																	<i class='input-icon uil uil-lock-alt'></i>
																</div>
																<br>
																<button type='submit' class='btn mt-4'>ENTRAR</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='navbar'></div>";}?>
		</center>
</body>
</html>