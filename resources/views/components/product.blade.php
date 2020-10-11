<script id="product-component" type="text/x-template">

  <div class="card mb-3" style="width: calc(25% - 10px);">
    <img class="card-img-top" :src="img" alt="Product Image">
    <!-- VERSIONE 1 -->
    <!-- <div class="card-body" v-on:mouseover="setMouseIn(true)" v-on:mouseout="setMouseIn(false)"> -->
    <!-- VERSIONE 2 -->
    <div class="card-body" v-on:mouseover="setMouseIn(true)" v-on:mouseout="setMouseIn(false)">
      <h5 class="card-title">@{{ name }}</h5>
      <!-- VERSIONE 1 -->
      <!-- <p class="card-text" v-if="!mouseIn">
        @{{ shortDesc }}
      </p>
      <p class="card-text" v-if="mouseIn">
        @{{ desc }}
      </p> -->
      <!-- VERSIONE 2 -->
      <p class="card-text">
        @{{ shortDesc }}
      </p>
    </div>
    <div class="card-footer">
      <a href="{{ route('products.index') }}" class="btn btn-primary">Show</a>
    </div>
  </div>

</script>

<script type="text/javascript">

  Vue.component('productcomponent', {

    template: '#product-component',

    data: function () {
      return {
        mouseIn: false
      }
    },

    props: {
      name: String,
      short_desc: String,
      desc: String,
      img: String,
      id: String
    },

    methods: {
      setMouseIn: function(mouseIn) {
        this.mouseIn = mouseIn
      }
    },

    computed: {
      shortDesc: {
        get: function() {
          if (this.mouseIn) return this.desc;

          var res = this.desc.substring(0, 50).trim();
          return res + (this.desc.length > 50 ? '...' : '');
        }
      }
    }

  });

</script>
