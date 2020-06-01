<h1>day la trang product</h1>
<ul><?php foreach ($products as  $product) :  ?>
	<li>
		<h4><?php echo $product['id']; ?></h4>
		<p><?php echo $product['idTheLoai']; ?></p>
		<p><?php echo $product['Ten']; ?></p>
	</li>
<?php endforeach; ?>
</ul>