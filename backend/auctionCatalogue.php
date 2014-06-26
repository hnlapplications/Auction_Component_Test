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
								<h1 class = "pageHeading"> Auction Catalogue </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div id = "componentMenu2">
									<ul class = "componentMenu2">
										<li><a href = "lotListAdmin.php">back</a></li>
									</ul>
								</div>
								<div class = "auction">

									<table width = "100%">
										<thead>
											<tr>
												<th class = "itemName"> Auction 1 </th>
												<th class = "itemID"> Auction Id: #A001 </th>
											</tr>
										</thead>
										<tbody>
											<tr> 
												
												<td width = "70%"> 
													<table>
														<tr> 
															<td><b>Category</b></td><td> Past Auctions</td>
														</tr>
														<tr> 
															<td><b>Type</b></td><td>Property</td>
														</tr>
														<tr> 
															<td><b>Date</b></td><td>2014-06-28</td>
														</tr>
														<tr> 
															<td><b>Time</b></td><td>11:00 - 16:00</td>
														</tr>
														<tr> 
															<td><b>Address</b></td><td>Plot 116, Auction House, Main Rd, Centurion, 0189 </td>
														</tr>
														<tr> 
															<td><b>GPS Coordinates</b></td><td>-25.870480, 28.187995</td>
														</tr>
														<tr> 
															<td><b>Description</b></td><td>Property up for auction, flats, houses and offices </td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td colspan = "2">
												<table width = "100%">
													<tr>
														<td> <b>Auctioneer:</b> <a href = "auctioneer.php" class = "links"> John Smith </a> </td>
														<td> <b>Viewing Date:</b> 2014-06-25 </td>
														<td> <b>Viewing time:</b> 12:00 - 14:00 </td>
													</tr>
												</table>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div id = "componentMenu2">
									<button type = "button" >Print</button>
								</div>
								<div id="content">
									<ul id="info-nav"> 
										<li><a href="#new">1</a></li> 
										<li><a href="page2.php">3</a></li> 
										<li><a href="page3.php">3</a></li> 
										<li><a href="page4.php">4</a></li> 
									</ul>
									
									<div id="info"> 
										<div id="new"> 
											
											<div id = "auctionCatalogueList">
				<table width = "100%">
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr><tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr><tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr><tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width = "40%" align = "left">
							<table width = "100%" align = "left">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
						<td width = "40%" align = "right">
							<table width = "100%" align = "right">
								<thead>
									<th align = "left"> Lot Nr </th>
									<th align = "left"> Description </th>
									<th	align = "left"> Quantity </th>
									<th align = "left"> VAT </th>
								</thead>
								<tr>
									<td> 1 </td>
									<td> Lot Mirrors </td>
									<td> 1</td>
									<td> <input type = "checkbox" /></td>
								</tr>
							</table>
						</td>
					</tr>
					
									
					
				</table>
			</div>
											
										</div>
								
									</div>
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