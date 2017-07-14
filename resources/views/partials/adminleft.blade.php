  <div class="col-md-3">
      <div class="panel panel-info">
          <div class="panel-heading">
            <h4 class="text-center"><i class="fa fa-home" aria-hidden="true"> Dashboard</i></h4>
          </div>

          <!-- Large button group -->
          <div class="btn-group btn-block">
              <button class="btn btn-default btn-lg col-md-12 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i>
              Products &nbsp;<span class="caret"> </span>
              </button>
              <ul class="dropdown-menu col-md-12">
                <li><a href="{{ route('product.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Products</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('product.create')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add Products</a></li>
              </ul>
          </div>

          <div class="btn-group btn-block">
              <button class="btn btn-default btn-lg col-md-12 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i>
              Categories &nbsp;<span class="caret"> </span>
              </button>
              <ul class="dropdown-menu col-md-12">
                <li><a href="{{ route('category.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> View Categories</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('category.create')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add Categories</a></li>
              </ul>
          </div>
      </div>
  </div>    
