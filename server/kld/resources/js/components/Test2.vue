<template>
    <div>
        <button @click="$emit('eventTest1')">testButton1</button>
        <button @click="$emit('eventTest2', 'パラメータ！')">
            testButton2
        </button>
        <button @click="execEmit()">testButton3</button>
    </div>
</template>
<script>
export default {
    name: "EmitChild",
    methods: {
        execEmit: function () {
            this.$emit("eventTest2", "パラメータ1", "パラメータ2");
        },
    },
};
</script>
