<li class="dropdown">

    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
        <em class="fas fa-envelope"></em><span class="label label-danger">{{count($messages)}}</span>
    </a>


    <ul class="dropdown-menu dropdown-messages">



        @foreach($messages as $message)
        <li>
            <div class="dropdown-messages-box">
                <a href="profile.html" class="pull-left">
                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                </a>
                <div class="message-body">

                    <small class="pull-right">
                        {{$message->updated_at->diffForHumans()}}
                    </small>


                    <a href="#">

                        <strong>{{$message->name}}</strong>
                        <br>
                        <strong>
                            {{ str_limit($message->description, 75) }}
                        </strong>

                        </a>


                    <br /><small class="text-muted">

                        {{$message->created_at->format('Y-m-d H:i:s') }}

                    </small>
                </div>
            </div>
        </li>
        <li class="divider"></li>

        @endforeach


        <li>
            <div class="all-button"><a href="/admin/message">
                    <em class="fas fa-inbox"></em> <strong>
                        @lang('panel.All_Messages')
                    </strong>
                </a></div>
        </li>
    </ul>
</li>
