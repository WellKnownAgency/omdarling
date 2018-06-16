<template>
  <div>
    <section class="container-sm">

              <div class="comments">

                <input
                v-model="comment.name"
                @keydown.enter="create"
                class="comment-name"
                type="text"
                name="name"
                placeholder="Your name">

                <input
                v-model="comment.email"
                @keydown.enter="create"
                class="comment-email" type="email" name="email" placeholder="Your email">

                <textarea
                v-model="comment.comment"
                @keydown.enter="create"
                class="comment" type="text" name="comment" placeholder="leave a comment..."></textarea>

                <button class="btn-comment" type="button" @click="create">Post</button>
              </div>
    <hr class="style-comment">
      <div class="comment-dialog" v-for="comment in comments">
        <p class="username"> {{ comment.name }}</p>
        <p class="smallp">{{ comment.created_at }}</p>
        <p class="text">  {{ comment.comment }}</p>
      </div>
    </section>

  </div>
</template>

<script>
export default {
  mounted() {
    this.fetchData()
  },

  data() {
    return {
      comments: [],
      comment: {
        name: '',
        comment: '',
        post_id: ''
      },
      post: []
    }
  },

  methods: {
    fetchData () {
      axios.get('/api/comments')
        .then((res) => {
          this.comments = res.data
        })
        .catch((err) => {
          console.log(err)
        })
    },

    create () {
      axios.post('/api/comments', this.comment)
        .then((res) => {
          this.comments.unshift(res.data)
          this.comment.name = ''
          this.comment.email = ''
          this.comment.comment = ''
          this.comment.post_id = this.post
        })
    }
  }

}
</script>
