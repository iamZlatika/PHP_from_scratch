<?php
$dresses = [
    ['price' => 2300, 'date' => date('Y-m-d'), 'img' => './images/01.jpg', 'dress' => 'Платье "Аврора"'],
    ['price' => 1600, 'date' => date('Y-m-d'), 'img' => './images/02.jpg', 'dress' => 'Платье "Рузанна"'],
    ['price' => 1900, 'date' => date('Y-m-d'), 'img' => './images/03.jpg', 'dress' => 'Платье "Роуз"'],
    ['price' => 3200, 'date' => date('Y-m-d'), 'img' => './images/04.jpg', 'dress' => 'Платье "Мириам"'],
    ['price' => 1300, 'date' => date('Y-m-d'), 'img' => './images/05.jpg', 'dress' => 'Платье "Натали"'],

]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Магазин детских платьев</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav"></ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center">Платья для девочек</h1>

        <?php foreach ($dresses as $dress) : ?>
			<div class="col-sm-3">
				<table class="table table-bordered">
					<tr>
						<td class="text-center" colspan="2">
							<img src="<?php echo $dress['img']; ?>" class="img-thumbnail center">
						</td>
					</tr>
					<tr>
						<td class="text-center" colspan="2">
							<?php echo $dress['dress']; ?>
						</td>
					</tr>
					<tr>
						<td class="text-center">
							<?php echo  '₴' . $dress['price']; ?>
						</td>
						<td class="text-center">
							<?php echo $dress['date']; ?>
						</td>
					</tr>
				</table>
			</div>
		<?php endforeach; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>