<template>
    <div id="overlay">
        <div id="content">
            <div class="text-right">
                <button
                    type="button"
                    v-on:click="$emit('close')"
                    class="btn btn-success"
                >
                    閉じる <i class="fas fa-times"></i>
                </button>
            </div>
            <div>
                <p>開きました!!</p>
            </div>
        </div>
    </div>
</template>
<script></script>
<style>
#content {
    z-index: 2;
    width: 80%;
    padding: 1em;
    background: #fff;
}

#overlay {
    z-index: 1;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
