<script type="text/x-template" id="test-component">

  <div class="main-component" v-on:mouseover="setImgVisibility(true)" v-on:mouseout="setImgVisibility(false)">

    <h1>@{{ text }}</h1>
    <img v-if="imgVisibility" src="{{ asset('/img/jobs.png') }}" width="100px">

  </div>

</script>

<script type="text/javascript">

  Vue.component('outtestcomponent', {

    template: '#test-component',

    data: function() {
      return {
        imgVisibility: false
      }
    },

    props: {
      text: String
    },

    methods: {
      setImgVisibility: function(imgVisibility) {
        this.imgVisibility = imgVisibility
      }
    }


  });

</script>
