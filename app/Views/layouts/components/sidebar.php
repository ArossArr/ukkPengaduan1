<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-comment"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
          <a class="nav-link" href="/dash">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
     </li>

     <!-- Heading -->

     <?php if(session('level')=='admin'){
        ?>
          <hr class="sidebar-divider">
     <div class="sidebar-heading">
          Admin
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
          <a href="/petugas" class="nav-link">
               <i class="fas fa-fw fa-user"></i>
               <span>Petugas</span>
          </a>
     </li>
     <?php
    }?>
     <?php if(session('level')!='masyarakat'){
        ?>
     <li class="nav-item">
          <a href="/masyarakat" class="nav-link">
               <i class="fas fa-fw fa-users"></i>
               <span>Masyarakat</span>
          </a>
     </li>
     <li class="nav-item">
          <a href="/pengaduan" class="nav-link">
               <i class="fas fa-fw fa-comment"></i>
               <span>Pengaduan</span>
          </a>
     </li>
     <!-- Nav Item - Tables -->
     <li class="nav-item">
          <a class="nav-link" href="/pengaduan">
               <i class="fas fa-fw fa-table"></i>
               <span>Tanggapan</span></a>
     </li>
     <?php
    }?>
       <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
     Opsi
</div>
     <?php if(session('nik')!=null){
        ?>
     <li class="nav-item">
          <a class="nav-link" href="/pengaduan">
               <i class="fas fa-fw fa-comment"></i>
               <span>Pengaduan</span></a>
     </li>
     <?php
        }?>

    <?php if(!empty(session()->get('logged_in'))) : ?>
        <li class="nav-item">
          <a class="nav-link" href="/logout">
               <i class="fas fa-fw fa-sign-out-alt"></i>
               <span>Logout</span></a>
     </li>
    <?php endif?>




     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

     <!-- Sidebar Message -->


</ul>