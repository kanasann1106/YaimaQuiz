import Vue from 'vue'
import Router from 'vue-router'
import quiz from '@/components/quiz'

Vue.use(Router)

export default new Router({
	routes: [
		{ path: '/', name: 'quiz', component: quiz },
		// { path: '/', name: 'Explain', component: Explain },
	]
})
