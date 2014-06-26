<html>
	<head>
		<title> Auction Component </title>
		
		<?php include "headerIncludes.php" ?>
		
	</head>
	<body>
		<div id = "container-wrapper">
			<div id = "container">
			
				<div id = "header-wrapper">
					<div id = "header">
						<?php include "header.php" ?>
					</div>
				</div>
				<div id = "body-wrapper">
					<div id = "body">
						<div id = "component">
							<div id = "componentContent">
								<h1 class = "pageHeading"> Auctioneer view </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div id = "lotView">
									<table width = "100%">
										<tr>
											<td width = "40%" height = "100">
												<table width = "100%"> 
													<tr>
														<td> <h1> John Smith </h1> </td>
													</tr>
													<tr>
														<td> <img src = "../images/placeholder face.jpg" class = "profile" /></td>
													</tr>
												</table>
											</td>
											<td width = "60%" height = "100">
												<table width = "100%" height = "100%"> 
													<tr><td> <b>Company: </b> 2014-06-28 </td></tr>
													<tr><td> <b>Tel No: </b>  John Smith </td></tr>
													<tr><td> <b>Email: </b> johnsmith@gmail.com </td></tr>
													
													
													<tr><td align = "right"> <a href = "auctionListAdmin.php">View Auctions</a></td></tr>
													
												</table>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="push"></div>
			</div>
			<div id = "footer-wrapper">
				<div id = "footer">
				
				</div>
			</div>
		</div>
	</body>
</html>