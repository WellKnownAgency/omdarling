<template>
  <div>
    

  </div>
</template>

<script>
export default {
  mounted() {
    this.fetchData()
    this.fetchPost()
  },

  data() {
    return {
      comments: [],
      comment: {
        name: '',
        comment: '',
        post_id: ''
      },
      posts: [],
      post: {
        id: ''
      }
    }
  },

  methods: {
    fetchPost () {
      axios.get(`/api/posts/${post.id}`, this.post)
        .then((res) => {
          this.post = res.data
        })
        .catch((err) => {
          console.log(err)
        })
    },

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
      axios.post('/api/comments', this.comment, this.comment.post)
        .then((res) => {
          this.comments.unshift(res.data)
          this.comment.name = ''
          this.comment.email = ''
          this.comment.comment = ''
          this.comment.post_id = this.comment.post.id
        })
    }
  }

}
</script>
