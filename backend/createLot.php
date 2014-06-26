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
								<h1 class = "pageHeading"> Create Lot </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div id = "componentMenu2">
									<ul class = "componentMenu2">
										<li><a href = "lotListAdmin.php">back</a></li>
									</ul>
								</div>
								<div class = "formDiv">
									<div class = "createLot">
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
													<td> <b>Image:</b> </td> <td> <input type = "file" name = "lotImg" id = "lotImg"/> </td>
												</tr>
												<tr>
													<td> <b>Add Another Image:</b> </td> <td> <button type = "button" name = "addImg" id = "addImg" > Add Image </button> </td>
												</tr>
												<tr>
													<td colspan = "2"> <input type = "button" value = "Create" onclick = "location.href='lotListAdmin.php'" />  </td>
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