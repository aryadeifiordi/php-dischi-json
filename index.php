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
        <div v-if="error" class="error">{{ error }}</div>
        <div v-else>
            <div v-for="album in albums" class="album">
                <img :src="album.poster" alt="Album Cover">
                <h3>{{ album.title }}</h3>
                <p>{{ album.author }}</p>
                <p>{{ album.year }}</p>
                <p>{{ album.genre }}</p>
            </div>
        </div>
    </main>
    <footer></footer>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@3"></script>

<script>
    const app = Vue.createApp({
        data() {
            return {
                albums: [],
                error: ''
            };
        },
        mounted() {
            axios.get('api/getAlbums.php')
                .then(response => {
                    this.albums = response.data;
                })
                .catch(error => {
                    console.error('Error fetching albums:', error);
                    this.error = 'Error fetching albums';
                });
        }
    });

    app.mount('#app');
</script>

</body>
</html>
