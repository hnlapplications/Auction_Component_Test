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
								<h1 class = "pageHeading"> Auction Component Setup</h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div class = "formDiv">
									<div class = "createAuction">
										<form>
											<table>
												<tr>
													<td> <b>Company Name:</b> </td> <td> <input type = "text" name = "company" id = "company"/> </td>
												</tr>
												<tr>
													<td> <b>Company Director:</b> </td> <td> <input type = "text" name = "director" id = "director"/> </td>
												</tr>
												<tr>
													<td> <b>Company Logo:</b> </td> <td> <input type = "file" name = "logoImg" id = "logoImg"/> </td>
												</tr>
												<tr>
													<td> <b>Contact Number:</b> </td> <td> <input type = "text" name = "contactNo" id = "contactNo"/> </td>
												</tr>
												<tr>
													<td> <b>Email:</b> </td> <td> <input type = "text" name = "email" id = "email"/> </td>
												</tr>
												<tr>
													<td> <b>Address:</b> </td> <td> <textarea cols = "30" rows = "6" name = "address" id = "address"> </textarea> </td>
												</tr>
													<tr>
													<td> <b>GPS Coordinates:</b> </td> <td> <input type = "text" name = "latitude" id = "latitude"/><input type = "text" name = "longitude" id = "longitude"/> </td>
												</tr>
												<tr>
													<td> <b>Facebook URL:</b> </td> <td> <input type = "text" name = "facebookURL" id = "facebookURL"/> </td>
												</tr>
												<tr>
													<td> <b>Auction Category List:</b> </td> <td> <textarea rows="8" cols="30" name = "categoryList" id = "categoryList"> </textarea> </td>
												</tr>
												<tr>
													<td> <b>Lot Category List:</b> </td> <td> <textarea rows="8" cols="30" name = "lotList" id = "lotList"> </textarea> </td>
												</tr>
												<tr>
													<td> <b>Auction Type:</b> </td> <td> <textarea rows="8" cols="30" name = "lotList" id = "lotList"> </textarea> </td>
												</tr>
												<tr>
													<td> <b>CSS </b> </td> <td> </td>
												</tr>
												<tr>
													<td> <i>Background: </i> </td> <td> <input type = "text" name = "bgcolor" id = "bgcolor" />  </td>
												</tr>
												<tr>
													<td> <i>Border: </i> </td> <td> <input type = "text" name = "bordercolor" id = "bordercolor" />  </td>
												</tr>
												
												<tr>
													<td> <i>Box Shading: </i> </td> <td> <input type = "text" name = "boxcolor" id = "boxcolor" />  </td>
												</tr>
												<tr>
													<td colspan = "2"> <input type = "button" value = "Save Settings" onclick = "location.href='auctionListAdmin.php'" /> </td>
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