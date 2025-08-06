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
						<p><a class="text-white text-med" href="index.php"><span class="i-back"></span>Back</a></p>
					</div>
				</div>
			</div>
		</header>
		<main class="main-container">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="ticket-container" id="ticket">
							<div class="tcn-head">
								<div class="text-center">
									<p><img src="https://www.thaiticketmajor.com/assets/img/logo-ttm-tm.png" alt="THAITICKETMAJOR a ticketmaster Company" width="120"></p>
									<p>
										<img class="img-barcode" src="assets/img/_barcode.jpg">
										<small class="d-block">T0-0000001</small>
									</p>
								</div>
							</div>
							<div class="tcn-body">
								<div class="tcn-row">
									<div class="text-center">
										<p class="text-label">Name</p>
										<p class="text-data text-big">Thanawat Chaiyaporn</p>
									</div>
								</div>
								<div class="tcn-row">
									<div class="row">
										<div class="col">
											<p class="text-label">Gender</p>
											<p class="text-data">Male</p>
										</div>
										<div class="col">
											<div class="text-right">
												<p class="text-label">Phone</p>
												<p class="text-data"><a class="text-reset" href="javascript:;">081-2345678</a></p>
											</div>
										</div>
									</div>
								</div>
								<div class="tcn-row">
									<p class="text-label">Email</p>
									<p class="text-data"><a class="text-reset" href="javascript:;">thanawat.c@email.com</a></p>
								</div>
								<div class="tcn-row">
									<div class="row">
										<div class="col">
											<div class="text-left">
												<p class="text-label">Zone</p>
												<p class="text-data">VIP</p>
											</div>
										</div>
										<div class="col">
											<div class="text-center">
												<p class="text-label">Row</p>
												<p class="text-data">V</p>
											</div>
										</div>
										<div class="col">
											<div class="text-right">
												<p class="text-label">Seat</p>
												<p class="text-data">V01</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tcn-row">
									<p class="text-label">Show Date</p>
									<p class="text-data">13-14 December 2025</p>
								</div>
								<div class="tcn-row">
									<div class="row">
										<div class="col">
											<p class="text-label">Show Time</p>
											<p class="text-data">17:00</p>
										</div>
										<div class="col">
											<div class="text-right">
												<p class="text-label">Gates Open</p>
												<p class="text-data">16:00</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tcn-row">
									<p class="text-label">Venue</p>
									<p class="text-data">IMPACT Exhibition Hall 5-10</p>
								</div>
							</div>
						</div>
						<p>
							<button tyle="button" class="btn" onclick="saveTicket();">Download Ticket</button>
						</p>
						<p class="text-center text-fade lh1">
							<small><i>If you're unable to download the ticket, <span class="text-nowrap">Please take a screenshot instead</span></i>.</small>
						</p>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
	<script>
		function saveTicket() {
		  const element = document.getElementById('ticket');
		  html2canvas(element).then(canvas => {
		    const link = document.createElement('a');
		    link.download = 'ticket.png';
		    link.href = canvas.toDataURL();
		    link.click();
		  });
		}
	</script>
</body>
</html>