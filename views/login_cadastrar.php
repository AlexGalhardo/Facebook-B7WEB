<!--
<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Facebook</title>
	    <link href="<?php echo BASE; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo BASE; ?>">Rede Social</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo BASE; ?>login/entrar">Login</a></li>
						<li><a href="<?php echo BASE; ?>login/cadastrar">Cadastrar</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
	        <h1>Cadastrar</h1>

	        <?php if(!empty($erro)): ?>
	        <div class="alert alert-danger"><?php echo $erro; ?></div>
		    <?php endif; ?>

	        <form method="POST">

	        	<div class="form-group">
	        		<label for="nome">Nome:</label>
	        		<input type="text" class="form-control" name="nome" id="nome" />
	        	</div>

	        	<div class="form-group">
	        		<label for="email">E-mail:</label>
	        		<input type="email" class="form-control" name="email" id="email" />
	        	</div>

	        	<div class="form-group">
	        		<label for="senha">Senha:</label>
	        		<input type="password" class="form-control" name="senha" id="senha" />
	        	</div>

	        	<div class="radio">
	        		<strong>Sexo:</strong><br/>
	        		<label><input type="radio" name="sexo" value="0" /> Mulher</label><br/>
	        		<label><input type="radio" name="sexo" value="1" checked="checked" /> Homem</label>
	        	</div>

	        	<button type="submit" class="btn btn-default">Cadastrar</button>

	        </form>
	    </div>
    </body>
</html>
-->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Galhardo Bank</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    body {
        font-size: 16px;
        font-family: 'Helvetica';
    }
	.login-form {
		width: 340px;
		margin: 50px auto;
	}
    .login-form form {        
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
	.input-group-addon .fa {
        font-size: 18px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form method="post">
        <h2 class="text-center">🦅 Galhardo Social</h2>
        <?php if(!empty($erro)): ?>
	        <div class="alert alert-danger"><?php echo $erro; ?></div>
		<?php endif; ?>
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Email"  name="email" id="email" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="senha" id="senha" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirmaSenha" id="confirmaSenha" required="required">
            </div>
        </div>
        <!--
        <div class="radio">
    		<strong>Sexo:</strong><br/>
    		<label><input type="radio" name="sexo" value="0" /> Mulher</label><br/>
    		<label><input type="radio" name="sexo" value="1" checked="checked" /> Homem</label>
    	</div>
    	-->        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Criar Conta</button>
        </div> 
        <div class="form-group">
            <a href="<?php echo BASE; ?>login/entrar" class="btn btn-primary btn-block">Login</a>
        </div> 
    </form>
</div>

    <footer>
      <div class="container text-center">
        <h6 class="text-muted">Desenvolvido com <a href="https://getbootstrap.com/">Bootstrap</a> & <a href="https://www.netlify.com/">Netlify</a></h6>
      </div>
      <div class="container text-center">
        <h6 class="text-muted">&copy; <a href="https://alexgalhardo.com">Alex Galhardo</a> 2019 </h6>
      </div>
    </footer>    
</body>
</html>                            