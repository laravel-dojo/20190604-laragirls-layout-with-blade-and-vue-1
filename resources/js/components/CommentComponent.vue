<template>
    <div>
        <div v-for="comment in comments">
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">{{ comment.name }}</h5>
                    {{ comment.content }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CommentComponent.vue",
        data() {
            return {
                comments: []
            }
        },
        created() {
            this.axios.get('http://127.0.0.1:8000/api/comments').then(response => {
                this.comments = response.data;
            });
        }
    }
</script>

<style scoped>

</style>
