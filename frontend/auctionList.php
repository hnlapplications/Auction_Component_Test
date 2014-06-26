<html>
	<head>
		<title> Auction Component </title>
		
		<?php include "headerIncludes.php"; ?>
		
		
	</head>
	<body>
		

		<div id="overlay">
			<a href="#" class="close">&times;</a>
			
			
			<h2>Contact Form</h2>
			
			<div class = "askForm">
				<form>
					<table>
						<td> <b>From:</b> </td> <td> <input type = "text" name = "fromName" id = "fromName" placeholder = "... your name ..." /> <br />
														 <input type = "text" name = "fromEmail" id = "fromEmail" placeholder = "... your email address ..." /><br />
														<input type = "text" name = "fromContact" id = "fromContact" placeholder = "... your contact no. ..." />
							</td>
						<tr>
							<td> <b>Subject:</b> </td> <td> <input type = "text" name = "name" id = "name" placeholder = "Auction 2 - (Auction Id: #A002)" />  </td>
						</tr>
						<tr>
							<td> <b>Message:</b> </td> <td> <textarea rows="20" cols="50" name = "description" id = "description"> </textarea> </td>
						</tr>
						<tr>
							<td colspan = "2"> <input type = "button" value = "Send" onclick = "alert('Thank you for your enquiry on our auction,\n we will get back to you asap! '); location.href='auctionList.php';" />  </td>
						</tr>
					</table>
					
				</form>
			</div>
		</div>
		<div id="mask" onclick="document.location='#';"></div> <!-- the only javascript -->
		
  
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
								<h1 class = "pageHeading"> Auction List </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php"; ?>
								</div>
								<div id = "filterMenu">
									<form>
										<select name  = "auctionFilter" id = "auctionFilter">
											<option value = "0"> --- Filter Auctions --- </option>
											<option value = "past">Past Auctions</option>
											<option value = "upcoming">Upcoming Auctions</option>
											<option value = "next">Next Auctions</option>
										</select>
									</form>
								</div>
								
								<div id = "auctionList">
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
													<td width = "30%">
														<table>
															<tr>
																<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
																<td>
																	<table>
																		<tr>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																		</tr>
																		<tr>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
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
															<td> <b><a href = "lotList.php" class = "links"> View Auction </a></b> </td>
														</tr>
													</table>
													</td>
												</tr>
												<tr>
													<td>  <a href="#overlay" class = "links">Ask about Auction</a> </td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<div class = "auction">
										<table width = "100%">
											<thead>
												<tr>
													<th class = "itemName"> Auction 2 </th>
													<th class = "itemID"> Auction Id: #A002 </th>
												</tr>
											</thead>
											<tbody>
												<tr> 
													<td width = "30%">
														<table>
															<tr>
																<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
																<td>
																	<table>
																		<tr>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																		</tr>
																		<tr>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
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
															<td> <b><a href = "lotList.php" class = "links"> View Auction </a></b> </td>
														</tr>
													</table>
													</td>
												</tr>
												<tr>
													<td>  <a href="#overlay" class = "links">Ask about Auction</a> </td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<div class = "auction">
										<table width = "100%">
											<thead>
												<tr>
													<th class = "itemName"> Auction 3 </th>
													<th class = "itemID"> Auction Id: #A003 </th>
												</tr>
											</thead>
											<tbody>
												<tr> 
													<td width = "30%">
														<table>
															<tr>
																<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
																<td>
																	<table>
																		<tr>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																		</tr>
																		<tr>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
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
															<td> <b><a href = "lotList.php" class = "links"> View Auction </a></b> </td>
														</tr>
													</table>
													</td>
												</tr>
												<tr>
													<td>  <a href="#overlay" class = "links">Ask about Auction</a> </td>
												</tr>
											</tbody>
										</table>
									</div>
									
									<div class = "auction">
										<table width = "100%">
											<thead>
												<tr>
													<th class = "itemName"> Auction 4 </th>
													<th class = "itemID"> Auction Id: #A004 </th>
												</tr>
											</thead>
											<tbody>
												<tr> 
													<td width = "30%">
														<table>
															<tr>
																<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
																<td>
																	<table>
																		<tr>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																		</tr>
																		<tr>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																			<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
													<td width = "70%"> 
														<table>
															<tr> 
																<td><b>Category</b></td><td> Current Auctions</td>
															</tr>
															<tr> 
																<td><b>Type</b></td><td>Miscellaneous</td>
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
															<td> <b><a href = "lotList.php" class = "links"> View Auction </a></b> </td>
														</tr>
													</table>
													</td>
												</tr>
												<tr>
													<td>  <a href="#overlay" class = "links">Ask about Auction</a> </td>
												</tr>
											</tbody>
										</table>
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