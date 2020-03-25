@php
use App\Modules\Authorization\acl;
@endphp
<div id="result"></div>

<div class="card-header d-flex justify-content-between">

    @if(isset($trash))
    <div class="form-group ">
        {!! Form::select('action_select',$actions['trash'],null,['id'=>'actionSelect','class' => 'form-control
        input-sm','placeholder'=>trans('crud::panel.nothing_selected')]) !!}
    </div>


    <a type="button" id="action" class="btn btn-sm btn-danger pull-right">
        {{trans('crud::panel.action')}} <i class="fas fa-hand-point-right"></i>
    </a><span class="pull-right">&nbsp;</span>


    <a type="button" href="{{route($name.'.index')}}" class="btn btn-sm btn-info">
        <i class="fas fa-hand-point-left"></i> {{trans('crud::panel.back')}}
    </a>
    @else


    <div class="d-flex">
        @if($crud->permission['create'] != 'deny')
        <a type="button" href="{{route($name.'.create')}}" class="btn btn-sm btn-success ">
            <i class="fas fa-plus"></i> <span class="hidden-xs">{{trans('crud::panel.new')}}
                {{trans("$name::panel.$name")}}</span>
        </a>
        @endif
    </div>


    <div class="d-flex">

        <div class="d-flex mr-5">
            <a type="button" id="action" class="btn btn-sm btn-danger mr-1">
                {{trans('crud::panel.action')}} <i class="fas fa-hand-point-right mr-0 ml-1"></i>
            </a>

            <div class="">
                {!! Form::select('action_select',$actions['index'],null,['id'=>'actionSelect','class' =>
                'form-control
                input-sm','placeholder'=>trans('crud::panel.nothing_selected')]) !!}
            </div>
        </div>

        {{-- @if(Acl::checkAccess($name, 'delete')) --}}
        <a type="button" href="{{route($name.'.trash')}}" class="btn btn-sm btn-warning pull-left">
            <i class="fas fa-trash"></i> <span class="hidden-xs">{{trans('crud::panel.show-trash')}}</span>
        </a>
    </div>

    {{-- @endif --}}
    @endif
</div>

