<table class="table table-hover table-light">
    <thead>
    <tr>
        <th> Image</th>
        <th style="width: 50%"> Information</th>
        <th class="data-middle"> Created At</th>
        <th class="data-middle"> Groups</th>
        <th class="data-middle"> Status</th>
        <th class="data-middle"> Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($articles as $i)
        <tr class="odd gradeX">
            <td> <img src="/img/120_75{{ $i->image }}" /> </td>
            <td>
                <p class="article-information">
                    <span class="font-blue-steel">{{ $i->name }}</span> <br />
                    <strong>{{ implode(', ', array_pluck($i->category, 'name')) }}</strong> <br />
                    <span>View: {{ $i->view }}</span>
                </p>
            </td>
            <td class="data-middle">{{ $i->created_at }}</td>
            <td class="data-middle">
                @foreach($groups as $j)
                    <p class="margin-bottom-10">
                        @if(in_array($j->id, array_pluck($i->groups, 'id')))
                            <a href="javascript:;" class="btn btn-xs blue">
                                <i class="fa fa-check"></i>
                                {{ $j->value }}
                            </a>
                            <button class="btn btn-xs red" id="btnRemoveGroup"
                                    data-post-id="{{ $i->id }}"
                                    data-group-name="{{ $j->value }}"
                                    data-group-id="{{ $j->id }}">
                                <i class="fa fa-times"></i>
                            </button>
                        @else
                            <button class="btn btn-xs grey-cascade" id="btnAddGroup"
                                    data-post-id="{{ $i->id }}"
                                    data-group-name="{{ $j->value }}"
                                    data-group-id="{{ $j->id }}"> Set to "{{ $j->value }}"
                            </button>
                        @endif
                    </p>
                @endforeach

            </td>
            <td class="data-middle">
                @if($i->status === 1)
                    <span class="badge badge-info badge-roundless"> Approved </span>
                @else
                    <span class="badge badge-default badge-roundless"> No </span>
                @endif
            </td>
            <td class="data-middle">
                <form action="{{ route('post.destroy', $i->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <a href="{{ route('post.edit', ['post' => $i->id]) }}"
                       class="btn red btn-sm">Update</a>
                    <button type="button" class="btn red btn-sm" v-on:click="confirmBeforeDelete">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>