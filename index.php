<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<!--  PESQUISA -->
	<div class="container-fluid">
		<nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<div class="btn-group">
					<button class="btn btn-default btn-lg">Ceadis</button>
					<button data-toggle="dropdown"
						class="btn btn-default btn-lg dropdown-toggle">
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>

				</div>
			</div>

			<div class="nav navbar-left collapse navbar-collapse">
				<p class="navbar-text">SGP - SISTEMA DE GESTAO PORTARIA</p>
			</div>
			<div class="nav navbar-right collapse navbar-collapse">
				<button class="btn btn-default btn-lg ">Login</button>
			</div>
		</nav>
		<nav class="navbar navbar-default" role="navigation"></nav>


		<div class="row-fluid">
			<div class="col-sm-12 well">
				<form method="post" id="meuform" action="" class="form-inline">
					<fieldset>
						<legend>Pesquisar</legend>
						<div class="form-group">
							<label for="validade-cartao">Data Inicial</label> <input
								type="month" class="form-control" id="validade-cartao"
								name="validade-cartao">
						</div>
						<div class="form-group">
							<label for="validade-cartao">Data Final</label> <input
								type="month" class="form-control" id="validade-cartao"
								name="validade-cartao">
						</div>
						<div class="form-group">
							<label for="nome">Nome </label> <input type="text"
								class="form-control" id="nome" name="nome" autofocus required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
						</div>
						<div class="input-group">
							<span class="input-group-addon">@</span> <input type="email"
								class="form-control" id="email" name="email"
								placeholder="email@exemplo.com">
						</div>

						<button type="submit" class="btn btn-primary btn-lg pull-right">
							<span class="glyphicon glyphicon-thumbs-up"></span> Confirmar
						</button>
					</fieldset>
				</form>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<tr class="info">
						<th>Row</th>
						<th>Bill</th>
						<th>Payment Date</th>
						<th>Payment Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Credit Card</td>
						<td>04/08/2013</td>
						<td>Call in to confirm</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Water</td>
						<td>01/08/2013</td>
						<td>Paid</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Electricity</td>
						<td>03/08/2013</td>
						<td>Pending</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Telephone</td>
						<td>06/08/2013</td>
						<td>Due</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Credit Card</td>
						<td>04/08/2013</td>
						<td>Call in to confirm</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Water</td>
						<td>01/08/2013</td>
						<td>Paid</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Electricity</td>
						<td>03/08/2013</td>
						<td>Pending</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Telephone</td>
						<td>06/08/2013</td>
						<td>Due</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Credit Card</td>
						<td>04/08/2013</td>
						<td>Call in to confirm</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Water</td>
						<td>01/08/2013</td>
						<td>Paid</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Electricity</td>
						<td>03/08/2013</td>
						<td>Pending</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Telephone</td>
						<td>06/08/2013</td>
						<td>Due</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Credit Card</td>
						<td>04/08/2013</td>
						<td>Call in to confirm</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Water</td>
						<td>01/08/2013</td>
						<td>Paid</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Electricity</td>
						<td>03/08/2013</td>
						<td>Pending</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Telephone</td>
						<td>06/08/2013</td>
						<td>Due</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Credit Card</td>
						<td>04/08/2013</td>
						<td>Call in to confirm</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Water</td>
						<td>01/08/2013</td>
						<td>Paid</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Electricity</td>
						<td>03/08/2013</td>
						<td>Pending</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Telephone</td>
						<td>06/08/2013</td>
						<td>Due</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
	<footer>


		<nav class="navbar navbar-default navbar-fixed-bottom"
			role="navigation">
			<p class="navbar-text">..: SGA - Sistema de Gestão de Atividades
				[Tecnologia da Informação] :..</p>
		</nav>
		<nav class="navbar navbar-default" role="navigation"></nav>
	</footer>





	<script src=js/jquery.js></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
