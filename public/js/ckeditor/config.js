CKEDITOR.editorConfig = function( config ) {
    // CKFinder integration
    // config.filebrowserBrowseUrl = '/js/ckfinder/ckfinder.html';
    // config.filebrowserImageBrowseUrl = '/js/ckfinder/ckfinder.html?type=Images';
    // config.filebrowserUploadUrl = '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    // config.filebrowserImageUploadUrl = '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    // config.filebrowserFlashUploadUrl = '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

    // Editor height
    config.height = 480;

    // Toolbar configuration
    config.toolbar = [
        ['Maximize', 'ShowBlocks', 'Source'],
        ['TextColor', 'BGColor'],
        ['Link', 'Unlink', 'Anchor'],
        ['Bold', 'Italic', 'Underline', '-', 'Strike', '-', 'Subscript', 'Superscript'],
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
        ['Image', 'Table', '-', 'HorizontalRule', 'SpecialChar', 'PageBreak'],
        ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
        ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'HiddenField'],
        ['Styles', 'Format', 'Font', 'FontSize'],
    ];

    // Language configuration
    config.language = 'vi';
    config.htmlEncodeOutput = false;
    config.entities = false;
    config.entities_latin = false;
    config.ForceSimpleAmpersand = true;

    // Skin configuration
    config.skin = 'kama';
};
