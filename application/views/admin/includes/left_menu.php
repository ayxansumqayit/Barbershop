 <!-- Page Wrapper -->
 <div id="wrapper">

     <!-- Sidebar -->


     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('a_adminka'); ?>">
             <div class="sidebar-brand-icon rotate-n-15">
                 <i class="fas fa-laugh-wink"></i>
             </div>
             <div class="sidebar-brand-text mx-3">Admin</div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href="<?php echo base_url('a_dashboard'); ?>">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span>Dashboard</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Interface
         </div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fas fa-fw fa-cog"></i>
                 <span>Staff</span>
             </a>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="<?php echo base_url('a_staff_list'); ?>">List</a>
                     <a class="collapse-item" href="<?php echo base_url('a_staff_create'); ?>">Create</a>
                 </div>
             </div>
         </li>

         <!-- Nav Item - Utilities Collapse Menu -->


         <!-- Divider -->
         <hr class="sidebar-divider">



         <!-- Nav Item - Pages Collapse Menu -->




     </ul>


     <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">