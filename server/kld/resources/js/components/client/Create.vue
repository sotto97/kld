<script>
var app = new Vue({
    el: "#addClient",
    data: {
        client_id: "",
        client_neme: "",
    },
    methods: {
        addNewClient() {
            axios.post("/client/store", {
                client_id: "",
                client_name: "",
            });
        },
    },
});
</script>
