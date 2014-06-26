﻿<html>
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
								<h1 class = "pageHeading"> Lot view </h1>
								<div id = "componentMenu">
									<?php include "componentMenu.php" ?>
								</div>
								<div id = "componentMenu2">
									<ul class = "componentMenu2">
										<li><a href = "lotListAdmin.php">back</a></li>
									</ul>
								</div>
								<div id = "filterMenu">
									<table width = "100%">
										<tbody>
											<tr>
												<td colspan = "2">
												<table width = "100%">
													<tr>
														<td> <b>Auctioneer:</b> <a href = "auctioneer.php" class = "links"> John Smith </a> </td>
													</tr>
												</table>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div class = "auction">
									<table width = "100%">
										<thead>
											<tr>
												<th class = "itemName"> Auction 1 </th>
												<th class = "itemID"> Auction Id: #A001 </th>
											</tr>
										</thead>
									</table>
								</div>
								<div id = "lotView">
									<table width = "100%">
										<tr>
											<td width = "40%" height = "100">
												<table width = "100%"> 
													<tr>
														<td> <h1> Lot # 1 </h1> </td>
													</tr>
													<tr>
														<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "large" /></td>
													</tr>
													
													<tr>
														<td> 
															<table>
																<tr>
																	<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																	<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																	<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																	<td> <img src = "../images/auctionImgPlaceholder.jpg" class = "small" /> </td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
											<td width = "60%" height = "100">
												<table width = "100%" height = "100%"> 
													<tr><td> <b>Auction Date: </b> 2014-06-28 </td></tr>
													<tr><td> <b>Auctioneer: </b>  John Smith </td></tr>
													<tr><td> <b>Description: </b></td></tr>
													<tr><td> <b>Category: </b>  Property </td></tr>
													<tr><td> <b>VAT Status: </b> Includes Vat </td></tr>
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
													
													<tr><td align = "right"> <a href = "#">f: Like</a> &nbsp; <a href = "#">Share</a></td></tr>
													
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