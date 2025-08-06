<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>My Tickets</title>
	<link rel="stylesheet" href="assets/style/main.css?v=<?php echo date('YmdHis'); ?>">
</head>
<body>
	<div class="main" role="main">
		<header class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-center">My Tickets</h1>
					</div>
				</div>
			</div>
		</header>
		<main class="main-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php for ($i=0; $i < 3; $i++) { ?>
						<div class="ticket-card">
							<div class="tc-body">
								<h2 class="tc-title">Ticket #<?php echo $i+1; ?></h2>
								<p>Order no.&nbsp;:&nbsp;<span class="font-600">T0-000000<?php echo $i+1; ?></span></p>
								<p>Zone&nbsp;:&nbsp;<span class="font-600">VIP</span>&nbsp;|&nbsp;Row&nbsp;:&nbsp;<span class="font-600">V</span>&nbsp;|&nbsp;Seat&nbsp;:&nbsp;<span class="font-600"> V0<?php echo $i+1; ?></span></p>
							</div>
							<div class="container tc-footer text-center">
								<div class="row row-btn">
									<div class="col">
										<a href="#">Register</a>
									</div>
									<div class="col">
										<a href="#">Print Form</a>
									</div>
									<div class="col">
										<a href="javascript:;" onclick="copyURL('copy_ticket_<?php echo $i+1; ?>');">Share</a>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- Registered ticket -->
						<div class="ticket-card">
							<div class="tc-body">
								<span class="badge badge-success"><span class="i-check"></span>Registered</span>
								<span class="badge badge-secondary">Ticket #4</span>
								<h2 class="tc-title">Thanawat Chaiyaporn</h2>
								<p>Order&nbsp;no.&nbsp;:&nbsp;<span class="font-600">T0-0000004</span></p>
								<p>Zone&nbsp;:&nbsp;<span class="font-600">VIP</span>&nbsp;|&nbsp;Row&nbsp;:&nbsp;<span class="font-600">V</span>&nbsp;|&nbsp;Seat&nbsp;:&nbsp;<span class="font-600">V04</span></p>
							</div>
							<div class="container tc-footer text-center">
								<div class="row row-btn">
									<div class="col">
										<a href="#">Print Form</a>
									</div>
									<div class="col">
										<a href="detail.php">Detail</a>
									</div>
								</div>
							</div>
						</div>
						<!-- / Registered ticket -->
					</div>
				</div>
			</div>
		</main>
		<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="text-center text-fade2"><small>© 2025 THAITICKETMAJOR.COM</small></p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script>
		function copyURL(_URL) {
		  const url = _URL;
		  navigator.clipboard.writeText(url)
		    .then(() => alert('Ticket register link copied!'))
		    .catch(err => console.error('Failed to copy: ', err));
		}
	</script>
</body>
</html>