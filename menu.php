
<!-- nav start -->
  <div class="row">
      <div class="container ps-5 pe-5">
          <nav class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top shadow-sm">
              <div class="container">
                  <a class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none" href="">
                      <img src="<?= base_url();?>image/logo.jpg" width="40" height="40" class="d-inline-block pull-left ms-2 me-2" alt="">
                      <span class="fs-5 fw-bolder d-sm-block d-lg-none">Wirasena Jaya</span>&nbsp;
                      <span class="fs-5 fw-bolder ps-3 d-none d-lg-block">Wirasena Jaya Group</span>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ms-auto">
                          <li class="nav-item">
                          <a class="nav-link fw-bolder" aria-current="page" href="<?=base_url();?>">Home</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link fw-bolder" href="<?= site_url('about');?>">About</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link fw-bolder" href="<?= site_url('product');?>">Product</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link fw-bolder" href="<?= site_url('project');?>">Our Project</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link fw-bolder" href="<?= site_url('contact');?>">Contact</a>
                          </li>
                          
                      </ul>
                  </div>
              </div>
          </nav>
      </div>
  </div>
<!-- nav end -->