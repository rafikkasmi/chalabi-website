   <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark bg-white" id="sidenav-main">
      <div class="sidenav-header">
         <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
         <a class="navbar-brand m-0 text-center" href="{{ url('admin') }}">
            <!-- <img src="/images/logo/logo.png" class="navbar-brand-img" alt="main_logo"> -->
            <span class="ms-1 font-weight-bold text-white">Bijouterie Chalabi</span>
         </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="w-auto " id="sidenav-collapse-main">
         <ul class="navbar-nav">
            <li class="nav-item active">
               <a class="nav-link text-white {{ Request::is('categories') ? 'active bg-info' : '' }}" href="{{ url('admin/categories') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">table_view</i>
                  </div>
                  <span class="nav-link-text ms-1">Categories</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white {{ Request::is('add-category') ? 'active bg-info' : '' }}" href="{{ url('admin/add-category') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">add</i>
                  </div>
                  <span class="nav-link-text ms-1">Ajouter Categorie</span>
               </a>
            </li>
            <li class="nav-item active">
               <a class="nav-link text-white {{ Request::is('brands') ? 'active bg-info' : '' }}" href="{{ url('admin/brands') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">table_view</i>
                  </div>
                  <span class="nav-link-text ms-1">Marques</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white {{ Request::is('add-brand') ? 'active bg-info' : '' }}" href="{{ url('admin/add-brand') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">add</i>
                  </div>
                  <span class="nav-link-text ms-1">Ajouter Marque</span>
               </a>
            </li>
            <li class="nav-item active">
               <a class="nav-link text-white {{ Request::is('products') ? 'active bg-info' : '' }}" href="{{ url('admin/products') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">inventory</i>
                  </div>
                  <span class="nav-link-text ms-1">Produits</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white {{ Request::is('add-product') ? 'active bg-info' : '' }}" href="{{ url('admin/add-product') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">add</i>
                  </div>
                  <span class="nav-link-text ms-1">Ajouter Produit</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white {{ Request::is('prices-table') ? 'active bg-info' : '' }}" href="{{ url('admin/prices-table') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">inventory_2</i>
                  </div>
                  <span class="nav-link-text ms-1">Table des Prix </span>
               </a>
            </li><li class="nav-item">
               <a class="nav-link text-white {{ Request::is('store-data') ? 'active bg-info' : '' }}" href="{{ url('admin/store-data') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">group</i>
                  </div>
                  <span class="nav-link-text ms-1">Données de la boutique</span>
               </a>
            </li>
            </li><li class="nav-item">
               <a class="nav-link text-white {{ Request::is('store-front-images') ? 'active bg-info' : '' }}" href="{{ url('admin/store-front-images') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">group</i>
                  </div>
                  <span class="nav-link-text ms-1">Parametres de site</span>
               </a>
            </li>
            </li><li class="nav-item mb-2">
               <a class="nav-link text-white {{ Request::is('users') ? 'active bg-info' : '' }}" href="{{ url('admin/users') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">group</i>
                  </div>
                  <span class="nav-link-text ms-1 ">Utilisateur</span>
               </a>
            </li>

         </ul>
      </div>
   </aside>
