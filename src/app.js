var app = new Vue({
    el: '#app',
    data: {
        dischiArray: [],
        optionArray: [],
        filterArray: [],
    },

    mounted() {
        axios.get('http://localhost/php-ajax-dischi/partials-php/server.php').then(response => {
            this.dischiArray = response.data;
            this.dischiArray.forEach(element => {
                if(this.optionArray.includes(element.genere) == false) {
                    this.optionArray.push(element.genere)
                }
            });
            console.log(this.optionArray);
            this.dischiArray.forEach(element =>{
                    this.filterArray.push(element);
            });
        });
    },

    methods: {

        selectGenre(index) {
            this.filterArray = [];
            this.dischiArray.forEach(element =>{
                if(this.optionArray[index] == element.genere) {
                    console.log(element);
                    this.filterArray.push(element);
                }
                console.log(this.filterArray);
            });
        }
    }
});