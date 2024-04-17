<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disc dispense</title>
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body>

<div id="app">
    <header></header>
    <main>
        <div v-for="album in albums" class="album">
            <img :src="album.poster" alt="Album Cover">
            <h3>{{ album.title }}</h3>
            <p>{{ album.author }}</p>
            <p>{{ album.year }}</p>
            <p>{{ album.genre }}</p>
        </div>
    </main>
    <footer></footer>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./assets/js/vue.min.js"></script>
<script src="./assets/js/axios.min.js"></script>
<script src="./assets/js/app.js"></script>

</body>
</html>
