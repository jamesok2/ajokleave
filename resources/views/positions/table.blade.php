<div class="table-responsive">
    <table class="table" id="positions-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($positions as $position)
            <tr>
                <td>{!! $position->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['positions.destroy', $position->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('positions.show', [$position->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('positions.edit', [$position->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
