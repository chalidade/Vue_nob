<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../vue.js"></script>
  </head>
  <body>
    <!-- Trial Bind Text Using Vue.js  -->
  <div id="app-2">
    <span v-bind:title="message">
      Hover your mouse over me for a few seconds
      to see my dynamically bound title!
    </span>
  </div>
  </body>

  <script>
  var app2 = new Vue({
    el: '#app-2',
    data: {
      message: 'You loaded this page on ' + new Date().toLocaleString()
    }
  })
</script>
</html>
