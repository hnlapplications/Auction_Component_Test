<html>
	<head>
		<title> Auction Component </title>
		
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		
		<link rel="stylesheet" href="../css/tabs.css" type="text/css" media="screen" charset="utf-8"/>

		<script src="../js/jquery-1.6.4.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="../js/script.js"></script>
		
	</head>
	<body>
		<div id = "container-wrapper">
			<div id = "container">
			
				<div id = "header-wrapper">
					<div id = "header">
						<div id = "Logo"> <img src = "../images/logo.png" /> </div>
						<h1 class = "userHeading"> ADMINISTRATOR </h1>
					</div>
				</div>
				<div id = "body-wrapper">
					<div id = "body">
						<div id = "component">
							<div id = "componentContent">
								<h1 class = "componentHeading"> Auction Component [New] </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								
								<div id="content">
									<ul id="info-nav"> 
										<li><a href="#new">New</a></li> 
										<li><a href="publishing.php">Publishing</a></li> 
										<li><a href="permissions.php">Permissions</a></li> 
										<li><a href="images.php">Images</a></li> 
										<li><a href="generalSettings.php">General Settings</a></li> 
									</ul>
									
									<div id="info"> 
										<div id="new"> 
											
											<form>
												<table>
													<tr>
														<td> <b>Name: </b> </td> <td> <input type = "text" name = "id" id = "id"/> </td>
													</tr>
													<tr>
														<td> <b>Alias:</b> </td> <td> <input type = "text" name = "name" id = "name"/> </td>
													</tr>
													<tr>
														<td> <b>Description:</b> </td> <td> <input type = "text" name = "description" id = "description"/> </td>
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