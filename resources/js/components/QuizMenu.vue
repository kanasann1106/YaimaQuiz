<template>
  <nav class="top-nav">
    <ul>
      <li v-for="category in categories" :data-menu-id="category.id">{{ category.name }}</li>
      <li class="dropdown">
        <a class="dropdown-toggle" href="#" id="region" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          地域
        </a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="region">
          <li v-for="island in region" :data-region-id="island.id"><a class="dropdown-item"
              href="#">{{ island.name }}</a></li>
        </ul>
      </li>
      <li id="accordion-menu">
        <a data-toggle="collapse" href="#sp-region" aria-controls="sp-region" aria-expanded="false">
          地域
        </a>
        <ul id="sp-region" class="collapse" data-parent="#accordion-menu">
          <li v-for="island in region" :data-region-id="island.id"><a href="#" id="island1">{{ island.name }}</a></li>
        </ul>
      </li>
      <li data-menu-id="0">すべて</li>
    </ul>
  </nav>
</template>

<script>
  export default {
    name: 'QuizMenu',
    data: function () {
      return {
        categories: [],
        region: []
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

</style>