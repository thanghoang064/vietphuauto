<section class="contact__info_hide">
    <div class="hotline">
        <div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
            <div class="phonering-alo-ph-circle"></div>
            <div class="phonering-alo-ph-circle-fill"></div>
            <div class="phonering-alo-ph-img-circle">
                <a class="pps-btn-img " title="Liên hệ" href="tel:{{ isset($information->if_phone) ? $information->if_phone : "" }}"> <i class="fa fa-phone"></i> </a>
            </div>
        </div>
    </div>


</section>
<footer id="footer" style="margin-top: 20px;background-color: #4267b2">
    <div class="footer-bottom" style="background-color: #4267b2">
        <div class="container">
            <div class="row">

                @if (!$mobiledetect->isMobile())

                    <?php
                    $avatar_logo = isset($information->if_logo) ? pare_url_file($information->if_logo) : asset('images/logo2.png');
                    ?>
                <div class="col-sm-2 col-xs-12 footer--item">
                    <div class="logo-footer">
                        <a href="/" title="logo ">
                            <img  data-src="{{ $avatar_logo }}" alt="logo-footer" class="lazy" src="{{ asset('images/loading.gif') }}" style="width: 150px;height: 100px;">
                        </a>
                    </div>
                </div>
                @endif

                <div class="col-md-3 col-xs-12 footer--item">
                    <h4 class="footer--title">Danh mục sản phẩm</h4>
                    <ul style="margin: 0;">
                        @if ($menusRan ?? [])
                            @foreach($menusRan ?? [] as $ran)
                                <li><a href="{{ route('get.menu.action',[str_slug_fix($ran->m_title),$ran->id]) }}" style="font-size: 14px;color: white">{{ $ran->m_title }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-12 footer--item">

                    <h4 class="footer--title">Thông tin website</h4>
                    <p><span><a style="color: white;" title="Công ty" href="/" target="_blank"></a>{{ isset($information->if_company) ? $information->if_company : '' }}</span></p>
                    <p>Hotline:&nbsp;<span >{{ isset($information) ? $information->if_phone : '' }}</span></p>
                    <p>Email: <span >{{ isset($information) ? $information->if_email : '' }}</span></p>
                    <p>Địa chỉ: {{ isset($information) ? $information->if_address : '' }}</p>
                </div>
                <div class="col-sm-3 col-xs-12 footer--item">
                    <h4 class="footer--title">Mạng xã hội</h4>

                    <a href="{{ isset($information) ? $information->if_youtobe : '' }}" target="_blank" style="color:#FFF"><i class="fa fa-youtube" style="font-size: 30px"></i></a>
                    <a href="{{ isset($information) ? $information->if_facebook : '' }}" target="_blank" style="color:#FFF; margin-left: 10px"><i class="fa fa-facebook" style="font-size: 30px"></i></a>
                    <a href="{{ isset($information) ? $information->if_google : '' }}" target="_blank" style="color:#FFF; margin-left: 10px"><i class="fa fa-google-plus" aria-hidden="true" style="font-size: 30px"></i></a>
                </div>


            </div>
        </div>
    </div>
</footer>

