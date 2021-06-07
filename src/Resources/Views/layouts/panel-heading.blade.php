
<div id="result"></div>

<div class="card-header d-flex justify-content-between">
    @if(isset($trash))
        <div class="form-group ">
            {!! Form::select('action_select',$actions['trash'],null,['id'=>'actionSelect','class' => 'form-control
            input-sm','placeholder'=>trans('core::panel.nothing_selected')]) !!}
        </div>


        <a type="button" id="action" class="btn btn-sm btn-danger pull-right">
            {{trans('core::panel.action')}} <i class="fas fa-hand-point-right"></i>
        </a><span class="pull-right">&nbsp;</span>

        <a type="button" href="{{route('admin.'.$name.'.index')}}" class="btn btn-sm btn-info">
            <i class="fas fa-hand-point-left"></i> {{trans('core::panel.back')}}
        </a>
    @else


        <div class="d-flex">
            {{--        @if($crud->permission['create'] != 'deny')--}}
            <a type="button" href="{{route('admin.'.$name.'.create')}}" class="btn btn-sm btn-success ">
                <i class="fas fa-plus"></i> <span class="hidden-xs">
                {{trans("first-panel::panel.new")}}</span>
            </a>
            {{--        @endif--}}
        </div>


        <div class="d-flex">

            <div class="d-flex mr-5">
                <a type="button" id="action" class="btn btn-sm btn-danger mr-1">
                    {{trans('core::panel.action')}} <i class="fas fa-hand-point-right mr-0 ml-1"></i>
                </a>

                {{--                <div class="">--}}
                {{--                    {!! Form::select('action_select',$actions['index'],null,['id'=>'actionSelect','class' =>--}}
                {{--                    'form-control--}}
                {{--                    input-sm','placeholder'=>trans('core::panel.select-action')]) !!}--}}
                {{--                </div>--}}
            </div>

            {{-- @if(Acl::checkAccess($name, 'delete')) --}}
            <a type="button" href="{{route('admin.'.$name.'.trash')}}" class="btn text-danger"
               title="{{trans('core::panel.show-trash')}}">
                <i class="fas fa-trash-restore h3"></i>
                {{-- <span class="hidden-xs">{{trans('core::panel.show-trash')}}</span> --}}
            </a>
        </div>

        {{-- @endif --}}
    @endif

</div>

