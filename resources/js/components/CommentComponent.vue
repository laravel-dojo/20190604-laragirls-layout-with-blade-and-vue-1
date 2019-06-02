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
                comments: [
                    {
                        "name": "User 1",
                        "content": "user comment"
                    },
                    {
                        "name": "User 2",
                        "content": "user comment"
                    }
                ]
            }
        },
    }
</script>

<style scoped>

</style>
