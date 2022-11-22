import SweetAlert2 from  './../plugin/runSweetAlert2';
var Hot = {
    configSelect : {
        'iconLoading' : 'fa fa-spinner fa-spin',
    },

    init : function () {
        let __this = this;

        $(".component--hot").click(function (event) {
            event.preventDefault();
            let $this = $(this);
            let $url  = $this.attr('href');

            $this.removeClass('btn-outline-success').html('<i class="'+__this.configSelect.iconLoading+'"></i> Đang xử lý');

            $.ajax({
                url : $url,
                type : 'POST',
                dataType: 'json',
                async: true,
            }).done(function (responsive) {

                if (responsive)
                {
                    SweetAlert2.messagesSwal('success',' Cập nhật thành công');

                    let $text = 'Không'
                    if (responsive.hot)
                    {
                        $text = 'Hiển thị';
                        $this.removeClass('btn-outline-secondary').addClass('btn-outline-danger').text($text);
                    }else
                    {
                        $this.removeClass('btn-outline-danger').addClass('btn-outline-secondary').text($text);
                    }
                }

            }).fail(function (XMLHttpRequest, textStatus, thrownError) {
                SweetAlert2.messagesSwal('warning','Có lỗi xẩy ra và nguyên nhân chưa xác định');
            });
        })
    }
}

$(function () {
    Hot.init();
})