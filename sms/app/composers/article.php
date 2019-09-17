<?php
view::composer('widget.articles.recent', function ($view){
	$rticles=Article::all();

	$view->with('all_articles', $articles);
});
?>