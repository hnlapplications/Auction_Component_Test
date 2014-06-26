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
								<h1 class = "pageHeading"> Lot List </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div id = "filterMenu">
									<form>
										<select name  = "auctionFilter" id = "auctionFilter">
											<option value = "0"> --- Filter Lots --- </option>
											<option value = "past">Property</option>
											<option value = "upcoming">Vehicles</option>
											<option value = "next">Miscellaneous</option>
										</select>
									</form>
								</div>
								<div id = "componentMenuBackend">
									<ul class = "componentMenuBackend">
										<li><a href = "createLot.php">CREATE LOT</a></li>
										<li><a href = "auctionCatalogue.php">View Auction Catalogue</a></li>
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
											<tr>
												<td>
													<a href = "gallery.php" class = "galleryLink">GALLERY</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id = "lotList">
									
									<table width = "100%">
										<tr>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #1 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a> </td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #1 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #2 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #3 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
										</tr>
										<tr>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #1 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #1 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #2 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #3 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
										</tr>
										<tr>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #1 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #1 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #2 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b> <br /><a href = "editLot.php" class = "links">Edit Lot </a></td></tr>
													</table>
												</div>
											</td>
											<td width = "33%">
												<div class = "lot">
													<table>
														<tr><td> <b>Lot:</b> </td> <td> Lot #3 </td></tr>
														<tr><td> <b>Description:</b></td><td> Description of Lot ....... </td></tr>
														<tr><td> <img src = "../images//auctionImgPlaceholder.jpg" class = "small" /> </td><td align = "right"> <b><a href = "lot.php" class = "links">View Lot </a></b><br /><a href = "editLot.php" class = "links">Edit Lot </a> </td></tr>
													</table>
												</div>
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