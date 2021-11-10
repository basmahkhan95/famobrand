<li class="dropdown dropdown-notification nav-item">
    <a class="nav-link nav-link-label famo-bell-icon" href="javascript:void(0)"
       data-toggle="dropdown"><i
            class="fa fa-bell" aria-hidden="true"></i>
        @if($authUser->notifications()->whereIsRead(0)->count())
            <span
                class="badge badge-pill badge-default badge-danger badge-default badge-up famo-notif-count">{{ $authUser->notifications()->whereIsRead(0)->count() }}</span>
        @endif
    </a>
    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
        <li class="dropdown-menu-header">
            <h6 class="dropdown-header m-0">Notifications</h6>
        </li>
        <li class="scrollable-container media-list ps-container ps-theme-dark ps-active-y"
            data-ps-id="cbae8718-1b84-97ac-6bfa-47d792d8ad89">
            @foreach($authUser->notifications()->take(5)->get() as $notif)
                <a href="javascript:void(0)">
                    <div class="media">
                        <div class="media-body">
                            <p class="notification-text font-small-3 text-muted famo-ellipsis">{{ $notif->title }}</p>
                            <p class="notification-text font-small-3 text-muted">{{ $notif->created_at }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </li>
        <li class="dropdown-menu-footer">
            <a class="dropdown-item text-muted text-center"
               href="{{ route('admin.notification.index') }}">See More</a>
        </li>
    </ul>
</li>
