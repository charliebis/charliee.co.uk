@if(DeploymentInfo::getStatus() === 'success')
    <p class="mt-6">{{ DeploymentInfo::getVersion() }}</p>
@endif
