  <!-- Page Content -->
  <div class="container mt-5">

      <div class="row">

          <!-- Kolom Samping Kiri -->
          <div class="col-lg-3 d-none d-md-block">

              <!-- Cek Login Status -->
              <?php if ($this->session->userdata('logged_in')) : ?>
                  <div class="card p-5">
                      <a href="<?= base_url('user/profile') ?>">
                          <img src="<?= base_url('assets/product/user/') . $this->session->userdata('cover_img') ?>" alt="Profile" class="w-100">
                      </a>
                      <h4 class="text-center my-3 text-truncate"><b> <?= $this->session->userdata('user_name') ?></b></h4>
                      <?php if ($this->session->userdata('role') == 1) : ?>
                          <a href="<?= base_url('admin') ?>" class="btn btn-outline-info">Admin</a>
                      <?php else : ?>
                          <a href="<?= base_url('user/profile') ?>" class="btn btn-outline-info <?php if ($this->router->method == 'profile') {
                                                                                                            echo "bg-info text-white";
                                                                                                        }; ?>">Profile</a>
                          <div class="divinder my-2"></div>
                          <a href="<?= base_url('user/cart') ?>" class="btn btn-outline-success <?php if ($this->router->method == 'cart') {
                                                                                                            echo "bg-success text-white";
                                                                                                        }; ?>">Shopping Cart</a>
                      <?php endif; ?>
                      <div class="divinder my-2"></div>
                      <a href="<?= base_url('auth/logout') ?>" class="btn btn-outline-danger">Logout</a>
                  </div>
              <?php else : ?>
                  <div class="card mt-5 p-5">
                      <h4 class="text-center mb-4"><b> Login to continue</b></h4>
                      <a href="<?= base_url('auth/login') ?>" class="btn btn-outline-info">Login</a>
                      <div class="divinder my-2"></div>
                      <a href="<?= base_url('auth/register') ?>" class="btn btn-outline-info">Register</a>
                  </div>
              <?php endif; ?>

              <ul class="list-group shadow mt-5">
                  <li href="#" class="list-group-item ">
                      <h4><b>Category</b></h4>
                  </li>
                  <?php foreach ($category as $key) : ?>
                      <a href="<?= base_url('dashboard/category/') . $key['category_id'] ?>" class="list-group-item"><?= $key['category_name'] ?></a>
                  <?php endforeach; ?>
              </ul>


          </div>
          <!-- /.col-lg-3 -->

          <div class="page-wrapper chiller-theme d-block d-md-none">
              <nav id="sidebar" class="sidebar-wrapper">
                  <div class="sidebar-content">

                      <div class="sidebar-header mt-5">
                          <?php if ($this->session->userdata('logged_in')) : ?>
                              <div class="user-pic">
                                  <img class="img-responsive img-rounded" src="<?= base_url('assets/product/user/') . $this->session->userdata('cover_img') ?>" alt="User picture">
                              </div>
                              <div class="user-info">
                                  <span class="user-name">
                                      <strong><?= $this->session->userdata('user_name') ?></strong>
                                  </span>
                                  <span class="user-role">GUEST</span>
                                  <span class="user-status">
                                      <i class="fa fa-circle"></i>
                                      <span>Online</span>
                                  </span>
                              </div>
                          <?php endif; ?>
                      </div>
                      <!-- sidebar-header  -->
                      <div class="sidebar-search">
                          <div>
                              <form method="get" action="<?= base_url('dashboard/search/') ?>">
                                  <div class="input-group">
                                      <input type="text" class="form-control search-menu" placeholder="Search..." name="keyword">
                                      <div class="input-group-append">
                                          <button class="input-group-text" type="submit">
                                              <i class="fa fa-search" aria-hidden="true"></i>
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <!-- sidebar-search  -->
                      <div class="sidebar-menu">
                          <ul>
                              <li class="header-menu">
                                  <span>Category</span>
                              </li>
                              <li>
                                  <a href="<?= base_url() ?>">
                                      <i class="fa fa-stroopwafel"></i>
                                      <span>All</span>
                                  </a>
                              </li>
                              <?php foreach ($category as $key) : ?>
                                  <li>
                                      <a href="<?= base_url('dashboard/category/') . $key['category_id'] ?>">
                                          <i class="fa fa-stroopwafel"></i>
                                          <span><?= $key['category_name'] ?></span>
                                      </a>
                                  </li>
                              <?php endforeach; ?>
                              <?php if ($this->session->userdata('logged_in')) : ?>
                                  <li class="header-menu">
                                      <span>Pages Controller</span>
                                  </li>
                                  <?php if ($this->session->userdata('role') == 1) : ?>
                                      <li>
                                          <a href="<?= base_url('admin') ?>">
                                              <i class="fa fa-users-cog"></i>
                                              <span> Admin</span>
                                          </a>
                                      </li>
                                  <?php endif; ?>
                                  <li>
                                      <a href="<?= base_url('user/profile') ?>">
                                          <i class="fa fa-user"></i>
                                          <span>Profile</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="<?= base_url('user/cart') ?>">
                                          <i class="fa fa-shopping-cart"></i>
                                          <span>Shopping Cart</span>
                                      </a>
                                  </li>

                                  <li>
                                      <a href="<?= base_url('auth/logout') ?>">
                                          <i class="fa fa-sign-out-alt"></i>
                                          <span>Logout</span>
                                      </a>
                                  </li>
                              <?php else : ?>
                                  <li class="header-menu">
                                      <span>Login Page</span>
                                  </li>
                                  <li>
                                      <a href="<?= base_url('auth/login') ?>">
                                          <i class="fa fa-sign-in-alt"></i>
                                          <span>Login</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="<?= base_url('auth/register') ?>">
                                          <i class="fa fa-user-plus"></i>
                                          <span>Regist</span>
                                      </a>
                                  </li>
                              <?php endif; ?>
                          </ul>
                      </div>
                      <!-- sidebar-menu  -->
                  </div>
              </nav>
              <!-- sidebar-wrapper  -->

          </div>