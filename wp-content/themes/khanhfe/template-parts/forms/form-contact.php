<div class="form-section6 page-login">
    <form action="" method="POST" class="cartpopup" id="form-2">
        <h3 class="sub-head s3 color-primary-8 title">Đăng ký mua hàng</h3>
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="fullname" class="form-label body b3"><?php _e('Họ tên*', 'corex') ?></label>
                <input id="fullname" name="fullname" type="text" class="form-control">
                <span class="form-message"></span>
            </div>
            <div class="form-group col-xl-6">
                <label for="phone" class="form-label body b3"><?php _e('Số điện thoại*', 'corex') ?></label>
                <input id="phone" name="phone" type="text" inputmode="numeric" class="form-control">
                <span class="form-message"></span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="email" class="form-label body b3"><?php _e('Email*', 'corex') ?></label>
                <input id="email" name="email" type="text" class="form-control">
                <span class="form-message"></span>
            </div>
            <div class="form-group col-xl-6">
                <label for="message" class="form-label body b3"><?php _e('Nội dung', 'corex') ?></label>
                <textarea name="message" id="message" class="form-control"></textarea>
                <span class="form-message"></span>
            </div>
        </div>
        <div class="form-response"></div>
        <div class="ajaxcart__footer ajaxcart__footer--fixed">
            <div class="cart__btn-proceed-checkout-dt">
                <button class="form-submit primary-button radius-12px heading h5">
                    <span><?php _e('Đăng ký', 'corex') ?></span>
                </button>
            </div>
        </div>
    </form>
</div>
<script>
    jQuery(document).ready(function($) {
        Validator({
            form: '#form-2',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            classError: 'invalid',
            rules: [
                Validator.isRequired('#fullname', ' '),
                Validator.isMinLength('#fullname', 2, ' '),
                Validator.isText('#fullname', ' '),

                Validator.isRequired('#email', ' '),
                Validator.isEmail('#email', ' '),

                Validator.isRequired('#phone', ' '),
                Validator.isPhone('#phone', ' '),

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
                    beforeSend: () => {
                        $('#form-2 .form-submit').attr('disable', true)
                            .css({
                                'opacity': .5,
                                'pointer-events': 'none'
                            });
                    },
                    complete: () => {},
                    success: (res) => {
                        $('#form-2 .form-response').html(res.data).addClass('success');
                        $('#form-2').trigger('reset');
                        $('#form-2 .form-submit').attr('disable', false)
                            .css({
                                'opacity': 1,
                                'pointer-events': 'auto'
                            });
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        textErrorDefault = "<?php _e('Có lỗi xảy ra, vui lòng thử lại', 'corex'); ?>";
                        $('#form-2 #form-receive-consultation .form-message-status').html(errorThrown).addClass('error');
                    }
                });
            }
        });
    });
</script>