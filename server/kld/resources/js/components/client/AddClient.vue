<script>
var app = new Vue({
    el: "#addClient",
    data: {
        client_id: "",
        client_name: "",
    },
    methods: {
        addNewClient() {
            axios
                .post("/client/store", {
                    client_id: this.client_id,
                    client_name: this.client_name,
                })
                .then((response) => {
                    console.log("登録に成功しました");
                    window.location.href = "/client";
                })
                .catch((error) => {
                    console.log("登録に失敗しました。");
                });
        },
    },
});
</script>
