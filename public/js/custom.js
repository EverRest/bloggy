$(document).ready(function () {
    $(document).on('click', '#avatar', function () {
        $('#profile-form').find('.upload-sec').toggle('slow');
        return false;
    });

    $(document).on('mouseover', '#avatar', function () {
        $('.avatar-wrapper').append('<span class="upload-text" style="color:#fff;z-index: 10;width: 35px;height: 35px;position: absolute;top: 600%;right: 50%;"><i class="fa fa-5x fa-upload" aria-hidden="true"></i></span>');
    });

    $(document).on('mouseout', '#avatar', function () {
        $('.avatar-wrapper').find('.upload-text').remove();
    });
});
