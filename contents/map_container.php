<div id="map" style="width:100%;height:300px;"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f1fb4666af920776417f459d7c5fdd8c"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div
mapOption = {
center: new kakao.maps.LatLng(37.486807, 126.801229), // 지도의 중심좌표
level: 4 // 지도의 확대 레벨
};

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

/* =============================
   ==       marker 찍기       ==
   ============================= */


// 1 김수환관
var markerPosition1  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker1 = new kakao.maps.Marker({
    position: markerPosition1
});

var markerPosition16  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker16 = new kakao.maps.Marker({
    position: markerPosition16
});


// 2 니콜스관
var markerPosition2  = new kakao.maps.LatLng(37.485896, 126.802303);
var marker2 = new kakao.maps.Marker({
    position: markerPosition2
});

var markerPosition17  = new kakao.maps.LatLng(37.485896, 126.802303);
var marker17 = new kakao.maps.Marker({
    position: markerPosition17
});

// 3 마리아관
var markerPosition3  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker3 = new kakao.maps.Marker({
    position: markerPosition3
});

var markerPosition18  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker18 = new kakao.maps.Marker({
    position: markerPosition18
});

// 4 비르투스관
var markerPosition4  = new kakao.maps.LatLng(37.485609, 126.801996);
var marker4 = new kakao.maps.Marker({
    position: markerPosition4
});

var markerPosition19  = new kakao.maps.LatLng(37.485609, 126.801996);
var marker19 = new kakao.maps.Marker({
    position: markerPosition19
});

// 5 밤비노관
var markerPosition5  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker5 = new kakao.maps.Marker({
    position: markerPosition5
});

var markerPosition20  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker20 = new kakao.maps.Marker({
    position: markerPosition20
});

// 6 기슨관
var markerPosition6  = new kakao.maps.LatLng(37.485732, 126.802861);
var marker6 = new kakao.maps.Marker({
    position: markerPosition6
});

var markerPosition21  = new kakao.maps.LatLng(37.485732, 126.802861);
var marker21 = new kakao.maps.Marker({
    position: markerPosition21
});

// 7 학생회관
var markerPosition7  = new kakao.maps.LatLng(37.486354, 126.801181);
var marker7 = new kakao.maps.Marker({
    position: markerPosition7
});

var markerPosition22  = new kakao.maps.LatLng(37.486354, 126.801181);
var marker22 = new kakao.maps.Marker({
    position: markerPosition22
});

// 8 다솔관
var markerPosition8  = new kakao.maps.LatLng(37.485528, 126.801212);
var marker8 = new kakao.maps.Marker({
    position: markerPosition8
});

var markerPosition23  = new kakao.maps.LatLng(37.485528, 126.801212);
var marker23 = new kakao.maps.Marker({
    position: markerPosition23
});

// 9 미카엘관
var markerPosition9  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker9 = new kakao.maps.Marker({
    position: markerPosition9
});

var markerPosition24  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker24 = new kakao.maps.Marker({
    position: markerPosition24
});

// 10 미카엘관
var markerPosition10  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker10 = new kakao.maps.Marker({
    position: markerPosition10
});

var markerPosition25  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker25 = new kakao.maps.Marker({
    position: markerPosition25
});

// 11 중앙도서관
var markerPosition11  = new kakao.maps.LatLng(37.486834, 126.799860);
var marker11 = new kakao.maps.Marker({
    position: markerPosition11
});

var markerPosition26  = new kakao.maps.LatLng(37.486834, 126.799860);
var marker26 = new kakao.maps.Marker({
    position: markerPosition26
});

// 12 성심관
var markerPosition12  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker12 = new kakao.maps.Marker({
    position: markerPosition12
});

var markerPosition27  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker27 = new kakao.maps.Marker({
    position: markerPosition27
});

// 13 정진석추기경약학관
var markerPosition13  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker13 = new kakao.maps.Marker({
    position: markerPosition13
});

var markerPosition28  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker28 = new kakao.maps.Marker({
    position: markerPosition28
});

// 14 콘서트홀
var markerPosition14  = new kakao.maps.LatLng(37.488052, 126.799458);
var marker14 = new kakao.maps.Marker({
    position: markerPosition14
});

var markerPosition29  = new kakao.maps.LatLng(37.488052, 126.799458);
var marker29 = new kakao.maps.Marker({
    position: markerPosition29
});

// 15 예수성심성당
var markerPosition15  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker15 = new kakao.maps.Marker({
    position: markerPosition15
});

var markerPosition30  = new kakao.maps.LatLng(37.486369, 126.802826);
var marker30 = new kakao.maps.Marker({
    position: markerPosition30
});


function marker_eraseall_1(a){
  if(a != 1) marker1.setMap(null);
  if(a != 2) marker2.setMap(null);
  if(a != 3) marker3.setMap(null);
  if(a != 4) marker4.setMap(null);
  if(a != 5) marker5.setMap(null);
  if(a != 6) marker6.setMap(null);
  if(a != 7) marker7.setMap(null);
  if(a != 8) marker8.setMap(null);
  if(a != 9) marker9.setMap(null);
  if(a != 10) marker10.setMap(null);
  if(a != 11) marker11.setMap(null);
  if(a != 12) marker12.setMap(null);
  if(a != 13) marker13.setMap(null);
  if(a != 14) marker14.setMap(null);
  if(a != 15) marker15.setMap(null);
}

function marker_eraseall_2(a){
  if(a != 16) marker16.setMap(null);
  if(a != 17) marker17.setMap(null);
  if(a != 18) marker18.setMap(null);
  if(a != 19) marker19.setMap(null);
  if(a != 20) marker20.setMap(null);
  if(a != 21) marker21.setMap(null);
  if(a != 22) marker22.setMap(null);
  if(a != 23) marker23.setMap(null);
  if(a != 24) marker24.setMap(null);
  if(a != 25) marker25.setMap(null);
  if(a != 26) marker26.setMap(null);
  if(a != 27) marker27.setMap(null);
  if(a != 28) marker28.setMap(null);
  if(a != 29) marker29.setMap(null);
  if(a != 30) marker30.setMap(null);
}


function marker_1(){ marker_eraseall_1(1); marker1.setMap(map); }
function marker_2(){ marker_eraseall_1(2); marker2.setMap(map); }
function marker_3(){ marker_eraseall_1(3);  marker3.setMap(map); }
function marker_4(){ marker_eraseall_1(4);  marker4.setMap(map); }
function marker_5(){ marker_eraseall_1(5);  marker5.setMap(map); }
function marker_6(){ marker_eraseall_1(6);  marker6.setMap(map); }
function marker_7(){ marker_eraseall_1(7);  marker7.setMap(map); }
function marker_8(){ marker_eraseall_1(8);  marker8.setMap(map); }
function marker_9(){ marker_eraseall_1(9);  marker9.setMap(map); }
function marker_10(){ marker_eraseall_1(10);  marker10.setMap(map); }
function marker_11(){ marker_eraseall_1(11);  marker11.setMap(map); }
function marker_12(){ marker_eraseall_1(12);  marker12.setMap(map); }
function marker_13(){ marker_eraseall_1(13);  marker13.setMap(map); }
function marker_14(){ marker_eraseall_1(14);  marker14.setMap(map); }
function marker_15(){ marker_eraseall_1(15);  marker15.setMap(map); }

function marker_16(){ marker_eraseall_2(16); marker16.setMap(map); }
function marker_17(){ marker_eraseall_2(17); marker17.setMap(map); }
function marker_18(){ marker_eraseall_2(18);  marker18.setMap(map); }
function marker_19(){ marker_eraseall_2(19);  marker19.setMap(map); }
function marker_20(){ marker_eraseall_2(20);  marker20.setMap(map); }
function marker_21(){ marker_eraseall_2(21);  marker21.setMap(map); }
function marker_22(){ marker_eraseall_2(22);  marker22.setMap(map); }
function marker_23(){ marker_eraseall_2(23);  marker23.setMap(map); }
function marker_24(){ marker_eraseall_2(24);  marker24.setMap(map); }
function marker_25(){ marker_eraseall_2(25);  marker25.setMap(map); }
function marker_26(){ marker_eraseall_2(26);  marker26.setMap(map); }
function marker_27(){ marker_eraseall_2(27);  marker27.setMap(map); }
function marker_28(){ marker_eraseall_2(28);  marker28.setMap(map); }
function marker_29(){ marker_eraseall_2(29);  marker29.setMap(map); }
function marker_30(){ marker_eraseall_2(30);  marker30.setMap(map); }

// 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
var mapTypeControl = new kakao.maps.MapTypeControl();

// 지도 타입 컨트롤을 지도에 표시합니다
map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);


</script>
