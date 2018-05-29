<template>
  <div>
      
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
        created_at: '',
        comment: '',
        post_id: ''
      },
      post: []
    }
  },

  methods: {
    fetchData () {
      axios.get('/api/comments', this.post_id)
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
          this.post_id.comment = ''
        })
    }
  }

}
</script>
