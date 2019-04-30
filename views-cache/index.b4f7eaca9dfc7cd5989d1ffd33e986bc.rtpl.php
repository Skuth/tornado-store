<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="slide">

	<div class="slide-show cycle-slideshow"
	data-cycle-slides="> div"
	data-cycle-timeout="4000"
	data-cycle-prev="#prev"
	data-cycle-next="#next"
	data-cycle-pager=".slide-circle"
	data-cycle-pager-template="<i class='far fa-circle'></i>"
	>

	<?php $counter1=-1;  if( isset($slide) && ( is_array($slide) || $slide instanceof Traversable ) && sizeof($slide) ) foreach( $slide as $key1 => $value1 ){ $counter1++; ?>

	<div class="slide-box" style="--tooltip-color1: <?php echo htmlspecialchars( $value1["color1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>; --tooltip-color2: <?php echo htmlspecialchars( $value1["color2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>;">
		<div class="slide-picture">
			<img src="<?php echo htmlspecialchars( $value1["pictures"]["0"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="transform: scaleX(-1);">
		</div>
		<div class="slide-info">
			<div class="slide-brand">
				<div class="brand-picture">
					<img src="<?php echo htmlspecialchars( $value1["brand"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
				</div>
				<div class="sneaker-name">
					<h2><?php echo toBold($value1["name"]); ?></h2>
				</div>
				<div class="brand-btn">
					<button onclick="location.href='/produto/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo formatName($value1["name"]); ?>'">Ver mais</button>
				</div>
			</div>
		</div>
	</div>

	<?php } ?>

</div>

<div class="slide-count">
	<p class="last-item" id="prev"><i class="fas fa-chevron-up"></i></p>

	<div class="slide-circle">

	</div>

	<p class="next-item" id="next"><i class="fas fa-chevron-down"></i></p>
</div>

</div>

<div class="content">
	<div class="container">

		<?php $counter1=-1;  if( isset($box) && ( is_array($box) || $box instanceof Traversable ) && sizeof($box) ) foreach( $box as $key1 => $value1 ){ $counter1++; ?>
	
		<a href="/produto/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo formatName($value1["name"]); ?>">
		<div class="box" style="--tooltip-bgcolor1: <?php echo htmlspecialchars( $value1["color1"], ENT_COMPAT, 'UTF-8', FALSE ); ?>; --tooltip-bgcolor2: <?php echo htmlspecialchars( $value1["color2"], ENT_COMPAT, 'UTF-8', FALSE ); ?>;">
			<div class="box-picture">
				<img src="<?php echo htmlspecialchars( $value1["pictures"]["0"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			</div>
			<div class="box-info">
				<div class="info-brand">
					<img src="<?php echo htmlspecialchars( $value1["brand"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="filter: invert(1);">
				</div>
				<div class="info-title">
					<h3><?php echo toBold($value1["name"]); ?></h3>
				</div>
				<div class="info-price">
					<span>R$</span>
					<h4><?php echo htmlspecialchars( $value1["price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
				</div>
			</div>
		</div>
		</a>

		<?php } ?>

		<div class="sm-btn">
			<button>
				<i class="fas fa-plus"></i>
				Ver mais
			</button>
		</div>
	</div>
</div>