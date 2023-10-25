<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Route::is('home')  ? '' : 'collapsed' }}" href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Invenory</li>


      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('productList.index')  ? '' : 'collapsed' }}" href="{{ route('productList.index') }}">
          <i class="bx bx-file-blank"></i>
          <span>Product List</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('orderList.index')  ? '' : 'collapsed' }}" href="{{ route('orderList.index') }}">
          <i class="bx bx-cart"></i>
          <span>
              
                @if($orderListCount == 0 )
              
               Order List
               
              @else
              
              
              Order List ({{$orderListCount}})
              
              @endif
              
              </span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-heading">Website</li>

      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('reviewList.index')  ? '' : 'collapsed' }}" href="{{ route('reviewList.index') }}">
          <i class="bx bx-paste"></i>
          <span>
              
                 @if($allReviewListCount == 0 )
              
               Review List
               
              @else
              
              Review List ({{$allReviewListCount}})
              
              @endif
              
              </span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('messageList.index')  ? '' : 'collapsed' }}" href="{{ route('messageList.index') }}">
          <i class="bx bx-message-alt-detail"></i>
          <span>
              
              @if($allMessageListCount == 0 )
              
               Message List
               
              @else
              
              Message List ({{$allMessageListCount}})
              
              @endif
              
              </span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('bannerList.index')  ? '' : 'collapsed' }}" href="{{ route('bannerList.index') }}">
          <i class="bi bi-image"></i>
          <span>Banner List</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('deliveryChargeList.index')  ? '' : 'collapsed' }}" href="{{ route('deliveryChargeList.index') }}">
          <i class="bx bx-money"></i>
          <span>Delivery Charge</span>
        </a>
      </li><!-- End Profile Page Nav -->

            <li class="nav-item ">
        <a class="nav-link   {{ Route::is('socialLinkList.index')  ? '' : 'collapsed' }}" href="{{ route('socialLinkList.index') }}">
          <i class="bx bx-world"></i>
          <span>Social Link</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('returnPolicy.index')  ? '' : 'collapsed' }}" href="{{ route('returnPolicy.index') }}">
          <i class="bx bx-file"></i>
          <span>Return Policy</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('privacyPolicy.index')  ? '' : 'collapsed' }}" href="{{ route('privacyPolicy.index') }}">
          <i class="bx bx-detail"></i>
          <span>Privacy Policy</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-heading">Other</li>

      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('systemInfo.index')  ? '' : 'collapsed' }}" href="{{ route('systemInfo.index') }}">
          <i class="bi bi-gear-fill"></i>
          <span>System Info</span>
        </a>
      </li><!-- End Profile Page Nav -->



    </ul>

  </aside>
