<div class="form-section6">
    <form action="" method="POST" class="form d-flex align-items-center flex-wrap" id="form-1">
        <h3 class="sub-head s3 color-primary-8 title">
            <?php _e('Đăng ký nhận bản tin', 'corex') ?>
        </h3>
        <div class="form-group email radius-12px ">
            <label for="email" class="form-label"></label>
            <input id="email" name="email" type="text" placeholder="<?php _e('Nhập email đăng ký', "corex") ?>" class="form-control body b4">
            <span class="form-message"></span>
        </div>

        <button class="form-submit primary-button radius-12px heading h5">
            <span><?php _e('Đăng ký', 'corex') ?></span>
        </button>
    </form>
</div>
<script>
    jQuery(document).ready(function($) {
        Validator({
            form: '#form-1',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            classError: 'invalid',
            rules: [

                Validator.isRequired('#email'),
                Validator.isEmail('#email'),

            ],
            //nếu không truyền vào callback submit sẽ nhận trường hợp submit mặc định của form
            onSubmit: (data) => {
                const token = document.querySelector('#contact_nonce').value
                jQuery.ajax({
                    type: 'POST',
                    url: obj.AJAX_URL,
                    data: {
                        action: 'formCommonAjax',
                        data: data,
                        nonce: token,
                        postTitle: 'fullname',
                        postType: 'register'
                    },
                    // dataType: 'JSON',
                    beforeSend: () => {},
                    complete: () => {},
                    success: (res) => {
                        console.log(res)
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        console.log('The following error occured: ' + jqXHR, textStatus, errorThrown);
                    }
                });
            }
        });
    });
</script>