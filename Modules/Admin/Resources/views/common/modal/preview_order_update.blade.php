<style>
    html {
        height: 100%
    }

    p {
        color: grey
    }

    .swal2-popup.swal2-modal.swal2-show,
    #swal2-title {
        padding: 10px;
    }

    #heading {
        text-transform: uppercase;
        color: #673AB7;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;

        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #673AB7;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #673AB7;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #673AB7;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #673AB7;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #673AB7
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f155"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f073"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #673AB7
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #673AB7
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>

<div class="modal fade" id="myModal--preview">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card-body px-0 pt-0 pb-2">
                <div class="card-header pb-0">
                    <h6 class="text-center p-3">Cập nhật trạng thái đặt lịch</h6>
                </div>

            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 p-3  text-center mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                            <form id="msform" class="steps">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>ĐANG CHỜ XỬ LÝ </strong></li>
                                    <li id="personal"><strong>ĐẶT CỌC</strong></li>
                                    <li id="payment"><strong>ĐẶT LỊCH</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Thông tin chi tiết</h2>
                                            </div>

                                        </div> <label for="company">Tên khách hàng </label> <input disabled
                                            class="form-control" id="o_guest_id" name="o_guest_id"
                                            value="{{ $orders->user->name }}" type="text" autocomplete="off">
                                        <label class="fieldlabels">Email</label>
                                        <input disabled class="form-control" id="email" name="email"
                                            value="{{ $orders->user->email }}" type="text" autocomplete="off">

                                        <label class="fieldlabels">Phone</label>
                                        <input disabled class="form-control" id="phone" name="phone"
                                            value="{{ $orders->user->phone }}" type="text" autocomplete="off">
                                        <label class="fieldlabels">Sản phẩm</label> <input disabled class="form-control"
                                            id="pro_name" name="pro_name" value="{{ optional($orders->product)->pro_name }}"
                                            type="text" autocomplete="off">
                                    </div> <input type="button" name="next" class="next action-button"
                                        value="Next"   @if ($orders->o_status == 1  || $orders->o_status == 6) disabled @endif  />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                @if ($orders->o_deposit === null)
                                                    <p class="p-3 font-weight-bold prive">Hãy nhập số tiền đặt cọc của
                                                        khách
                                                        hàng
                                                        để có thể qua bước tiếp theo .</p>
                                                @else
                                                    <p class="p-3 font-weight-bold prive">Số tiền khách hàng đã đặt cọc
                                                        là : <i> {{ number_format($orders->o_deposit, 0, ',', '.') }}
                                                            VNĐ </i></p>
                                                @endif

                                            </div>
                                            {{-- <div class="col-5">
                                                <h2 class="steps">Step 2 - 4</h2>
                                            </div> --}}
                                        </div>
                                        <div class="p-3">
                                            {{-- <a href="{{ route('ajax.order.preview.print') }}"
                                                data-print-url={{ $link_print }} id="ihddc" type="button"
                                                class=" {{ $orders->o_deposit !== null ? '' : 'd-none' }} btn btn-outline-warning component--preview--print--info"
                                                id="ihddc">In hợp đồng đặt cọc</a> --}}
                                            <button data-id={{ $id }}
                                                type="button" class="btn btn-outline-danger" id="cancel_do_not_buy_anymore">Hủy không mua nữa</button>
                                            @if ($orders->o_deposit === null)
                                                <button data-id={{ $id }} data-deposit-url={{ $link_deposit }}
                                                    type="button" class="btn btn-outline-info" id="ddc">Nhập tiền
                                                    đặt cọc</button>
                                            @else
                                                <button data-id={{ $id }}
                                                    data-deposit-url={{ $link_deposit }} type="button"
                                                    class="btn btn-outline-info" id="ddc">Sửa số
                                                    tiền đã đặt
                                                    cọc</button>
                                            @endif

                                            <span class="error1" style="display: none;">
                                                <i class="error-log fa fa-exclamation-triangle"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next"
                                        @if ($orders->o_status == 1 || $orders->o_status == 0 || $orders->o_status == 6) disabled @endif />

                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                @if ($orders->o_pick_up_schedule === null)
                                                    <p class="p-3 font-weight-bold viewing_day"></p>
                                                @else
                                                    <p class="p-3 font-weight-bold viewing_day">Lịch hẹn lấy xe của
                                                        khách : <i>
                                                            {{ $orders->o_pick_up_schedule }}</i></p>
                                                @endif

                                            </div>
                                            {{-- <div class="col-5">
                                                <h2 class="steps">Step 3 - 4</h2>
                                            </div> --}}
                                        </div>
                                        <div class="p-3">
                                            <button
                                                data-cancel-appoinment={{ route('ajax.post.order.cancel_appointment') }}
                                                id="refuse_to_make_an_appointment" type="button"
                                                class="btn btn-warning component--preview--reject-date">Từ chối đặt
                                                lịch</button>


                                            @if ($orders->o_pick_up_schedule === null)
                                                <button
                                                    data-car-viewing-day-url={{ route('ajax.post.order.car_viewing_day') }}
                                                    type="button"
                                                    class="btn btn-info component--preview--success-date">Hẹn ngày lấy
                                                    xe</button>
                                            @else
                                                <button
                                                    data-car-viewing-day-url={{ route('ajax.post.order.car_viewing_day') }}
                                                    type="button"
                                                    class="btn btn-info component--preview--success-date">Sửa ngày lấy
                                                    xe</button>
                                            @endif


                                        </div>
                                    </div> <input type="button" name="next"
                                        class="next action-button o_pick_up_schedule" value="Submit"
                                        @if ($orders->o_pick_up_schedule === null) disabled @endif /> <input type="button"
                                        name="previous" class="previous action-button-previous" value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="col-12">
                                            <div>
                                                <p class="p-3 font-weight-bold ">Vui lòng nhập số tiền đã mua => đã mua
                                                    để hoàn tất quá trình .</p>
                                                @if ($orders->unified_price === null)
                                                    <p class="p-3 font-weight-bold unified_price">Số tiền khách hàng đã
                                                        thanh toán
                                                        là : N/A</p>
                                                @else
                                                    <p class="p-3 font-weight-bold unified_price">Số tiền khách hàng đã
                                                        thanh toán
                                                        là : <i>
                                                            {{ number_format($orders->unified_price, 0, ',', '.') }}
                                                            VNĐ </i></p>
                                                @endif

                                            </div>
                                            <div>
                                                @if ($orders->o_status === 5)
                                                    <p class="p-3 font-weight-bold o_status">Trạng thái : Đã mua</p>
                                                @else
                                                    <p class="p-3 font-weight-bold o_status">Trạng thái : chưa mua</p>
                                                @endif

                                            </div>
                                        </div>
                                        <button @if ($orders->o_status == 5) disabled @endif
                                            data-success={{ route('ajax.post.order.cancel_appointment') }}
                                            id="refuse_to_make_an_appointment" type="button"
                                            class="btn btn-outline-warning amount_paid_by_the_customer px-3  col-4  mx-3 btn-md">Số
                                            tiền khách đã thanh toán</button>

                                        <button @if ($orders->unified_price === null) disabled @endif
                                            data-success={{ route('ajax.post.order.cancel_appointment') }}
                                            id="refuse_to_make_an_appointment" type="button"
                                            class="btn btn-outline-warning component--success--payment px-6   mx-3 btn-md">Đã
                                            mua</button>
                                        <a target="_blank" href="{{ route('get.print') }}" id="ihddc"
                                            class="m-3 {{ $orders->o_deposit !== null ? '' : 'd-none' }} btn btn-outline-warning ">In
                                            hợp đồng mua bán xe</a>

                                        <br>

                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="box--modal"></div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function() {

        let current_fs, next_fs, previous_fs; //fieldsets
        let opacity;
        let current = 1;
        let steps = $("fieldset").length;

        let deposit_url = $("#ddc").attr("data-deposit-url");

        let carviewing_day_url = $(".component--preview--success-date").attr("data-car-viewing-day-url");

        let cancel_appointment_url = $(".component--preview--reject-date").attr("data-cancel-appoinment");


        let print_url = $("#ihddc").attr("data-print-url");

        let dataId = $("#ddc").attr("data-id");


        let form = $("#msform");

        setProgressBar(current);

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();


            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            let percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function() {
            return false;
        })



        $("#ddc").click(function() {
            Swal.fire({
                title: "Mời bạn nhập số tiền khách hàng đã đặt cọc :",
                input: "text",
                inputAttributes: {
                    autocapitalize: "off",
                },
                showCancelButton: true,
                confirmButtonText: "Update",
                showLoaderOnConfirm: true,
                preConfirm: (valueInput) => {
                    var gfg = $.isNumeric(valueInput);

                    if (!gfg) {
                        alert("Giá trị bạn nhập không hợp lệ ");
                        return false;
                    }
                    return $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            url: deposit_url,
                            type: "POST",
                            data: {
                                id: dataId,
                                deposit: valueInput,
                            },
                            dataType: 'json'
                        })
                        .done(function(res) {
                            if (res.code == 1) {
                                if (res.o_status == 2) {
                                    $(".next").removeAttr("disabled");
                                }
                                let $price = new Intl.NumberFormat().format((res
                                    .active)) + 'VND';

                                document.querySelector("#ddc").innerHTML =
                                    "SỬA TIỀN ĐẶT CỌC"


                                $("p.prive").replaceWith(
                                    `<p class="p-3 font-weight-bold prive">Số tiền khách hàng đã đặt cọc là : <i> ${ $price} </i></p>`
                                );


                                $("#ihddc").removeClass("d-none");
                                $("p.prive").replaceWith(
                                    `<p class="p-3 font-weight-bold prive">Số tiền khách hàng đã đặt cọc là : <i> ${ $price} </i></p>`
                                );
                                setTimeout(() => {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Cập nhật dữ liệu thành công',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })

                                }, 1000);
                            }

                        })
                        .fail(function(XMLHttpRequest, textStatus, thrownError) {

                        });
                },
                allowOutsideClick: () => !swal.isLoading(),
            }).then((result) => {

                // console.log(result);
                return true;
            });
        })


        $(".amount_paid_by_the_customer").click(function() {
            Swal.fire({
                title: "Mời bạn nhập số tiền khách hàng đã thanh toán khi đã trừ hết các chi phí + giảm giá :",
                input: "text",
                inputAttributes: {
                    autocapitalize: "off",
                },
                showCancelButton: true,
                confirmButtonText: "Update",
                showLoaderOnConfirm: true,
                preConfirm: (valueInput) => {
                    var gfg = $.isNumeric(valueInput);

                    if (!gfg) {
                        alert("Giá trị bạn nhập không hợp lệ ");
                        return false;
                    }
                    return $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            url: "{{ route('ajax.post.order.unified_price') }}",
                            type: "POST",
                            data: {
                                id: dataId,
                                unified_price: valueInput,
                            },
                            dataType: 'json'
                        })
                        .done(function(res) {
                            if (res.code == 1) {

                                $("p.unified_price").replaceWith(
                                    `<p class="p-3 font-weight-bold unified_price">Số tiền khách hàng đã thanh toán : <i> ${  new Intl.NumberFormat().format((res.unified_price)) + 'VND' } </i></p>`
                                );

                                $(".component--success--payment").removeAttr(
                                "disabled");

                                setTimeout(() => {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Cập nhật dữ liệu thành công',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })

                                }, 1000);
                            }

                        })
                        .fail(function(XMLHttpRequest, textStatus, thrownError) {

                        });
                },
                allowOutsideClick: () => !swal.isLoading(),
            }).then((result) => {

                // console.log(result);
                return true;
            });

        })


        $(".component--preview--success-date").click(function() {
            Swal.fire({
                title: "Mời bạn nhập ngày hẹn lấy xe (Y-m-d) :",
                html: '<input id="datepicker">',
                showConfirmButton: false,
                inputAttributes: {
                    autocapitalize: "off",
                },
                showCancelButton: true,
                confirmButtonText: "Update",
                showLoaderOnConfirm: true,
                willOpen: () => {
                    $('#datepicker').datepicker({
                        format: 'yyyy-m-d',
                    });
                },
                preConfirm: (valueInput) => {
                    var today = new Date();
                    var dd = String(today.getDate()).padStart(2, '0');
                    var mm = String(today.getMonth() + 1).padStart(2, '0');
                    var yyyy = today.getFullYear();
                    today = yyyy + '-' + mm + '-' + dd;
                    const x = new Date(valueInput);
                    const y = new Date(today);
                    if (valueInput == "" || (+x <= +y)) {
                        alert("Thông tin nhập không hợp lệ");
                        return false;
                    }
                    return $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            url: carviewing_day_url,
                            type: "POST",
                            data: {
                                id: dataId,
                                o_pick_up_schedule: valueInput,
                            },
                            dataType: 'json'
                        })
                        .done(function(res) {

                            if (res.code == 1) {
                                $("p.viewing_day").replaceWith(
                                    `<p class="p-3 font-weight-bold prive">Lịch hẹn xem xe của khách hàng  : <i> ${res.active} </i></p>`
                                );


                                if (res.active != null) {
                                    $(".o_pick_up_schedule").removeAttr("disabled");
                                }

                                setTimeout(() => {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Cập nhật dữ liệu thành công',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })

                                }, 1000);
                            }

                        })
                        .fail(function(XMLHttpRequest, textStatus, thrownError) {

                        });
                },
                allowOutsideClick: () => !swal.isLoading(),
            }).then((result) => {

                // console.log(result);
                return true;
            });
        })

        $(".component--preview--reject-date").click(function() {
            Swal.fire({
                title: "Mời bạn nhập lý do:",
                input: "text",
                inputAttributes: {
                    autocapitalize: "off",
                },
                showCancelButton: true,
                confirmButtonText: "Update",
                showLoaderOnConfirm: true,
                preConfirm: (cancel_appointment) => {
                    return $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            url: cancel_appointment_url,
                            type: "POST",
                            data: {
                                id: dataId,
                                cancel_appointment: cancel_appointment,
                            },
                            dataType: 'json'
                        })
                        .done(function(res) {
                            if (res.code == 1) {
                                setTimeout(() => {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Cập nhật dữ liệu thành công',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })

                                }, 1000);
                            }

                        })
                        .fail(function(XMLHttpRequest, textStatus, thrownError) {

                        });
                },
                allowOutsideClick: () => !swal.isLoading(),
            }).then((result) => {

                // console.log(result);
                return true;
            });

        })

        $(".component--success--payment").click(function() {
            $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    url: "{{ route('ajax.post.order.success_payment') }}",
                    type: "POST",
                    data: {
                        id: dataId
                    },
                    dataType: 'json'
                })
                .done(function(res) {
                    if (res.code == 1) {
                        $("p.o_status").replaceWith(
                            `  <p class="p-3 font-weight-bold o_status">Trạng thái : đã mua</p>`
                        );

                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Hoàn tất quá trình cập nhật',
                            showConfirmButton: false,
                            timer: 1500
                        })


                    }

                })
                .fail(function(XMLHttpRequest, textStatus, thrownError) {

                });
        })


        $("#cancel_do_not_buy_anymore").click(function() {
            Swal.fire({
                title: "Mời bạn nhập lý do khách hàng hủy không muốn mua:",
                input: "text",
                inputAttributes: {
                    autocapitalize: "off",
                },
                showCancelButton: true,
                confirmButtonText: "Update",
                showLoaderOnConfirm: true,
                preConfirm: (cancel_appointment) => {
                    return $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            url: "{{route('ajax.post.order.cancel_appointment')}}",
                            type: "POST",
                            data: {
                                id: dataId,
                                cancel_appointment: cancel_appointment,
                            },
                            dataType: 'json'
                        })
                        .done(function(res) {
                            if (res.code == 1) {
                                $(".next").attr('disabled', 'disabled');
                                setTimeout(() => {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Cập nhật dữ liệu thành công',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })

                                }, 1000);
                            }

                        })
                        .fail(function(XMLHttpRequest, textStatus, thrownError) {

                        });
                },
                allowOutsideClick: () => !swal.isLoading(),
            }).then((result) => {

                // console.log(result);
                return true;
            });

        })
    });
</script>
