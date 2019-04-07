<!-- <template>-->
    <!--<div id="explain" v-if="show">-->
        <!--<h2 v-if="judgment"><i class="far fa-circle mr-4"></i>正解！</h2>-->
        <!--<h2 v-else><i class="fas fa-times mr-4"></i>不正解</h2>-->
        <!--<p><strong>解説：</strong>{{quizData[quizNum-1].e}}</p>-->
        <!--<button v-on:click="next" type="button" class="btn btn-primary rounded-pill btn-block">次へ</button>-->
    <!--</div>-->
<!--</template>-->

<!--<script>-->
    <!--export default{-->
        <!--name: 'quizExplain',-->
        <!--props: ['quizData', 'quizNum', 'judgment'],-->
        <!--data: function(){-->
            <!--return{-->
                <!--show: false,-->
                <!--totalQuizNum: 5,-->
                <!--nextCounter: 0-->
            <!--}-->
        <!--},-->
        <!--methods: {-->
            <!-- showExplain: function(tmp){-->
                <!--if(!tmp){-->
                    <!--this.show = !this.show //true-->
                <!--}-->
            <!--}, -->
            <!--next: function(){-->
                <!--this.nextCounter++-->
                <!--console.log(this.nextCounter)-->
                <!--if(this.nextCounter < this.totalQuizNum){-->
                    <!--this.show = !this.show //false-->
                    <!--this.$emit('showQuiz', this.show)-->
                <!--}else{-->
                    <!--this.$emit('endQuiz')-->
                <!--}-->

            <!--}-->
        <!--}-->
    <!--}-->
<!--</script>-->

<!--<style scoped>-->

<!--</style> -->
