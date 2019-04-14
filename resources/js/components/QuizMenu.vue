<template>
  <nav class="top-nav">
    <ul>
      <li v-for="category in categories">
        <a :href="'/quiz/'+category.id">{{ category.name }}</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" href="#" id="region" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          地域
        </a>
        <ul class="dropdown-menu" aria-labelledby="region">
          <li v-for="island in region">
            <a class="dropdown-item" :href="'/quiz/region/'+island.id">{{ island.name }}</a>
          </li>
        </ul>
      </li>
      <li id="accordion-menu">
        <a data-toggle="collapse" href="#sp-region" aria-controls="sp-region" aria-expanded="false">
          地域
        </a>
        <ul id="sp-region" class="collapse" data-parent="#accordion-menu">
          <li v-for="island in region"><a :href="'/quiz/region/'+island.id">{{ island.name }}</a></li>
        </ul>
      </li>
      <li><a href="/quiz">すべて</a></li>
    </ul>
  </nav>
</template>

<script>
  export default {
    name: 'QuizMenu',
    data: function () {
      return {
        categories: [],
        region: [],
        request: {
          menuId: ''
        }
      }
    },
    created() {
      this.getQuizCategories(),
        this.getRegion()
    },
    methods: {
      getQuizCategories: function () {
        const url = '/ajax/category';
        axios.get(url).then(res => {
          this.categories = res.data;
        })
          .catch(error => {
            console.log(error);
          });
      },
      getRegion: function () {
        const url = '/ajax/region';
        axios.get(url).then(res => {
          this.region = res.data;
        })
          .catch(error => {
            console.log(error);
          });
      }
    }
  }
</script>

<style scoped>
  .dropdown:hover .dropdown-menu {
    display: block;
  }
</style>