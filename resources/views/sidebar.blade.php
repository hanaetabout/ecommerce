<div   style="   display:flex ; margin-top:-25px "  >
    <!-- <div class="card-header"  style="background-color:#f8f8e8; width:100% ; margin-top:-7px; height:68px ">{{ __('Dashboard') }}</div> -->
    <!-- sidebare -->
    <div style=" height:inherit ; min-height:100%; width:20% ; background-color:#f8f8e8" >
        <div   style=" text-align:center " >
        <p style="  margin:50px  auto auto auto; ; font-size:13px ; font-weight:600 ;  "> <img src="{{ asset('image/configuration.png')}}"   style="  height:20px ; width:20px ; " alt=""> Configuration   </p>
        
        <!-- users -->
        <li class="nav-item"     style=" list-style: none;">
        <a href="{{ route('admin.user') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p style="  margin:30px  auto auto auto; ; font-size:13px ; font-weight:400 ; border-bottom: thick double #540E0E; border-bottom: thick double #540E0E;">Users</p>
            </a>
        </li>
        <!-- category -->
        <li class="nav-item"   style=" list-style: none;">
            <a href="{{ route('createCategory') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p style="  margin:30px  auto auto auto; ; font-size:13px ; font-weight:400 ; border-bottom: thick double #540E0E; ">Categories</p>
            </a>
        </li>
        <!-- PRODUCT -->
        <li class="nav-item"   style=" list-style: none;">
            <a href="{{ route('products.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p    style="  margin:30px  auto auto auto; ; font-size:13px ; font-weight:500 ; border-bottom: thick double #540E0E;">
                Products
            </p>
            </a>
        </li>
    </div>
</div>  