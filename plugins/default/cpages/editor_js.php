<script>
        tinymce.init({
            toolbar: "bold italic underline alignleft aligncenter alignright bullist numlist image media link unlink emoticons autoresize fullscreen insertdatetime print spellchecker preview",
            selector: '.ossn-pages-editor',
            plugins: "code image media link emoticons fullscreen insertdatetime print spellchecker preview",
            convert_urls: false,
            relative_urls: false,
			valid_children : '+body[style]',
			extended_valid_elements: 'script[language|type|src]',
            language: "<?php echo ossn_site_settings('language'); ?>",
			content_css: Ossn.site_url + 'css/view/bootstrap.min.css'
        });
</script>