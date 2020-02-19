<!--

FIRST PAGE (./index.php)
FILE CODE : 00

-->

<?
  session_start();
 include "./template/main_template1.php" ?>

  <!--Main Layout-->
  <main style="padding-top:3.5rem!important">
    <div class="container-fluid mt-2" style="text-align:center">
      <form method="get" action='find_path.php'>
      <h5><span class="badge badge-pill badge-primary">출발지점</span></h5>
      <div class="row">
        <div class="col">
          <!-- Material input -->
          <select class="browser-default custom-select" id='start1' name='start1' onchange="selectNum1(this.value)">
            <option value="" disabled selected>무슨 건물인가요?</option>
            <option value="1">김수환관(K)</option>
            <option value="2">니콜스관(N)</option>
            <option value="3">마리아관(M)</option>
            <option value="4">비르투스관(V)</option>
            <option value="5">밤비노관(BA)</option>
            <option value="6">기슨관(G)</option>
            <option value="7">학생회관(SB)</option>
            <option value="8">다솔관(D)</option>
            <option value="9">미카엘관 교수연구동(T)</option>
            <option value="10">미카엘관 대학본관(HB)</option>
            <option value="11">중앙도서관(L)</option>
            <option value="12">성심관(SH)</option>
            <option value="13">정진석추기경약학관(NP)</option>
            <option value="14">콘서트홀(A)</option>
            <option value="15">예수성심성당(C)</option>
          </select>
        </div>
        <div class="col">
          <select class="browser-default custom-select" id='start2' name='start2'>
            <option value="" disabled selected>몇 층인가요?</option>
          </select>
        </div>
      </div>
      <br>

      <h5><span class="badge badge-pill badge-primary">도착지점</span></h5>

  <div class="row">
    <div class="col">
      <!-- Material input -->
      <select class="browser-default custom-select" id='finish1' name='finish1' onchange="selectNum2(this.value)">
        <option value="" disabled selected>무슨 건물인가요?</option>
        <option value="16">김수환관(K)</option>
        <option value="17">니콜스관(N)</option>
        <option value="18">마리아관(M)</option>
        <option value="19">비르투스관(V)</option>
        <option value="20">밤비노관(BA)</option>
        <option value="21">기슨관(G)</option>
        <option value="22">학생회관(SB)</option>
        <option value="23">다솔관(D)</option>
        <option value="24">미카엘관 교수연구동(T)</option>
        <option value="25">미카엘관 대학본관(HB)</option>
        <option value="26">중앙도서관(L)</option>
        <option value="27">성심관(SH)</option>
        <option value="28">정진석추기경약학관(NP)</option>
        <option value="29">콘서트홀(A)</option>
        <option value="30">예수성심성당(C)</option>
      </select>
    </div>
    <div class="col">
      <select class="browser-default custom-select" id='finish2' name='finish2'>
        <option value="" disabled selected>몇 층인가요?</option>
      </select>
    </div>
  </div>

  <br>
<div style="text-align:center">
  <button type="submit" class="btn btn-primary btn-rounded" style="margin-left:auto;margin-right:auto">길 찾기</button>
</div>
</form>
      <br>

      <script>


      function selectNum1(e){

        var floor_k = ["지하2층", "지하1층", "1층", "2층", "3층", "4층(기숙사)", "16층"];
        var floor_n = ["1층", "2층", "3층", "4층", "5층"];
        var floor_m = ["1층", "2층", "3층", "4층"];
        var floor_v = ["1층", "2층", "3층", "성심연수원"];
        var floor_ba = ["1층", "2층", "3층"];
        var floor_g = ["지하1층", "1층", "2층"];
        var floor_sb = ["1층", "2층", "3층"];
        var floor_d = ["1층", "2층", "3층", "4층", "5층", "6층", "7층"];
        var floor_t = ["지하1층", "지하2층", "1층", "2층", "3층", "4층", "5층", "6층", "7층", "8층", "9층"];
        var floor_hb = ["지하2층", "지하1층", "1층", "2층", "3층", "4층"];
        var floor_l = ["1층", "2층", "3층", "4층"];
        var floor_sh = ["1층", "2층", "3층", "4층", "5층"];
        var floor_np = ["1층", "2층", "3층", "4층", "5층"];
        var floor_a = ["지하1층", "1층", "2층", "3층"];
        var floor_c = ["지층"];

        var target = document.getElementById("start2");

        if(e == "1") var d = floor_k;
        else if(e == "2") var d = floor_n;
        else if(e == "3") var d = floor_m;
        else if(e == "4") var d = floor_v;
        else if(e == "5") var d = floor_ba;
        else if(e == "6") var d = floor_g;
        else if(e == "7") var d = floor_sb;
        else if(e == "8") var d = floor_d;
        else if(e == "9") var d = floor_t;
        else if(e == "10") var d = floor_hb;
        else if(e == "11") var d = floor_l;
        else if(e == "12") var d = floor_sh;
        else if(e == "13") var d = floor_np;
        else if(e == "14") var d = floor_a;
        else if(e == "15") var d = floor_c;


        target.options.length = 0;

        for (x in d) {
          var opt = document.createElement("option");
          opt.value = d[x];
          opt.innerHTML = d[x];
          target.appendChild(opt);
        }



          if(e == '1'){ marker_1(); }
          if(e == '2'){ marker_2(); }
          if(e == '3'){ marker_3(); }
          if(e == '4'){ marker_4(); }
          if(e == '5'){ marker_5(); }
          if(e == '6'){ marker_6(); }
          if(e == '7'){ marker_7(); }
          if(e == '8'){ marker_8(); }
          if(e == '9'){ marker_9(); }
          if(e == '10'){ marker_10(); }
          if(e == '11'){ marker_11(); }
          if(e == '12'){ marker_12(); }
          if(e == '13'){ marker_13(); }
          if(e == '14'){ marker_14(); }
          if(e == '15'){ marker_15(); }
      }


      function selectNum2(e){

        var floor_k = ["지하2층", "지하1층", "1층", "2층", "3층", "4층(기숙사)", "16층"];
        var floor_n = ["1층", "2층", "3층", "4층", "5층"];
        var floor_m = ["1층", "2층", "3층", "4층"];
        var floor_v = ["1층", "2층", "3층", "성심연수원"];
        var floor_ba = ["1층", "2층", "3층"];
        var floor_g = ["지하1층", "1층", "2층"];
        var floor_sb = ["1층", "2층", "3층"];
        var floor_d = ["1층", "2층", "3층", "4층", "5층", "6층", "7층"];
        var floor_t = ["지하1층", "지하2층", "1층", "2층", "3층", "4층", "5층", "6층", "7층", "8층", "9층"];
        var floor_hb = ["지하2층", "지하1층", "1층", "2층", "3층", "4층"];
        var floor_l = ["1층", "2층", "3층", "4층"];
        var floor_sh = ["1층", "2층", "3층", "4층", "5층"];
        var floor_np = ["1층", "2층", "3층", "4층", "5층"];
        var floor_a = ["지하1층", "1층", "2층", "3층"];
        var floor_c = ["지층"];

        var target = document.getElementById("finish2");

        if(e == "16") var d = floor_k;
        else if(e == "17") var d = floor_n;
        else if(e == "18") var d = floor_m;
        else if(e == "19") var d = floor_v;
        else if(e == "20") var d = floor_ba;
        else if(e == "21") var d = floor_g;
        else if(e == "22") var d = floor_sb;
        else if(e == "23") var d = floor_d;
        else if(e == "24") var d = floor_t;
        else if(e == "25") var d = floor_hb;
        else if(e == "26") var d = floor_l;
        else if(e == "27") var d = floor_sh;
        else if(e == "28") var d = floor_np;
        else if(e == "29") var d = floor_a;
        else if(e == "30") var d = floor_c;


        target.options.length = 0;

        for (x in d) {
          var opt = document.createElement("option");
          opt.value = d[x];
          opt.innerHTML = d[x];
          target.appendChild(opt);
        }



          var numSelect = document.getElementById("finish1");
          // option value 가져오기
          var value = numSelect.options[document.getElementById("finish1").selectedIndex].value

          if(value == '16'){ marker_16(); }
          if(value == '17'){ marker_17(); }
          if(value == '18'){ marker_18(); }
          if(value == '19'){ marker_19(); }
          if(value == '20'){ marker_20(); }
          if(value == '21'){ marker_21(); }
          if(value == '22'){ marker_22(); }
          if(value == '23'){ marker_23(); }
          if(value == '24'){ marker_24(); }
          if(value == '25'){ marker_25(); }
          if(value == '26'){ marker_26(); }
          if(value == '27'){ marker_27(); }
          if(value == '28'){ marker_28(); }
          if(value == '29'){ marker_29(); }
          if(value == '30'){ marker_30(); }
      }


      </script>
  <!--    <button onclick="marker_m();">마리아관</button>
      <button onclick="marker_erase();">마커 지우기</button> -->





      <ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
            aria-selected="true">지도</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just"
            aria-selected="false">편의시설</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just" role="tab" aria-controls="contact-just"
            aria-selected="false">기타정보</a>
        </li>
      </ul>
      <div class="tab-content card pt-5" id="myTabContentJust">
        <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

          <? include "./contents/map_container.php" ?>

        </div>
        <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal1" style="width:100%">
            엘리베이터
          </button>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal2" style="width:100%">
            식당/편의점/카페/자판기
          </button>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal3" style="width:100%">
            장애인 화장실
          </button>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal4" style="width:100%">
            기타 편의시설
          </button>

          <!-- Modal -->
          <div class="modal fade" id="basicExampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">엘리베이터</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  K(김수환관) : 지하2층 ~ 지상16층<br>
                  M(마리아관) : 지상1층 ~ 지상4층<br>
                  D(다솔관) : 지상1층 ~ 지상7층<br>
                  T(미카엘관) : 지하1층 ~ 지상9층<br>
                  HB(미카엘관) : 지하2층 ~ 지상4층<br>
                  NP(약학관) : 지상1층 ~ 지상5층<br>
                  SH(성심관) : 지상1층 ~ 지상5층<br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">식당/편의점/카페/자판기</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  K(김수환관) 1층 : 공차, 카페베네, 기숙사식당, GS25, 맘스터치, 자판기<br>
                  K(김수환관) 2층 : 자판기<br>
                  K(김수환관) 3층 : 자판기<br>
                  K(김수환관) 4층 : 자판기(기숙사)<br>
                  N(니콜스관) 1층 : 자판기<br>
                  N(니콜스관) 2층 : 자판기<br>
                  N(니콜스관) 3층 : 자판기<br>
                  N(니콜스관) 4층 : 자판기, 카페하랑(진입불가)<br>
                  SB(학생회관) 1층 : 교직원식당, CU, 자판기<br>
                  SB(학생회관) 2층 : 학생식당, 셰프더테라스<br>
                  SB(학생회관) 3층 : 자판기(진입불가)<br>
                  D(다솔관) 2층 : 자판기<br>
                  D(다솔관) 4층 : 자판기<br>
                  D(다솔관) 5층 : 자판기<br>
                  D(다솔관) 6층 : 자판기(진입불가)<br>
                  NP(약학관) 1층 : 자판기<br>
                  A(콘서트홀) 1층 : 자판기<br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="basicExampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">장애인 화장실</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  K(김수환관) : 1층, 2층, 3층<br>
                  N(니콜스관) : 1층, 2층, 3층, 4층<br>
                  M(마리아관) : 4층<br>
                  V(비르투스관) : 없음<br>
                  BA(밤비노관) : 없음<br>
                  G(기슨관) : 없음<br>
                  SB(학생회관) : 1층<br>
                  D(다솔관) : 2층, 3층, 4층, 5층, 6층, 7층<br>
                  T(미카엘관) : 없음<br>
                  HB(미카엘관) : 없음<br>
                  NP(약학관) : 없음<br>
                  SH(성심관) : 2층<br>
                  A(콘서트홀) : 1층<br>
                  C(성당) : 1층<br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="basicExampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">기타 편의시설</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  K(김수환관) 1층 : 우리은행, 우리은행ATM, 세탁소, 복사실, 열람실<br>
                  N(니콜스관) 1층 : 우리은행ATM, 국민은행ATM<br>
                  HB(미카엘관) 1층 : 우리은행ATM, 국민은행ATM<br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>



        </div>
        <div class="tab-pane fade" id="contact-just" role="tabpanel" aria-labelledby="contact-tab-just">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal5" style="width:100%">
            건물간 연결통로
          </button>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal6" style="width:100%">
            진입불가구역 (휠체어 기준)
          </button>

          <!-- Modal -->
          <div class="modal fade" id="basicExampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">건물간 연결통로</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  N(니콜스관) 2층 - M(마리아관) 2층<br>
                  N(니콜스관) 3층 - M(마리아관) 3층<br>
                  N(니콜스관) 3층 - V(비르투스관) 2층<br>
                  N(니콜스관) 4층 - M(마리아관) 4층<br>
                  N(니콜스관) 4층 - V(비르투스관) 3층<br>
                  M(마리아관) 1층 - G(기슨관) 1층 [계단 이용]<br>
                  V(비르투스관) 3층 - BA(밤비노관) 3층<br>
                  T(미카엘관) 3층 - HB(미카엘관) 3층<br>
                  T(미카엘관) 4층 - HB(미카엘관) 4<br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="basicExampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">진입불가구역 (휠체어 기준)</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  N301 (계단5개)<br>
                  N401 (카페하랑, 계단4개)<br>
                  N501 ~ N525 (5층 전체)<br>
                  M216 (단차)<br>
                  M217 (단차)<br>
                  M218 (단차)<br>
                  V323 (단차)<br>
                  V324 (단차)<br>
                  BA202 ~ BA204 (2층 전체)<br>
                  G001 (지하1층 전체)<br>
                  기슨관 커뮤니티 라운지 (2층 전체)<br>
                  SB 지하1층 전체 (계단)<br>
                  SB 3층 전체 (계단)<br>
                  D 6층 자판기 (단차)<br>
                  A 지하1층 전체<br>
                  A113 ~ A119 (계단 5개)<br>
                  A201 ~ A203 (계단)<br>
                  A309 ~ A315 (계단 9개)<br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

<!-- 로드맵

      <div id="roadview" style="width:100%;height:300px;"></div>

      <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f1fb4666af920776417f459d7c5fdd8c"></script>
      <script>
      var roadviewContainer = document.getElementById('roadview'); //로드뷰를 표시할 div
      var roadview = new kakao.maps.Roadview(roadviewContainer); //로드뷰 객체
      var roadviewClient = new kakao.maps.RoadviewClient(); //좌표로부터 로드뷰 파노ID를 가져올 로드뷰 helper객체

      var position = new kakao.maps.LatLng(37.486028, 126.804377);

      // 특정 위치의 좌표와 가까운 로드뷰의 panoId를 추출하여 로드뷰를 띄운다.
      roadviewClient.getNearestPanoId(position, 50, function(panoId) {
          roadview.setPanoId(panoId, position); //panoId와 중심좌표를 통해 로드뷰 실행
      });
      </script>


    -->

  </main>
  <!--Main Layout-->

  <!-- /Start your project here-->

  <? include "./template/main_template2.php"; ?>
  <script>
  // Material Select Initialization
    $(document).ready(function() {
    $('.mdb-select').materialSelect();
    });
  </script>
</body>

<!-- Footer -->
<footer class="page-footer font-small indigo" style="margin-top:30px">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">팀 소개</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">가톨릭대학교 2019 2학기 키스톤디자인:창의설계 29분반<BR>팀 CO.S.PY</p>
        <p style="line-height: 1.7rem">박상도 장민지 조현우 호윤서</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">



      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://catolling.com"> Team CO.S.PY</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
