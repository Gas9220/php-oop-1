const { createApp } = Vue

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      movies: []
    }
  },
  methods: {
    fetchMovies() {
      axios.get(this.apiUrl)
      .then((response) => {
          console.log(response);
          this.movies = response.data;
      })
    },
    concatGenres(genre) {
      return genre.join(', ');
    }
  },
  created() {
    this.fetchMovies()
  }
}).mount('#app')