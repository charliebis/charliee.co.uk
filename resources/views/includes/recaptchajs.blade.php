<script src="https://www.google.com/recaptcha/api.js?render={{ config('recaptcha.site_key')  }}"></script>
<script>
    function onContactFormSubmit(token) {
        document.getElementById('contact-form').submit();
    }
</script>
