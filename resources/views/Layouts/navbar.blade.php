<!--NavBar-->
<nav class="navbar navbar-expand-lg py-2 sticky-top navbar-light bg-dark">
        <div class="container">
          <a class="navbar-brand text-light" href="{{ route ('product.index') }}">
            CRUD         
          </a>
          
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbaSupportedContent">
            <ul class ="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="navbar-nav ms-auto">
                <td><button class="btn btn-sml-light text-light" onclick="location.href='{{url('home')}}'">Back to homepage</button></td>              
              </div>
                <li class = "nav-link" href="{{ route('product.index')}}"></li>
                
            </ul>
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    Search
                  </button>
                </div>
              </div>
             </form>
          </div>
        </div>
      </nav>