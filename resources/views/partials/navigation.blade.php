<header id="section-header" class="header moto-section" data-widget="section" data-container="section">
  <div class="moto-widget moto-widget-container moto-container_header_5860f91b1" data-widget="container" data-container="container" data-css-name="moto-container_header_5860f91b1" data-moto-sticky="{ }">
    <div class="moto-widget moto-widget-row row-fixed moto-justify-content_center" data-widget="row">
      <div class="container-fluid">
        <div class="row">
          <div class="moto-cell col-sm-4" data-container="container">
            <div class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="saaa" data-visible-on="mobile-v">
              <div class="moto-widget-spacer-block" style="height:10px"></div>
            </div>
            <div class="moto-widget moto-widget-text moto-preset-default wow fadeIn moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="fadeIn">
              <div class="moto-widget-text-content moto-widget-text-editable">
                <p class="moto-text_system_1">
                  <a href="{{ route('aust_home') }}" data-action="page" data-id="8" class="moto-link">Austmetal</a><br>
                </p>
                <p class="moto-text_system_2">
                  <a href="{{ route('aust_home') }}" data-action="page" data-id="8" class="moto-link">ZION CONSTRUCTION</a><br>
                </p>
              </div>
            </div>
            <div class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="saaa" data-visible-on="mobile-v">
              <div class="moto-widget-spacer-block" style="height:10px"></div>
            </div>
          </div>
          <div class="moto-cell col-sm-8" data-container="container">
            <div data-widget-id="wid__menu__58abf07f1f5c5" class="moto-widget moto-widget-menu moto-preset-default moto-align-right moto-align-left_mobile-v moto-align-left_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-preset="default" data-widget="menu">
              <a href="#" class="moto-widget-menu-toggle-btn">
                <i class="moto-widget-menu-toggle-btn-icon fa fa-bars"></i>
              </a>
              <ul class="moto-widget-menu-list moto-widget-menu-list_horizontal" style="margin-bottom: -20px;">
                @guest
                <li class="moto-widget-menu-item">
                  <a href="{{ route('aust_home') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 @if(isset($home)) {{ $home }} @endif moto-link">HOME</a>
                </li>
                <li class="moto-widget-menu-item">
                  <a href="{{ route('aust_about') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 @if(isset($company)) {{ $company }} @endif moto-link">COMPANY</a>
                </li>

                <li class="moto-widget-menu-item">
                  <a href="{{ route('aust_services') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 @if(isset($products)) {{ $products }} @endif moto-link">PRODUCTS &amp; SERVICES</a>
                </li>
                <li class="moto-widget-menu-item moto-widget-menu-item-has-submenu">
                  <a href="{{ route('aust_gallery') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 @if(isset($gallery)) {{ $gallery }} @endif moto-widget-menu-link-submenu moto-link">GALLERY
                    <span class="fa moto-widget-menu-link-arrow"></span>
                  </a>
                  <ul class="moto-widget-menu-sublist">
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_fencerails') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Fence Rails</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_gates') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Gates</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_handrails') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Hand Rails</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_irondoor') }}" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Iron Doors</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_staircase') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Staircase</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_window') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Windows/Burglary</a>
                    </li>

                  </ul>
                </li>

                <li class="moto-widget-menu-item">
                  <a href="{{ route('aust_contact') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link @if(isset($contact)) {{ $contact }} @endif">CONTACTS</a>
                </li>
                @else
                <li class="moto-widget-menu-item">
                  <a href="{{ route('aust_home') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 @if(isset($home)) {{ $home }} @endif moto-link">HOME</a>
                </li>
                <li class="moto-widget-menu-item">
                  <a href="{{ route('aust_about') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 @if(isset($company)) {{ $company }} @endif moto-link">COMPANY</a>
                </li>

                <li class="moto-widget-menu-item">
                  <a href="{{ route('aust_services') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 @if(isset($products)) {{ $products }} @endif moto-link">PRODUCTS &amp; SERVICES</a>
                </li>
                <li class="moto-widget-menu-item moto-widget-menu-item-has-submenu">
                  <a href="{{ route('aust_gallery') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 @if(isset($gallery)) {{ $gallery }} @endif moto-widget-menu-link-submenu moto-link">GALLERY
                    <span class="fa moto-widget-menu-link-arrow"></span>
                  </a>
                  <ul class="moto-widget-menu-sublist">
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_fencerails') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Fence Rails</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_gates') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Gates</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_handrails') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Hand Rails</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_irondoor') }}" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Iron Doors</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_staircase') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Staircase</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_window') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Windows/Burglary</a>
                    </li>

                  </ul>
                </li>

                <li class="moto-widget-menu-item">
                  <a href="{{ route('aust_contact') }}"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link @if(isset($contact)) {{ $contact }} @endif">CONTACTS</a>
                </li>
                @if(Auth::user()->role == 4)
                <li class="moto-widget-menu-item moto-widget-menu-item-has-submenu">
                  <a href="#"   data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-widget-menu-link-submenu moto-link">{{ Auth::user()->name }}
                    <span class="fa moto-widget-menu-link-arrow"></span>
                  </a>
                  <ul class="moto-widget-menu-sublist">
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('aust_dashboard') }}" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link ">Dashboard</a>
                    </li>
                    <li class="moto-widget-menu-item">
                      <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link ">Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>
                @endif
                @endguest
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
