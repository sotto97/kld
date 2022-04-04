<template>
  <div id="overlay">
    <div id="content">
      <div class="text-right">
        <button type="button" v-on:click="$emit('close')" class="btn bg-green-400 hover:bg-green-500 text-white">閉じる <i class="fas fa-times"></i></button>
      </div>

      <div id="addCategory" class="container items-center">
        <!--
        $emitで親コンポーネントにaddを渡して、addNewCategoryメソッドにする。
        引数として、category_nameを渡す。
        -->
        <form @submit.prevent="$emit('add', category_name)">
          <div class="py-4">
            <p class="w-full">カテゴリ名</p>
            <input v-model="category_name" type="text" class="form-control" name="category_name" />
          </div>
          <div class="w-full md:w-3/4 mx-auto my-2">
            <input type="submit" value="登録する" class="bg-gray-700 hover:bg-gray-500 rounded-full text-white w-full p-2" />
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
var app = new Vue({
  el: "#addCategory",
  data: {
    return: {
      category_name: "",
    },
  },
  methods: {},
});
</script>

<style>
#content {
  z-index: 2;
  padding: 1em;
  width: 50%;
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
