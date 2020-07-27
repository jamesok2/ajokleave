<div class="table-responsive">
    <table class="table" id="leaveTypes-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($leaveTypes as $leaveType)
            <tr>
                <td>{!! $leaveType->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['leaveTypes.destroy', $leaveType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('leaveTypes.show', [$leaveType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('leaveTypes.edit', [$leaveType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
