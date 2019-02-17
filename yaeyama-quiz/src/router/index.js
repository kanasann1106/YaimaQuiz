import Vue from 'vue'
import Router from 'vue-router'
import quiz from '@/components/quiz'

Vue.use(Router)

export default new Router({
	routes: [
		{ path: '/', name: 'quiz', component: quiz },
		{ path: '/food', name: 'quiz', component: quiz },
		{ path: '/creature', name: 'quiz', component: quiz },
		{ path: '/history', name: 'quiz', component: quiz },
		{ path: '/food', name: 'quiz', component: quiz },
		{ path: '/knowledge', name: 'quiz', component: quiz },
	]
})
