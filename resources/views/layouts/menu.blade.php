
<li class="{{ Request::is('positions*') ? 'active' : '' }}">
    <a href="{!! route('positions.index') !!}"><i class="fa fa-edit"></i><span>Positions</span></a>
</li>

<li class="{{ Request::is('leaveTypes*') ? 'active' : '' }}">
    <a href="{!! route('leaveTypes.index') !!}"><i class="fa fa-edit"></i><span>Leave Types</span></a>
</li>

