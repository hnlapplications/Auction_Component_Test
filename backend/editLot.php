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
						<div id = "Logo"> <img src = "../images/logo.png" /> </div>
					</div>
				</div>
				<div id = "body-wrapper">
					<div id = "body">
						<div id = "component">
							<div id = "componentContent">
								<h1 class = "pageHeading"> Edit Lot </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div id = "componentMenu2">
									<ul class = "componentMenu2">
										<li><a href = "lotListAdmin.php">back</a></li>
									</ul>
								</div>
								<div class = "formDiv">
									<div id = "lotView">
										<table width = "100%">
											<tr>
												
												<td width = "60%" height = "100">
													<table width = "100%" height = "100%"> 
														<tr>
															<td> <h1> Lot # 1 </h1> </td>
														</tr>
														<tr><td> <b>Auction Date: </b> 2014-06-28 </td></tr>
														<tr><td> <b>Auctioneer: </b>  John Smith </td></tr>
														<tr><td> <b>Description: </b></td></tr>
														<tr>
															<td> 
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
																Phasellus cursus felis dui, et luctus justo aliquam pellentesque. 
																Morbi bibendum ipsum purus, dignissim dictum risus imperdiet nec. 
																Ut dapibus suscipit blandit. Quisque pretium neque eu ipsum vestibulum 
																dapibus. Fusce a nibh a dolor dignissim bibendum sit amet quis ligula. 
																Proin vehicula vitae nisl eu euismod.
															</td>
														</tr>
														
													
														
													</table>
												</td>
											</tr>
										</table>
									</div>
									<div class = "editLot">
										<form>
											<table>
												<tr>
													<td> <b>Name:</b> </td> <td> <input type = "text" name = "name" id = "name"/> </td>
												</tr>
												<tr>
													<td> <b>Description:</b> </td> <td> <input type = "text" name = "description" id = "description"/> </td>
												</tr>
												<tr>
													<td> <b>Category:</b> </td>
													<td>
													<select name  = "auctionFilter" id = "auctionFilter">
														<option value = "0"> --- Select Category --- </option>
														<option value = "past">Property</option>
														<option value = "upcoming">Vehicles</option>
														<option value = "next">Miscellaneous</option>
													</select>
													</td>
												</tr>
												<tr>
													<td> <b>Quantity:</b> </td> <td> <input type = "text" name = "quantity" id = "quantity"/> </td>
												</tr>
												<tr>
													<td> <b>Vat:</b> </td>
													<td> 
														<input type = "checkbox" name = "vat" id = "vat" value = "vat"/> Vat 
													</td>
												</tr>
												<tr>
													<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
													<td> 
														<button type = "button" name = "delImg" id = "delImg" onclick = "confirm('Are you sure you want to delete this image?');" > Delete Image </button> <br />
														<input type = "file" name = "lotImg" id = "lotImg"/>
													</td>
												</tr>
												<tr>
													<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
													<td> 
														<button type = "button" name = "delImg" id = "delImg" onclick = "confirm('Are you sure you want to delete this image?');" > Delete Image </button> <br />
														<input type = "file" name = "lotImg" id = "lotImg"/>
													</td>
												</tr>
												<tr>
													<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
													<td> 
														<button type = "button" name = "delImg" id = "delImg" onclick = "confirm('Are you sure you want to delete this image?');" > Delete Image </button> <br />
														<input type = "file" name = "lotImg" id = "lotImg"/>
													</td>
												</tr>
												<tr>
													<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
													<td> 
														<button type = "button" name = "delImg" id = "delImg" onclick = "confirm('Are you sure you want to delete this image?');" > Delete Image </button> <br />
														<input type = "file" name = "lotImg" id = "lotImg"/>
													</td>
												</tr>
												<tr>
													<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "medium" /> </td>
													<td> 
														<button type = "button" name = "delImg" id = "delImg" onclick = "confirm('Are you sure you want to delete this image?');" > Delete Image </button> <br />
														<input type = "file" name = "lotImg" id = "lotImg"/>
													</td>
												</tr>
												<tr>
													<td> <b>Add Another Image:</b> </td> <td> <button type = "button" name = "addImg" id = "addImg" > Add Image </button> </td>
												</tr>
												<tr>
													<td colspan = "2"> <input type = "button" value = "Save" onclick = "location.href='lot.php'" />  </td>
												</tr>
											</table>
											
												<table width = "100%">
											
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