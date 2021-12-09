const app = new Vue({
    el: '#app',
    data: {
        dischi: []

    },
    mounted() {
        axios
            .get('./api/product.php')
            .then(response => {
                console.log(response);
                this.dischi = response.data
            }).catch(error => {
                console.log(error);
            })
    }
})