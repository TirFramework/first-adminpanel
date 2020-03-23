@php
use App\Modules\Authorization\acl;
@endphp
<div id="result"></div>
<div class="container-fluid">
<div class="panel-heading row">

    @if(isset($trash))
        <div class="form-group col-md-2 pull-right">
            {!! Form::select('action_select',$actions['trash'],null,['id'=>'actionSelect','class' => 'form-control input-sm','placeholder'=>trans('crud::panel.nothing_selected')]) !!}
        </div>


        <a type="button" id="action" class="btn btn-sm btn-danger pull-right">
            {{trans('crud::panel.action')}} <i class="glyphicon glyphicon-hand-right"></i>
        </a><span class="pull-right">&nbsp;</span>


        <a type="button" href="{{route($name.'.index')}}" class="btn btn-sm btn-info">
            <i class="glyphicon glyphicon-menu-left"></i> {{trans('crud::panel.back')}}
        </a>
    @else
        @if($crud->permission['create'] != 'deny')
        <a type="button" href="{{route($name.'.create')}}" class="btn btn-sm btn-success pull-right">
            <i class="glyphicon glyphicon-plus"></i> <span class="hidden-xs">{{trans('crud::panel.new')}} {{trans("$name::panel.$name")}}</span>
        </a>
        @endif 


        <div class=" col-md-2 pull-right">
            {!! Form::select('action_select',$actions['index'],null,['id'=>'actionSelect','class' => 'form-control input-sm','placeholder'=>trans('crud::panel.nothing_selected')]) !!}
        </div>

        <a type="button" id="action" class="btn btn-sm btn-danger pull-right">
            {{trans('crud::panel.action')}} <i class="glyphicon glyphicon-hand-right"></i>
        </a>





        {{-- @if(Acl::checkAccess($name, 'delete')) --}}
        <a type="button" href="{{route($name.'.trash')}}" class="btn btn-sm btn-warning pull-left">
            <i class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">{{trans('crud::panel.show-trash')}}</span>
        </a>

        {{-- @endif --}}
    @endif
</div>

</div>
