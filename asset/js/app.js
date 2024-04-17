const app = Vue.createApp({
    data() {
        return {
            albums: []
        }
    },
    mounted() {
        axios.get('api/getAlbums.php')
            .then(response => {
                this.albums = response.data;
            })
            .catch(error => {
                console.error('Error fetching albums:', error);
            });
    }
});

app.mount('#app');
