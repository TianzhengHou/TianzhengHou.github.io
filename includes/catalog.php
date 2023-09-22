<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tianzheng's Lab2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="card">
			<h1 class="card-header text-center">After Life Music Store</h1>
			<div class="card-body">
				<table class="table table-bordered ">
					<thead>
					<tr class="table-dark">
						<th>Cover</th>
						<th>Band</th>
                        <th>Title</th>
                        <th>Format</th>
                        <th>Lable</th>
                        <th>Year of release</th>
                        <th>Price</th>
						<th></th>
					</tr>
					</thead>
					<tbody>
						<?php foreach ($items as $item) : ?>

						<tr class="table-light">
                            <td><img src="<?php echo $item['Cover']?>" alt="Album Cover"></td>
                            <td><?php echo $item['Band']?></td>
                            <td><?php echo $item['Title']?></td>
                            <td><?php echo $item['Format']?></td>
                            <td><?php echo $item['Lable']?></td>
							<td><?php echo $item['Year']?></td>
							<td class="bg-warning">
								<p class="font-weight-bold">$<?php echo number_format($item['Price'],2);?></p>
							</td>
							<td>
								<form action="#" method="post">
									<div>
										<input type="hidden" name="id" value="0">
										<input type="submit" name="action" value="Buy" class="btn btn-success">
									</div>
								</form>
							</td>
						</tr>
						<?php endforeach?>						
					</tbody>
				</table>
				<p class="card-text"><em>*</em> All prices are in Canadian dollars (CDN)</p>
			</div>
		</div>
	</div>
</body>

</html>