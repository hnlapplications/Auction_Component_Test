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
								<h1 class = "pageHeading"> Edit Auction </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div id = "componentMenu2">
									<ul class = "componentMenu2">
										<li><a href = "auctionListAdmin.php">back</a></li>
									</ul>
								</div>
								<div class = "formDiv">
									<div class = "createAuction">
										<form>
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
																		<td> <b>Auctioneer:</b></td><td> John Smith </td>
																	</tr>
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
																		<td> <b>Viewing Date:</b> </td><td>2014-06-25 </td>
																	</tr>
																	<tr> 
																		<td> <b>Viewing time:</b> </td><td>12:00 - 14:00 </td>
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
														
													</tbody>
												</table>
											</div>
											<table>
												<tr>
													<td> <b>Auction ID:</b> </td> <td> <input type = "text" name = "id" id = "id"/> </td>
												</tr>
												<tr>
													<td> <b>Auction Name:</b> </td> <td> <input type = "text" name = "name" id = "name"/> </td>
												</tr>
												<tr>
													<td> <b>Auctioneer:</b> </td> 
													<td> 
														<select name  = "auctionFilter" id = "auctionFilter">
															<option value = "0"> --- Select Auctioneer --- </option>
															<option value = "neil">Neil Schonken</option>
															<option value = "joe">Joe Soap</option>
															<option value = "john">John Doe</option>
															<option value = "henry">Henry Roelofsze</option>
														</select>
													</td>
												</tr>
												<tr>
													<td> <b>Type:</b> </td>
													<td> 
														<select name  = "auctionFilter" id = "auctionFilter">
															<option value = "0"> --- Auction Type --- </option>
															<option value = "t1">Type 1</option>
															<option value = "t2">Type 2</option>
															<option value = "t3">Type 3</option>
															<option value = "t4">Type 4</option>
														</select>
													</td>
												</tr>
												<tr>
													<td> <b>Category:</b> </td> <td> <input type = "text" name = "category" id = "category"/> </td>
												</tr>
												<tr>
													<td> <b>Description:</b> </td> <td> <input type = "text" name = "description" id = "description"/> </td>
												</tr>
												<tr>
													<td> <b>Address:</b> </td> <td> <textarea cols = "30" rows = "6" name = "address" id = "address"> </textarea> </td>
												</tr>
												<tr>
													<td> <b>GPS Coordinates:</b> </td> <td> <input type = "text" name = "latitude" id = "latitude"/><input type = "text" name = "longitude" id = "longitude"/> </td>
												</tr>
												<tr>
													<td> <b>Date:</b> </td> <td> <input type = "date" name = "date" id = "date"/> </td>
												</tr>
												<tr>
													<td> <b>Time:</b> </td> <td> <input type = "time" name = "time" id = "time"/> </td>
												</tr>
												<tr>
													<td> <b>Viewing:</b> </td>
													<td> 
														<input type = "checkbox" name = "viewing" id = "viewing" value = "yes"/> Yes 
														<input type = "checkbox" name = "viewing" id = "viewing" value = "no"/> No
													</td>
												</tr>
												<tr>
													<td> <b>Viewing Date:</b> </td> <td> <input type = "date" name = "vdate" id = "vdate" /> </td>
												</tr>
												<tr>
													<td> <b>Viewing Time:</b> </td> <td> <input type = "time" name = "vtime" id = "vtime"/> </td>
												</tr>
												<tr>
													<td colspan = "2"> <input type = "button" value = "Save" onclick = "location.href='lotListAdmin.php'" /> </td>
													<td colspan = "2"> <input type = "button" value = "Delete" onclick = "if (confirm('Are you sure you want to delete Auction?')){location.href='auctionListAdmin.php';}; " /> </td>
												</tr>
											</table>
											
										</form>
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