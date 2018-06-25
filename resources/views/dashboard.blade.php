
@extends('layouts.admin')

@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Clicks Internos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Mas Informaci&oacute;n <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>89<sup style="font-size: 20px">%</sup></h3>

                <p>CTB </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Mas Informaci&oacute;n <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>65</h3>

                <p>Registros de Usuario</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Mas Informaci&oacute;n <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>$456.480</h3>

                <p>Solicitudes de Giro</p>
              </div>
              <div class="icon">
                <i class="ion ion-card"></i>
              </div>
              <a href="#" class="small-box-footer">Mas Informaci&oacute;n <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header d-flex p-0 ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title p-3">
                  <i class="fa fa-pie-chart mr-1"></i>
                  Visitor to Buyer Ratio
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Pie</a>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="668.55" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px; top: -0.899994px;"><desc>Created with Raphaël 2.1.0</desc><defs></defs><text style="text-anchor: end; font: 12px sans-serif;" x="52.70000076293945" y="260.4833335876465" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="3.908334732055664">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M65.20000076293945,260.4833335876465H643.55" stroke-width="0.5"></path><text style="text-anchor: end; font: 12px sans-serif;" x="52.70000076293945" y="201.61250019073486" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="3.9083356857299805">7,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M65.20000076293945,201.61250019073486H643.55" stroke-width="0.5"></path><text style="text-anchor: end; font: 12px sans-serif;" x="52.70000076293945" y="142.74166679382324" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="3.908336639404297">15,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M65.20000076293945,142.74166679382324H643.55" stroke-width="0.5"></path><text style="text-anchor: end; font: 12px sans-serif;" x="52.70000076293945" y="83.87083339691162" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="3.908329963684082">22,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M65.20000076293945,83.87083339691162H643.55" stroke-width="0.5"></path><text style="text-anchor: end; font: 12px sans-serif;" x="52.70000076293945" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="3.9083337783813477">30,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M65.20000076293945,25H643.55" stroke-width="0.5"></path><text style="text-anchor: middle; font: 12px sans-serif;" x="537.4132740730854" y="272.9833335876465" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.2583)"><tspan dy="3.9083194732666016">2018</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="280.2256877166666" y="272.9833335876465" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.2583)"><tspan dy="3.9083194732666016">2017</tspan></text><path style="fill-opacity: 1;" fill="#579de7" stroke="none" d="M65.20000076293945,218.6300957646688C81.36938197483975,219.1403096541087,113.70814439864036,222.19114409533896,129.87752561054066,220.67095132242838C146.0395870482391,219.15144673094508,178.363709923636,208.73297597931492,194.52577136133445,206.4713063070933C210.5048384439865,204.23524430779085,242.46297260929057,204.4879263156693,258.4420396919426,202.68002463633218C274.42842654879655,200.87129478398572,306.4012002625043,194.5403562214916,322.3875871193582,192.00478018035886C338.55696833125853,189.44017968820583,370.8957307550591,182.17234560954978,387.0651119669594,182.27931850318907C403.2271734046579,182.3862429708919,435.55129628005477,203.79078627459245,451.71335771775324,192.86036962572734C467.69242480040526,182.05371222333943,499.65055896570937,101.77403535691722,515.6296260483614,95.33102229817709C531.4403383243707,88.95589256529632,563.0617628763895,134.89843326547796,578.8724751523988,141.58779845924377C595.0418563642991,148.4289131412015,627.3806187880997,147.48665596561432,643.55,149.45294180107118L643.55,260.4833335876465L65.20000076293945,260.4833335876465Z" fill-opacity="1"></path><path style="" fill="none" stroke="#007cff" d="M65.20000076293945,218.6300957646688C81.36938197483975,219.1403096541087,113.70814439864036,222.19114409533896,129.87752561054066,220.67095132242838C146.0395870482391,219.15144673094508,178.363709923636,208.73297597931492,194.52577136133445,206.4713063070933C210.5048384439865,204.23524430779085,242.46297260929057,204.4879263156693,258.4420396919426,202.68002463633218C274.42842654879655,200.87129478398572,306.4012002625043,194.5403562214916,322.3875871193582,192.00478018035886C338.55696833125853,189.44017968820583,370.8957307550591,182.17234560954978,387.0651119669594,182.27931850318907C403.2271734046579,182.3862429708919,435.55129628005477,203.79078627459245,451.71335771775324,192.86036962572734C467.69242480040526,182.05371222333943,499.65055896570937,101.77403535691722,515.6296260483614,95.33102229817709C531.4403383243707,88.95589256529632,563.0617628763895,134.89843326547796,578.8724751523988,141.58779845924377C595.0418563642991,148.4289131412015,627.3806187880997,147.48665596561432,643.55,149.45294180107118" stroke-width="3"></path><circle cx="65.20000076293945" cy="218.6300957646688" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="129.87752561054066" cy="220.67095132242838" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="194.52577136133445" cy="206.4713063070933" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="258.4420396919426" cy="202.68002463633218" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="322.3875871193582" cy="192.00478018035886" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="387.0651119669594" cy="182.27931850318907" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="451.71335771775324" cy="192.86036962572734" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="515.6296260483614" cy="95.33102229817709" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="578.8724751523988" cy="141.58779845924377" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="643.55" cy="149.45294180107118" r="4" fill="#007cff" stroke="#ffffff" style="" stroke-width="1"></circle><path style="fill-opacity: 1;" fill="#5d646a" stroke="none" d="M65.20000076293945,239.55671467615764C81.36938197483975,239.33693023147583,113.70814439864036,240.88180734801605,129.87752561054066,238.6775768974304C146.0395870482391,236.4743442877006,178.363709923636,222.90277487199322,194.52577136133445,221.92686243489584C210.5048384439865,220.96199973100835,242.46297260929057,232.77633058600424,258.4420396919426,230.914476333491C274.42842654879655,229.05176919309295,306.4012002625043,208.88517754284888,322.3875871193582,207.02861686325073C338.55696833125853,205.15080434437147,370.8957307550591,214.02399217864385,387.0651119669594,215.97698353958128C403.2271734046579,217.92909079397234,435.55129628005477,231.92758022853488,451.71335771775324,222.6490113245646C467.69242480040526,213.47549868082953,499.65055896570937,147.95572985574532,515.6296260483614,142.16865734875995C531.4403383243707,136.44255720442263,563.0617628763895,170.15338029116674,578.8724751523988,176.59632071927388C595.0418563642991,183.18542044412973,627.3806187880997,189.87169365027745,643.55,194.29681796061197L643.55,260.4833335876465L65.20000076293945,260.4833335876465Z" fill-opacity="1"></path><path style="" fill="none" stroke="#495057" d="M65.20000076293945,239.55671467615764C81.36938197483975,239.33693023147583,113.70814439864036,240.88180734801605,129.87752561054066,238.6775768974304C146.0395870482391,236.4743442877006,178.363709923636,222.90277487199322,194.52577136133445,221.92686243489584C210.5048384439865,220.96199973100835,242.46297260929057,232.77633058600424,258.4420396919426,230.914476333491C274.42842654879655,229.05176919309295,306.4012002625043,208.88517754284888,322.3875871193582,207.02861686325073C338.55696833125853,205.15080434437147,370.8957307550591,214.02399217864385,387.0651119669594,215.97698353958128C403.2271734046579,217.92909079397234,435.55129628005477,231.92758022853488,451.71335771775324,222.6490113245646C467.69242480040526,213.47549868082953,499.65055896570937,147.95572985574532,515.6296260483614,142.16865734875995C531.4403383243707,136.44255720442263,563.0617628763895,170.15338029116674,578.8724751523988,176.59632071927388C595.0418563642991,183.18542044412973,627.3806187880997,189.87169365027745,643.55,194.29681796061197" stroke-width="3"></path><circle cx="65.20000076293945" cy="239.55671467615764" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="129.87752561054066" cy="238.6775768974304" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="194.52577136133445" cy="221.92686243489584" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="258.4420396919426" cy="230.914476333491" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="322.3875871193582" cy="207.02861686325073" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="387.0651119669594" cy="215.97698353958128" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="451.71335771775324" cy="222.6490113245646" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="515.6296260483614" cy="142.16865734875995" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="578.8724751523988" cy="176.59632071927388" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="643.55" cy="194.29681796061197" r="4" fill="#495057" stroke="#ffffff" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="512" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc>Created with Raphaël 2.1.0</desc><defs></defs><path style="opacity: 0;" fill="none" stroke="#007bff" d="M256,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,344.2277551949771,180.44625304313007" stroke-width="2" opacity="0"></path><path style="" fill="#007bff" stroke="#ffffff" d="M256,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,347.06364732624417,181.4248826052307L383.6151459070204,194.03833029452744A135,135,0,0,1,256,285Z" stroke-width="3"></path><path style="opacity: 1;" fill="none" stroke="#dc3545" d="M344.2277551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,172.28484627831412,108.73398312817662" stroke-width="2" opacity="1"></path><path style="" fill="#dc3545" stroke="#ffffff" d="M347.06364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,169.59400205154566,107.40757544301087L130.42726941747117,88.10097469226493A140,140,0,0,1,388.3416327924656,195.6693795646951Z" stroke-width="3"></path><path style="opacity: 0;" fill="none" stroke="#28a745" d="M172.28484627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,255.97067846904883,243.333328727518" stroke-width="2" opacity="0"></path><path style="" fill="#28a745" stroke="#ffffff" d="M169.59400205154566,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,255.96973599126827,246.3333285794739L255.9575884998742,284.9999933380171A135,135,0,0,1,134.9120097954186,90.31165416754118Z" stroke-width="3"></path><text style="text-anchor: middle; font: 800 15px &quot;Arial&quot;;" x="256" y="140" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="15px" font-weight="800" transform="matrix(1,0,0,1,0,0)"><tspan>Interno</tspan></text><text style="text-anchor: middle; font: 14px &quot;Arial&quot;;" x="256" y="160" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="14px" transform="matrix(1,0,0,1,0,0)"><tspan>30</tspan></text></svg></div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable ui-sortable">

            
            <!-- solid sales graph -->
            <div class="card bg-info-gradient">
              <div class="card-header no-border ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="fa fa-th mr-1"></i>
                  Tr&aacute;fico
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-widget="remove">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart" id="line-chart" style="height: 250px;"><svg height="250" version="1.1" width="461.817" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.0499878px; top: -0.783325px;"><desc>Created with Raphaël 2.1.0</desc><defs></defs><text style="text-anchor: end; font: 10px Open Sans;" x="43.53333282470703" y="210.48333358764648" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.908332347869873">0</tspan></text><path style="" fill="none" stroke="#efefef" d="M56.03333282470703,210.48333358764648H436.817" stroke-width="0.4"></path><text style="text-anchor: end; font: 10px Open Sans;" x="43.53333282470703" y="164.11250019073486" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.9083333015441895">5,000</tspan></text><path style="" fill="none" stroke="#efefef" d="M56.03333282470703,164.11250019073486H436.817" stroke-width="0.4"></path><text style="text-anchor: end; font: 10px Open Sans;" x="43.53333282470703" y="117.74166679382323" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.9083342552184916">10,000</tspan></text><path style="" fill="none" stroke="#efefef" d="M56.03333282470703,117.74166679382323H436.817" stroke-width="0.4"></path><text style="text-anchor: end; font: 10px Open Sans;" x="43.53333282470703" y="71.37083339691162" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.9083313941955566">15,000</tspan></text><path style="" fill="none" stroke="#efefef" d="M56.03333282470703,71.37083339691162H436.817" stroke-width="0.4"></path><text style="text-anchor: end; font: 10px Open Sans;" x="43.53333282470703" y="24.99999999999997" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="3.908333301544161">20,000</tspan></text><path style="" fill="none" stroke="#efefef" d="M56.03333282470703,24.99999999999997H436.817" stroke-width="0.4"></path><text style="text-anchor: middle; font: 10px Open Sans;" x="366.9369416032786" y="222.98333358764648" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="10px" font-family="Open Sans" font-weight="normal" transform="matrix(1,0,0,1,0,7.2583)"><tspan dy="3.908332347869873">2018</tspan></text><text style="text-anchor: middle; font: 10px Open Sans;" x="197.60551182209232" y="222.98333358764648" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="10px" font-family="Open Sans" font-weight="normal" transform="matrix(1,0,0,1,0,7.2583)"><tspan dy="3.908332347869873">2017</tspan></text><path style="" fill="none" stroke="#efefef" d="M56.03333282470703,185.7584052204132C66.67919827286961,185.4987285533905,87.97092916919479,187.3240103250992,98.61679461735737,184.71969855232237C109.25784075114777,182.11656573462602,130.53993301872856,166.0816733779789,141.18097915251894,164.9286268585205C151.70154242700465,163.78863566650162,172.74266897597607,177.74733990496787,183.26323225046178,175.54754770641327C193.78861483931968,173.34674781560096,214.83938001703547,149.51979631079837,225.36476260589336,147.32625850105285C236.01062805405593,145.10761151308222,257.3023589503811,155.5913372654036,267.9482243985437,157.8988085155487C278.58927053233407,160.2052351883963,299.8713627999149,176.74453616114027,310.5124089337053,165.78185019302367C321.032972208191,154.9432888395823,342.0740987571624,77.5312808276948,352.5946620316481,70.69381922931669C363.0043810755735,63.928396850710776,383.8238191634242,103.75794072235009,394.2335382073496,111.37031428508757C404.8794036555122,119.15537595179458,426.17113455183744,127.05524868159293,436.817,132.2835601470947" stroke-width="2"></path><circle cx="56.03333282470703" cy="185.7584052204132" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="98.61679461735737" cy="184.71969855232237" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="141.18097915251894" cy="164.9286268585205" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="183.26323225046178" cy="175.54754770641327" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="225.36476260589336" cy="147.32625850105285" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="267.9482243985437" cy="157.8988085155487" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="310.5124089337053" cy="165.78185019302367" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="352.5946620316481" cy="70.69381922931669" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="394.2335382073496" cy="111.37031428508757" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle><circle cx="436.817" cy="132.2835601470947" r="4" fill="#efefef" stroke="#efefef" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="53" height="53" style="width: 60px; height: 60px;"></canvas><input class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: transparent none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px;" type="text"></div>

                    <div class="text-white">Interno</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="53" height="53" style="width: 60px; height: 60px;"></canvas><input class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: transparent none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px;" type="text"></div>

                    <div class="text-white">Externo</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="53" height="53" style="width: 60px; height: 60px;"></canvas><input class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: transparent none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px;" type="text"></div>

                    <div class="text-white">RRSS</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
