<template>
<header>
	<h1>
		<router-link to="/">八重山クイズ</router-link>
	</h1>
	<div class="sp-menu js-toggle-nav">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<nav class="top-nav">
		<ul>
			<li><a href="#" id="food">食べ物</a></li>
			<li><a href="#" id="creature">生物</a></li>
			<li><a href="#" id="history">文化・歴史</a></li>
			<li><a href="#" id="knowledge">雑学</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" href="#" id="region" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					地域
				</a>
				<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="region">
					<li><a class="dropdown-item" href="#" id="island1">石垣島</a></li>
					<li><a class="dropdown-item" href="#" id="island2">与那国島</a>	</li>
					<li><a class="dropdown-item" href="#" id="island3">小浜島</a></li>
					<li><a class="dropdown-item" href="#" id="island4">西表島</a></li>
					<li><a class="dropdown-item" href="#" id="island3">小浜島</a></li>
					<li><a class="dropdown-item" href="#" id="island4">西表島</a></li>
					<li><a class="dropdown-item" href="#" id="island5">西表島</a></li>
					<li><a class="dropdown-item" href="#" id="island6">西表島</a></li>
					<li><a class="dropdown-item" href="#" id="island7">西表島</a></li>
					<li><a class="dropdown-item" href="#" id="island8">西表島</a></li>
					<li><a class="dropdown-item" href="#" id="island9">西表島</a></li>
					<li><a class="dropdown-item" href="#" id="island12">ラスト</a></li>
				</ul>
			</li>
			<li id="accordion-menu">
				<a data-toggle="collapse" href="#sp-region" aria-controls="sp-region" aria-expanded="false">
					地域
				</a>
				<ul id="sp-region" class="collapse" data-parent="#accordion-menu">
					<li><a href="#" id="island1">石垣島</a></li>
					<li><a href="#" id="island2">与那国島</a>	</li>
					<li><a href="#" id="island3">小浜島</a></li>
					<li><a href="#" id="island4">西表島</a></li>
					<li><a href="#" id="island5">西表島</a></li>
					<li><a href="#" id="island6">西表島</a></li>
					<li><a href="#" id="island7">西表島</a></li>
					<li><a href="#" id="island8">西表島</a></li>
					<li><a href="#" id="island9">西表島</a></li>
					<li><a href="#" id="island10">西表島</a></li>
					<li><a href="#" id="island11">西表島</a></li>
					<li><a href="#" id="island12">ラスト</a></li>
				</ul>
			</li>
			<li><a href="#" id="all">すべて</a></li>
		</ul>
	</nav>
</header>
</template>

<script>
export default{
	name: 'CommonHeader',
	mounted: function(){
		
	// ハンバーガーメニュー
	$('.js-toggle-nav').on('click', function(e){
		$('.top-nav').toggleClass('show');
		$(this).toggleClass('active');
	});
	// ハンバーガーとメニュー以外をクリックしたらナビメニューを閉じる
	$(document).on('click', function(e){
		if(!$(e.target).closest('.js-toggle-nav, .top-nav ul').length){
			$('.top-nav').removeClass('show');
			$('.js-toggle-nav').removeClass('active');
		}
	});
	}
}
</script>

<style>
header{
	background-color: #80cee0;
	height: 64px;
	position: fixed;
	z-index: 9999;
	width: 100%;
	display: flex;
	justify-content: space-around;
}
header h1 a{
	display: block;
	font-weight: bold;
	line-height: 64px;
}
header h1 a:hover{
	text-decoration: none;
	opacity: .7;
}
@media screen and (max-width: 856px){
	header{
		padding: 0 24px;
		height: 48px;
		display: flex;
		justify-content: space-between;
	}
	header h1 a{
		font-size: 28px;
		line-height: 48px;
	}
	.sp-menu,
	.sp-menu span{
		display: inline-block;
		transition: all .6s;
		box-sizing: border-box;
	}
	.sp-menu {
		position: relative;
		width: 40px;
		height: 40px;
	}
	.sp-menu span {
		position: absolute;
		left: 0;
		width: 100%;
		height: 4px;
		background-color: #fff;
		border-radius: 4px;
	}
	.sp-menu span:nth-of-type(1){
		top: 11px;
	}
	.sp-menu span:nth-of-type(2){
		top: 22px;
	}
	.sp-menu span:nth-of-type(3){
		bottom: 3px;
	}
	.sp-menu.active span:nth-of-type(1){
		-webkit-transform: translateY(11px) rotate(-45deg);
		transform: translateY(11px) rotate(-45deg);
	}
	.sp-menu.active span:nth-of-type(2){
		opacity: 0;
	}
	.sp-menu.active span:nth-of-type(3){
		-webkit-transform: translateY(-11px) rotate(45deg);
		transform: translateY(-11px) rotate(45deg);
	}
}
.top-nav{
	width: 560px;
}
#accordion-menu{
	display: none;
}
.top-nav ul{
	display: flex;
	justify-content: space-around;
	line-height: 64px;
}
.top-nav a{
	display: block;
	width: 88px;
	font-weight: bold;
	text-align: center;
	color: #fff;
}
.top-nav a:hover{
	text-decoration: none;
	background: #fff;
	color: #80cee0;
	transition: all .5s;
}
/*ドロップダウンメニュー*/
.dropdown:hover .dropdown-menu {
	display: block;
}
.top-nav .dropdown-menu{
	display: none;
	background: #80cee0;
	border: 3px solid #80cee0;
	border-radius: unset;
	padding: 0;
}
.top-nav .dropdown-menu a{
	width: 100%;
	height: 48px;
	line-height: 42px;
}
@media screen and (max-width: 856px){
	.dropdown, .top-nav{
		display: none;
	}
	.top-nav{
		position: absolute;
		top: 48px;
		left: 0;
		width: 100%;
		background: #80cee0db;
		overflow: scroll;
		height: 100vh;
	}
	/*-- accordion-menu ここから ---*/
	#accordion-menu,
	.show{
		display: block;
	}
	#accordion-menu ul,
	#accordion-menu li{
		margin: 0;
		padding: 0;
		list-style: none;
	}
	#accordion-menu > li {
		border: #ccc 1px solid;
		margin-bottom: -1px;
	}
	#accordion-menu a:hover{
		background: #fff;
		color: #80cee0;
	}
	#accordion-menu a[data-toggle="collapse"]{
		display: block;
		padding: 10px;
		text-decoration: none;
		position: relative;
	}
	#accordion-menu a[data-toggle="collapse"]:hover{
		background: #fff;
	}
	#accordion-menu a[data-toggle="collapse"]::after{
		content:"";
		display: block;
		width: 12px;
		height: 12px;
		border-top: #fff 3px solid;
		border-right: #fff 3px solid;
		position: absolute;
		right: 20%;
		top: 0;
		bottom: 0;
		margin: auto;
	}
	#accordion-menu a[data-toggle="collapse"]:hover::after{
		border-top: #80cee0 3px solid;
		border-right: #80cee0 3px solid;
	}
	#accordion-menu a[aria-expanded=false]::after{
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
		transition-duration: 0.3s;
	}
	#accordion-menu a[aria-expanded=true]::after{
		-webkit-transform: rotate(135deg);
		-ms-transform: rotate(135deg);
		transform: rotate(135deg);
		transition-duration: 0.3s;
	}
	[id^="sp-region"] li{
		padding: 10px 10px 10px 20px;
	}
	/*-- accordion-menu ここまで ---*/

	.top-nav ul{
		display: block;
	}
	.top-nav a{
		width: unset;
	}
	.top-nav a:hover{
		text-decoration: none;
		background: #fff;
		color: #80cee0;
	}
}
</style>