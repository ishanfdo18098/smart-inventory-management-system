<div class="form-group row">
    <label for="permissions" class="col-md-2 col-form-label">@lang('Additional Permissions')</label>

    <div class="col-md-10">
        @include('backend.auth.role.includes.no-permissions-message')

        <div x-show="userType === '{{ $model::TYPE_ADMIN }}'">
            @include('backend.auth.includes.partials.permission-type', ['type' => $model::TYPE_ADMIN])
        </div>

        <div x-show="userType === '{{ $model::TYPE_USER}}'">
            @include('backend.auth.includes.partials.permission-type', ['type' => $model::TYPE_USER])
        </div>

        <div x-show="userType === '{{ $model::TYPE_LECTURER}}'">
            @include('backend.auth.includes.partials.permission-type', ['type' => $model::TYPE_LECTURER])
        </div>

        <div x-show="userType === '{{ $model::TYPE_TECH_OFFICER}}'">
            @include('backend.auth.includes.partials.permission-type', ['type' => $model::TYPE_TECH_OFFICER])
        </div>

        <div x-show="userType === '{{ $model::TYPE_MAINTAINER}}'">
            @include('backend.auth.includes.partials.permission-type', ['type' => $model::TYPE_MAINTAINER])
        </div>

    </div>
</div><!--form-group-->
