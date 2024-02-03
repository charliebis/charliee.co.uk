@if(DeploymentInfo::getStatus() === 'success')
    @if(!empty(DeploymentInfo::getVersion()))
        <p class="mt-6">{{ DeploymentInfo::getVersion() }}</p>
    @elseif(!empty(DeploymentInfo::getDeploymentInfoValueByKey('CI_COMMIT_SHA')))
        <p class="mt-6">{{ DeploymentInfo::getDeploymentInfoValueByKey('CI_COMMIT_SHA') }}</p>
    @endif
@endif
