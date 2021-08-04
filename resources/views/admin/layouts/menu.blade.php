<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
        data-ktmenu-dropdown-timeout="500">
        <ul class="kt-menu__nav side-menu-shown">
            <li class="kt-menu__item"><a href="{{url('admin/')}}"
                    class="kt-menu__link side-menu-item menu-panel"><img src="{{asset('assets/img/icons/product.png')}}" class="menu-icon"/><span class="kt-menu__link-text">Product</span></a></li>
            <li class="kt-menu__item "><a href="{{url('admin/module')}}" class="kt-menu__link side-menu-item menu-module"><img src="{{asset('assets/img/icons/modul.png.png')}}" class="menu-icon"/><span class="kt-menu__link-text">Module</span></a></li>
            @if(Auth::user()->role == 1)
            <li class="kt-menu__item "><a
                    href="{{url('admin/configuration')}}" class="kt-menu__link side-menu-item menu-configuration"><img src="{{asset('assets/img/icons/configuration.png')}}" class="menu-icon"/><span
                        class="kt-menu__link-text">Configuration</span></a></li>
            <li class="kt-menu__item"><a href="{{url('admin/location')}}" class="kt-menu__link side-menu-item menu-location"><img src="{{asset('assets/img/icons/location.png')}}" class="menu-icon"/><span
                        class="kt-menu__link-text">Location</span></a></li>
            
            <li class="kt-menu__item "><a href="{{url('admin/cell')}}" class="kt-menu__link side-menu-item menu-cell"><img src="{{asset('assets/img/icons/cell.png')}}" class="menu-icon"/><span class="kt-menu__link-text">Cell</span></a>
            </li>
            <li class="kt-menu__item "><a href="{{url('admin/customer')}}" class="kt-menu__link side-menu-item menu-customer"><img src="{{asset('assets/img/icons/customer.png')}}" class="menu-icon"/><span
                        class="kt-menu__link-text">Customer</span></a></li>
            @endif
        </ul>
    </div>
</div>
    
