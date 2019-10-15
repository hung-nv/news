<table class="table table-striped table-bordered table-hover table-checkable order-column"
       id="datatable-partner">
    <thead>
    <tr>
        <th> ID</th>
        <th> Image</th>
        <th> Name</th>
        <th> Actions</th>
    </tr>
    </thead>
    <tbody>

    @if(!empty($partners))
        @foreach($partners as $i)

            <tr class="odd gradeX">
                <td>{{ $i->id }}</td>
                <td><img src="{{ $i->image }}" width="150px" /> </td>
                <td>{{ $i->name }}</td>
                <td>
                    <form action="{{ route('partner.destroy', $i->id) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <a href="{{ route('partner.edit', ['partner' => $i->id]) }}"
                           class="btn red btn-sm">Update</a>
                        <button type="button" class="btn red btn-sm"
                                v-on:click="confirmBeforeDelete">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>