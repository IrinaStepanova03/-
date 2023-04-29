const vue = new Vue({
    el: "#app",
    data(){
        return {
            tours: []
        }
    },
    mounted() {
        axios
            .post(
                "./php/test.php", // url
                { query: "Пилот" } // data
            )
            .then(function (response) {
                this.tours = response.data
                console.log(this.tours)
            })
            .catch(function (error) {
                console.log(error);
            });
    },
});
