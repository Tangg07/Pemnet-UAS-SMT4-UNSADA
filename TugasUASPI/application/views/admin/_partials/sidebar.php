<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/products') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>New Product</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/products') ?>">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Product</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-wpexplorer"></i>
            <span>Go to Web</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/login/logout') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Log out</span></a>
    </li>
</ul>
