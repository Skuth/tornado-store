<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="productBox">
	<div class="productPictures">
		<div class="productPreview cycle-slideshow"
			data-cycle-fx=fade
			data-cycle-timeout=0
			data-cycle-pager=".productPicturesSmall"
			data-cycle-pager-template="<img src='{{src}}'>"
		>
			<?php $counter1=-1;  if( isset($product["pictures"]) && ( is_array($product["pictures"]) || $product["pictures"] instanceof Traversable ) && sizeof($product["pictures"]) ) foreach( $product["pictures"] as $key1 => $value1 ){ $counter1++; ?>
			<img src="<?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			<?php } ?>
		</div>
		<div class="productPicturesSmall">
		</div>
	</div>
	<div class="productInfo">
		<div class="productBrand">
			<img src="<?php echo htmlspecialchars( $product["brand"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
			<p>Adidas</p>
		</div>
		<div class="productName">
			<p><?php echo htmlspecialchars( $product["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
		</div>
		<div class="productSize">
			<div class="sizeBox">
				<?php $counter1=-1;  if( isset($product["sizes"]) && ( is_array($product["sizes"]) || $product["sizes"] instanceof Traversable ) && sizeof($product["sizes"]) ) foreach( $product["sizes"] as $key1 => $value1 ){ $counter1++; ?>
				<div class="box"><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
				<?php } ?>
			</div>
		</div>
		<div class="productBtn">
			<button>Comprar</button>
		</div>
	</div>
</div>