<ul class="nav navbar-nav animated-nav navbar-right">
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
    <!-- Search in right of nav -->
    <li class="search">
        <a href="#" class="open-search">
          <i class="fa fa-search">
          </i>
        </a>
      </li>
      <!-- Search Ends -->
</ul>