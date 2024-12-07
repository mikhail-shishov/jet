jQuery(document).ready(function ($) {
    $('.select-gallery').click(function (e) {
        e.preventDefault();
        const key = $(this).data('gallery-key');
        const inputField = $('#gallery_' + key);
        const previewDiv = $('#preview_' + key);

        const frame = wp.media({
            title: 'Выберите изображения',
            button: { text: 'Добавить в галерею' },
            multiple: true
        });

        frame.on('select', function () {
            const attachments = frame.state().get('selection').map(attachment => attachment.toJSON());
            const ids = attachments.map(attachment => attachment.id).join(',');

            inputField.val(ids);
            previewDiv.empty();
            attachments.forEach(attachment => {
                previewDiv.append('<img src="' + attachment.sizes.thumbnail.url + '" />');
            });
        });

        frame.open();
    });
});
