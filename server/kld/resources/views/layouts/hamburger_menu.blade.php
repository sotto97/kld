<div id="nav">
    <ul>
        <li v-for="item in items">
            <a :href="item.url" v-if="!item.children"> @{{ item.name }} </a>
            <span v-else v-on:click="open">
                @{{ item.name }}

                <ul class="dropdown" :class="{ isOpen }">
                    <li v-for="child in item.children">
                        <a :href="child.url"> @{{ child.name }} </a>
                    </li>
                </ul>
            </span>
        </li>
    </ul>
</div>

<script>
    var nav = new Vue({
    el: "#nav",
    data: {
        isOpen: false,
        items: {
            url: "#service",
            name: "X",
            children: [
                {
                    url: "#service1",
                    name: "クライアント一覧",
                },
                {
                    url: "#service2",
                    name: "カテゴリ一覧",
                },
                {
                    url: "#service3",
                    name: "記事一覧",
                },
                {
                    url: "#service3",
                    name: "ログアウト",
                },
            ],
        },
    },
    methods: {
        open: function () {
            this.isOpen = !this.isOpen;
        },
    },
});
</script>