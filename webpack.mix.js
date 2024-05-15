const mix = require('laravel-mix');

mix
	.sass("resources/css/app.scss", "public/css")
    .js("resources/js/app.js", "public/js")
    .js("resources/js/series/indexTabela.js", "public/js/seriesJs/indexTabela.js");