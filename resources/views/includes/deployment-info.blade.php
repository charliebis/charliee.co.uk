@if(DeploymentInfo::getStatus() === 'success')
    <p class="mt-6">{{ DeploymentInfo::getDeploymentInfoValueByKey('CI_COMMIT_SHA') }}</p>
    {{--<p class="mt-6">{{ print_r(DeploymentInfo::getDeploymentInfo(), true) }}</p>--}}
@endif
