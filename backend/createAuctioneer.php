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
								<h1 class = "pageHeading"> Create Auctioneer </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div id = "componentMenu2">
									<ul class = "componentMenu2">
										<li><a href = "auctioneersListAdmin.php">back</a></li>
									</ul>
								</div>
								<div class = "formDiv">
									<div class = "createAuctioneer">
										<form>
											<table>
												<tr>
													<td> <b>Name:</b> </td> <td> <input type = "text" name = "name" id = "name"/> </td>
												</tr>
												<tr>
													<td> <b>Company:</b> </td> <td> <input type = "text" name = "company" id = "company"/> </td>
												</tr>
												<tr>
													<td> <b>Contact No:</b> </td> <td> <input type = "text" name = "contact" id = "contact"/> </td>
												</tr>
												<tr>
													<td> <b>Email:</b> </td> <td> <input type = "text" name = "email" id = "email"/> </td>
												</tr>
												<tr>
													<td> <b>Profile Image:</b> </td> <td> <input type = "file" name = "profileImg" id = "profileImg"/> </td>
												</tr>
												<tr>
													<td colspan = "2"> <input type = "button" value = "Create" onclick = "location.href='auctioneersListAdmin.php'" /> </td>
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