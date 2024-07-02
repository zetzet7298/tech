<!--begin::Action--->
<td class="text-end">
    <a href="{{ route('post.delete', ['post' => $model->id]) }}" class="btn btn-sm btn-danger btn-active-light-primary"
        onclick="return confirm('Are you sure ?')">
        Delete
    </a>
    <a href="{{ route('post.edit', ['post' => $model->id]) }}"
        class="me-2 btn btn-sm btn-success btn-active-light-primary">
        Edit
    </a>
    @if (auth()->user()->username == 'admin' && $model->is_approve == false)
        <a href="{{ route('post.approve', ['post' => $model->id]) }}" class="btn btn-sm btn-light btn-primary"
            onclick="return confirm('Are you sure ?')">
            Approve
        </a>
    @endif
    @if (auth()->user()->username == 'admin' && $model->is_approve == true && $model->is_feature == false)
        <a href="{{ route('post.set_featured', ['post' => $model->id]) }}" class="btn btn-sm btn-light btn-primary"
            onclick="return confirm('Are you sure ?')">
            Set featured
        </a>
    @endif
</td>
<!--end::Action--->
