<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../vue.js"></script>
  </head>
  <body>
    <!-- Trial Condition Using Vue.js  -->
    <div id="app-3">
    <span v-if="seen">Now you see me</span>
  </div>
  </body>

  <script>
  var app3 = new Vue({
    el: '#app-3',
    data: {
      seen: true
    }
  })
</script>
</html>
