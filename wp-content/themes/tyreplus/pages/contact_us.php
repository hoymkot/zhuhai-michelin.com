

<main class=" container flex-fill d-flex flex-column mb-0  ">

   <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!--
            <ol class="carousel-indicators ">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
-->
            <div class="carousel-inner " >
                <div class="carousel-item active">
                    <img class="d-block w-100 "  src="/assets/images/hero-tires.jpg" alt="First slide">
<!--
                    <div class="carousel-caption">
                        <h1 class="font-weight-bold d-none d-md-block">我们懂轮胎</h1>
                    </div>
-->
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100"  src="/assets/images/hero-oil-landing.jpeg" alt="Second slide">
<!--
                    <div class="carousel-caption">
                        <h1 class="font-weight-bold d-none d-md-block">换油保养</h1>
                        <h3 class="font-weight-bold  d-none d-md-block">爱车历久常新</h3>
                    </div>
-->
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"  src="/assets/images/hero-batteries-landing.jpeg" alt="Third slide">
<!--
                    <div class="carousel-caption">
                        <h1 class="font-weight-bold d-none d-md-block">汽车电池</h1>
                        <h3 class="font-weight-bold  d-none d-md-block">保持充电,迅速启动</h3>
                    </div>
-->
                </div>
            </div>
<!--
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
-->
        </div>
    </div>
<div class="row my-2 ">
    <nav class="d-flex flex-fill nav nav-pills nav-fill " id="nav-tab" role="tablist" style=" font-size: 1rem;font-weight: 300;">
        <a class="nav-item nav-link active"  id="nav-jidai-tab" data-toggle="tab" href="#nav-jidai" role="tab" aria-controls="nav-jidai" aria-selected="true">吉大店</a>
        <a class="nav-item nav-link" id="nav-jinji-tab" data-toggle="tab" href="#nav-jinji" role="tab" aria-controls="nav-jinji" aria-selected="true">前山店</a>
    </nav>
<div class="w-100"></div>
    <div class="tab-content w-100" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-jidai" role="tabpanel" aria-labelledby="nav-jidai-tab">
        <div class="card flex-md-row ">
            <div class="card-body d-flex flex-column align-items-start">      
              <p class="card-text w-100 mb-auto"> <span class="mx-auto"> 广隆汽车服务中心(吉大店)<br />  珠海市吉大石花东路 203 号 <br /> 电话: 0756-322-8782 <br />营业时间: 8:30 am - 6:30 pm</span>
                  </p>

          </div>            </div>

        
        </div>
        <div class="tab-pane fade" id="nav-jinji" role="tabpanel" aria-labelledby="nav-jinji-tab">
              <div class="card flex-md-row ">
            <div class="card-body d-flex flex-column align-items-start">                            
              <p class="card-text mb-auto">   广隆汽车服务中心(前山店)<br /> 珠海市前山金鸡路 555 号 <br /> 电话: 0756-865-2111  <br />营业时间: 8:30 am - 6:00 pm
            </div>
<!--            <img class="card-img-right flex-auto d-none d-md--block" src="assets/images/jinji_store_front_thumbnail.jpg" alt="金鸡店面">-->
          </div>
        </div>
    </div>
    </div>
    <div class="row flex-fill border-0 shadow-sm "  id="map" style=""></div>
</main>


<script type="text/javascript">
    jQuery(document).ready(function () {    
//        $('.carousel').carousel('dispose');
    });
    
    jQuery(document).ready(function () {
        var map = new BMap.Map("map");
        var jidai_pt = new BMap.Point(113.580707, 22.246079);
        var jinji_pt = new BMap.Point(113.514771, 22.244649);
        var zoom_level = 15;
        var point = jidai_pt;
        map.centerAndZoom(point, zoom_level);
        map.enableScrollWheelZoom(true); //开启鼠标滚轮缩放
        map.addControl(new BMap.NavigationControl(opts));
        var opts = {
            anchor: BMAP_ANCHOR_BOTTOM_RIGHT
        }
        map.addControl(new BMap.GeolocationControl(opts));
        var jidai_marker = new BMap.Marker(jidai_pt); // 创建标注    
        map.addOverlay(jidai_marker); // 将标注添加到地图中 
var jinji_marker = new BMap.Marker(jinji_pt); // 创建标注    
        map.addOverlay(jinji_marker); // 将标注添加到地图中        
        
        jQuery("#nav-jidai-tab").on('shown.bs.tab',function(){
            map.centerAndZoom(jidai_pt,zoom_level)});
        jQuery("#nav-jinji-tab").on('shown.bs.tab',function(){map.centerAndZoom(jinji_pt,zoom_level)});
        
//        marker.addEventListener("click", function () {
//            var opts = {
//                width: 50, // 信息窗口宽度    
//                height: 10, // 信息窗口高度    
//                title: "广隆吉大店" // 信息窗口标题   
//            }
//            var infoWindow = new BMap.InfoWindow("珠海市吉大石花东路203-205号 <br/>电话:0756-322-8782", opts); // 创建信息窗口对象    
//            map.openInfoWindow(infoWindow, map.getCenter());
//        });
//        
        

        
        
        
//        marker.enableDragging();    
//        marker.addEventListener("dragend", function(e){    
//            alert("当前位置：" + e.point.lng + ", " + e.point.lat);    
//        })   

    });
</script>


<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=hPpPbwu2bUGBma7LKRrEueRH2qD6tmh8"></script>