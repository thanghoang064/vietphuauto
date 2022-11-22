<style>
   
    .content-item-item a{
        display: block ;
    }
    .content-item a img{
        width: 100%;
        max-width: 100%;
        height: 100%;
        object-fit: cover;

    }
</style>


<div class="home-bot">
    @if ($slides)

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <?php $count  = count($slides) ?>
                <ol class="carousel-indicators">
                    @for( $i = 0 ; $i< $count ; $i++)
                    <li data-target="#myCarousel" data-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"></li>
                    @endfor
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($slides as  $key => $slide)
                    <div  class="content-item item {{ $key == 1 ? 'active' : '' }}">
                        <a target="_blank"  href="{{ $slide->sl_link }}"><img  class="lazy" data-src="{{ pare_url_file($slide->sl_avatar) }}" src="{{ asset('images/loading.gif') }}" alt="Los Angeles" style="width:100%; max-width:100%; height:600px" ></a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="about-inner">
                {{--@foreach($slides as  $key => $slide)--}}
                <h3 class="about-title"></h3>
                <div class="about-content"></div>
                {{--@endforeach--}}
            </div>
    @endif
</div>