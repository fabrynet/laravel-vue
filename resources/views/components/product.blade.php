<script id="product-component" type="text/x-template">

  <div class="card mb-3" style="width: calc(25% - 10px);">
    <img class="card-img-top" :src="img" alt="Product Image">
    <div class="card-body">
      <h5 class="card-title">@{{ name }}</h5>
      <p class="card-text">
        @{{ short_desc }}
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

    props: {
      name: String,
      short_desc: String,
      img: String,
      id: String
    }

  });

</script>
