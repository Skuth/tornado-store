<?php

use \Skuth\Page;
use \Skuth\Model\Product;

$app->get('/', function($req, $res) {
	$page = new Page();

	$product = Product::listAll();

	$page->setTpl("index", ["slide"=>$product, "box"=>$product]);
});

$app->get("/produto/{id}/{name}", function($req, $res, $arg) {

	$page = new Page();
	$product = new Product();

	$product->listById($arg["id"]);

	$page->setTpl("product", ["product"=>$product->getValues()]);

});

?>