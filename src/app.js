var app = new Vue({
    el: '#app',
    data: {
        dischiArray: [],
    },

    mounted() {
        axios.get('http://localhost/php-ajax-dischi/partials-php/server.php').then(response => {
            console.log(response.data);
            this.dischiArray = response.data;
        });
    }
});