
<nav class="header" role="navigation">

        <div class="navbar-header">
            <nav class="flex-grow-1 mr-4">
                <form role="search">
                    <input type="text" class="form-control header-search-input" placeholder="Search">
                </form>
            </nav>
            <nav class="d-flex">
                <div class="profile-sidebar d-flex">
                    <div class="profile-userpic mx-2">
                        <img src="http://placehold.it/30/30a5ff/fff" width="30" class="img-responsive rounded-circle" alt="">
                    </div>
                    {{-- <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            @auth
                            {{ Auth::user()->name }}
                            @endauth
                        </div>
                        <div class="profile-usertitle-status"><span class="indicator label-success"></span>@lang('panel.online')
                        </div>
                    </div> --}}
                    <div class="clear"></div>
                </div>
                <ul class="nav navbar-top-links ">
                    <li class="dropdown mx-2">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fas fa-bolt"></em>
                            {{-- <span class="label label-info"></span> --}}
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><a href="{{url('/')}}/admin/clearcache">
                                    <div>
                                        <em class="fas fa-remove"></em> Clear Cache
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    {{-- @if(Acl::checkAccess('message', 'edit') )
                        @inject('MainController','App\Http\Controllers\Admin\MainController')
                        {!! $MainController->messages() !!}
                    @endif --}}







                    {{-- <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <em class="far fa-bell"></em>
                    <span class="label label-info">
                        5
                    </span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                    <li><a href="#">
                    <div><em class="fas fa-envelope"></em> 1 New Message
                    <span class="pull-right text-muted small">3 mins ago</span></div>
                    </a></li>
                    <li class="divider"></li>
                    <li><a href="#">
                    <div><em class="fas fa-heart"></em> 12 New Likes
                    <span class="pull-right text-muted small">4 mins ago</span></div>
                    </a></li>
                    <li class="divider"></li>
                    <li><a href="#">
                    <div><em class="fas fa-user"></em> 5 New Followers
                    <span class="pull-right text-muted small">4 mins ago</span></div>
                    </a></li>
                    </ul>
                    </li> --}}


                </ul>
            </nav>
        </div>

</nav>
