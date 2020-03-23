
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" target="_blank"><span>{{config('app.name')}}</span> Admin</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fas fa-bolt"></em><span class="label label-info"></span>
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







                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <em class="fas fa-bell"></em><span class="label label-info">5</span>
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
                </li>


            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>
