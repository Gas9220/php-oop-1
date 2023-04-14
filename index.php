<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies DB</title>

    <!-- Style -->
    <link rel="stylesheet" href="src/style/style.css">
    <!-- Style -->

</head>

<body>
    <div id="app">
        <div class="container">
            <div v-for="movie in movies" class="card-container">
                <div class="movie-card">
                    <h3>{{ movie.title }}</h3>
                    <span>Release date: {{ movie.release_date }}</span>
                    <span>Language: {{ movie.language }}</span>
                    <span>Minutes: {{ movie.minutes }}</span>
                    <span>Vote: {{ movie.vote }}</span>
                    <span>Over 18: {{ movie.over18 ? 'Yes' : 'No' }}</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Script -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.1/axios.min.js" integrity="sha512-NbjaUHU8g0+Y8tMcRtIz0irSU3MjLlEdCvp82MqciVF4R2Ru/eaXHDjNSOvS6EfhRYbmQHuznp/ghbUvcC0NVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="src/js/main.js"></script>
    <!-- /Script -->

</body>

</html>