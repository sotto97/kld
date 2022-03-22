<template>
    <emit-child @eventTest1="test1" @eventTest2="test2" />
</template>

<script>
import EmitChild from "./EmitChild.vue";
export default {
    name: "EmitTest",
    components: {
        EmitChild,
    },
    methods: {
        test1: function () {
            alert("emit test1!!!");
        },
        test2: function (param1, param2) {
            alert("emit test2 " + param1 + ":" + param2);
        },
    },
};
</script>
