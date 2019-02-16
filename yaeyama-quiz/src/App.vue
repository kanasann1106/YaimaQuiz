<template>
	<div id="wrapper">
		<common-header/>
			<router-view/>
		<common-footer/>
	</div>
</template>

<script>
import commonHeader from '@/components/commonHeader'
import commonFooter from '@/components/commonFooter'
export default {
	name: 'App',
	components: {
		commonHeader,
		commonFooter
	}
}
</script>

<style>
body,#wrapper{
	display: flex;
	flex-direction: column;
	min-height: 100vh;
}
body{
	color: #555;
/*	height: 100%;
	margin: 0;
	padding: 0;
	display: flex;
	flex-direction: column;*/
}
a{
	color: #fff;
}
a:hover{
	color: #fff;
}
h1, h2, p{
	margin: 0;
}
ul{
	list-style: none;
	padding: 0;
	margin: 0;
}
/* -------------------
	animation
---------------------*/
@keyframes SlideDown{
	0%{
		opacity: 0;
		transform: translateY(-50px);
	}
	100%{
		opacity: 1;
		transform: translateY(0);
	}
}
@keyframes fadeIn{
	0%{opacity: 0}
	100%{opacity: 1}
}
/*-------------------*/
main{
	position: relative;
	width: 848px;
	margin: 0 auto;
	padding-top: 96px;
	padding-bottom: 40px;
	/*animation: fadeIn 1s;*/
}
@media screen and (max-width: 856px){
	main{
		max-width: 96%;
	}
}
</style>
