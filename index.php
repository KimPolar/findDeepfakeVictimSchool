<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>딥페이크 이슈 학교 확인</title>
    
</head>
<body >
<div id="map" style="width:100vv;height:100vh;"></div>

<script type="text/javascript" src="kakao.js"></script>
<script>
    var ht = null;
    (function(id, scriptSrc, callback) {
        var d = document,
            tagName = 'script',
            $script = d.createElement(tagName),
            $element = d.getElementsByTagName(tagName)[0];

        $script.id = id;
        $script.async = true;
        $script.src = scriptSrc;

        if (callback) { $script.addEventListener('load', function (e) { callback(null, e); }, false); }
        $element.parentNode.insertBefore($script, $element);
    })('happytalkSDK', 'https://chat-static.happytalkio.com/sdk/happytalk.chat.v2.min.js', function() {
        ht = new Happytalk({
          siteId: '3000000792',
          siteName: 'School',
          categoryId: '181486',
          divisionId: '181487'
      });
    });
</script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(37.566535, 126.977969), // 지도의 중심좌표
        level: 13 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// 마커가 표시될 위치입니다 
var markerPosition  = new kakao.maps.LatLng(33.450701, 126.570667); 

// 마커를 표시할 위치와 title 객체 배열입니다 
var positions = [
    {
        title: '이의고등학교', 
        latlng: new kakao.maps.LatLng(37.29235868 , 127.0711898)
    },
	{
		title: '영덕고등학교',
		latlng: new kakao.maps.LatLng(37.25242219, 127.0684717)
	},
	{
		title: '창현고등학교',
		latlng: new kakao.maps.LatLng(37.28490893, 127.0418566)
	},
	{
		title: '수원공업고등학교',
		latlng: new kakao.maps.LatLng(37.27423255, 127.0245216)
	},
	{
		title: '망포고등학교',
		latlng: new kakao.maps.LatLng(37.23382741, 127.0464357)
	},
	{
		title: '매탄고등학교',
		latlng: new kakao.maps.LatLng(37.26262774, 127.0447779)
	},
	{
		title: '청명고등학교',
		latlng: new kakao.maps.LatLng(37.26089042, 127.0773249)
	},
	{
		title: '경기대명고등학교',
		latlng: new kakao.maps.LatLng(37.29601975, 126.9399849)
	},
	{
		title: '곡정고등학교',
		latlng: new kakao.maps.LatLng(37.24384332, 127.0201503)
	},
	{
		title: '태장고등학교',
		latlng: new kakao.maps.LatLng(37.24936938, 127.0594286)
	},
	{
		title: '광교고등학교',
		latlng: new kakao.maps.LatLng(37.28972795, 127.0485481)
	},
	{
		title: '수원여자고등학교',
		latlng: new kakao.maps.LatLng(37.27682819, 127.004355)
	},
	{
		title: '영생고등학교',
		latlng: new kakao.maps.LatLng(37.30473311, 126.9742361)
	},
	{
		title: '천천고등학교',
		latlng: new kakao.maps.LatLng(37.29945329, 126.982976)
	},
	{
		title: '숙지고등학교',
		latlng: new kakao.maps.LatLng(37.28296783, 126.9932658)
	},
	{
		title: '삼일고등학교',
		latlng: new kakao.maps.LatLng(37.28638393, 127.0196791)
	},
	{
		title: '동우여자고등학교',
		latlng: new kakao.maps.LatLng(37.31981901, 126.9824035)
	},
	{
		title: '수원칠보고등학교',
		latlng: new kakao.maps.LatLng(37.27513582, 126.944923)
	},
	{
		title: '매원고등학교',
		latlng: new kakao.maps.LatLng(37.26565476, 127.0545337)
	},
	{
		title: '영복여자고등학교',
		latlng: new kakao.maps.LatLng(37.28562481, 127.0016721)
	},
	{
		title: '매향여자정보고등학교',
		latlng: new kakao.maps.LatLng(37.28457355, 127.0186217)
	},
	{
		title: '한봄고등학교',
		latlng: new kakao.maps.LatLng(37.25945904, 126.9693453)
	},
	{
		title: '삼일공업고등학교',
		latlng: new kakao.maps.LatLng(37.28554473, 127.0205554)
	},
	{
		title: '효원고등학교',
		latlng: new kakao.maps.LatLng(37.25941827, 127.0390512)
	},
	{
		title: '화홍고등학교',
		latlng: new kakao.maps.LatLng(37.2517435, 127.0402944)
	},
	{
		title: '수원농생명과학고등학교',
		latlng: new kakao.maps.LatLng(37.29515359, 127.0194502)
	},
	{
		title: '수원외국어고등학교',
		latlng: new kakao.maps.LatLng(37.29599326, 127.0351158)
	},
	{
		title: '서연고등학교',
		latlng: new kakao.maps.LatLng(37.16081906, 127.1114322)
	},
	{
		title: '한백고등학교',
		latlng: new kakao.maps.LatLng(37.20763155, 127.1133605)
	},
	{
		title: '나루고등학교',
		latlng: new kakao.maps.LatLng(37.18656401, 127.0719398)
	},
	{
		title: '동탄고등학교',
		latlng: new kakao.maps.LatLng(37.20414063, 127.0603836)
	},
	{
		title: '병점고등학교',
		latlng: new kakao.maps.LatLng(37.20585454, 127.0437159)
	},
	{
		title: '능동고등학교',
		latlng: new kakao.maps.LatLng(37.21390891, 127.0575058)
	},
	{
		title: '창덕여자고등학교',
		latlng: new kakao.maps.LatLng(37.51624351, 127.1402736)
	},
	{
		title: '잠실여자고등학교',
		latlng: new kakao.maps.LatLng(37.50179413, 127.1142413)
	},
	{
		title: '덕수고등학교(일반고)',
		latlng: new kakao.maps.LatLng(37.48630831, 127.146936)
	},
	{
		title: '서울디지텍고등학교',
		latlng: new kakao.maps.LatLng(37.53896942, 126.9906121)
	},
	{
		title: '서울인공지능고등학교',
		latlng: new kakao.maps.LatLng(37.49175309, 127.1423309)
	},
	{
		title: '방산고등학교',
		latlng: new kakao.maps.LatLng(37.50831315, 127.1204696)
	},
	{
		title: '가락고등학교',
		latlng: new kakao.maps.LatLng(37.50107579, 127.1164258)
	},
	{
		title: '오금고등학교',
		latlng: new kakao.maps.LatLng(37.50453217, 127.128969)
	},
	{
		title: '서울컨벤션고등학교',
		latlng: new kakao.maps.LatLng(37.5592845, 127.1580303)
	},
	{
		title: '미림여자정보과학고등학교',
		latlng: new kakao.maps.LatLng(37.4661018, 126.9319279)
	},
	{
		title: '은평고등학교',
		latlng: new kakao.maps.LatLng(37.60984462, 126.9057368)
	},
	{
		title: '오금중학교',
		latlng: new kakao.maps.LatLng(37.50527064, 127.1288011)
	},
	{
		title: '세륜중학교',
		latlng: new kakao.maps.LatLng(37.50893314, 127.1312464)
	},
	{
		title: '방산중학교',
		latlng: new kakao.maps.LatLng(37.50937287, 127.1218756)
	},
	{
		title: '은평중학교',
		latlng: new kakao.maps.LatLng(37.61061869, 126.9083472)
	},
	{
		title: '오상고등학교',
		latlng: new kakao.maps.LatLng(36.12502535, 128.4961942)
	},
	{
		title: '구미여자고등학교',
		latlng: new kakao.maps.LatLng(36.14446461, 128.3316915)
	},
	{
		title: '사곡고등학교',
		latlng: new kakao.maps.LatLng(36.09685605, 128.352797)
	},
	{
		title: '경북외국어고등학교',
		latlng: new kakao.maps.LatLng(36.12450267, 128.3220899)
	},
	{
		title: '상모고등학교',
		latlng: new kakao.maps.LatLng(36.08449575, 128.351716)
	},
	{
		title: '선주고등학교',
		latlng: new kakao.maps.LatLng(36.14176382, 128.3122513)
	},
	{
		title: '금오여자고등학교',
		latlng: new kakao.maps.LatLng(36.14245673, 128.3459186)
	},
	{
		title: '금오고등학교',
		latlng: new kakao.maps.LatLng(36.10894994, 128.3556319)
	},
	{
		title: '형곡고등학교',
		latlng: new kakao.maps.LatLng(36.10150009, 128.3384215)
	},
	{
		title: '옥계중학교',
		latlng: new kakao.maps.LatLng(36.13852781, 128.410856)
	},
	{
		title: '구미인덕중학교',
		latlng: new kakao.maps.LatLng(36.16233057, 128.4387572)
	},
	{
		title: '현일고등학교',
		latlng: new kakao.maps.LatLng(36.18720149, 128.349288)
	},
	{
		title: '경남관광고등학교',
		latlng: new kakao.maps.LatLng(35.2485272, 128.6752628)
	},
	{
		title: '창원봉림고등학교',
		latlng: new kakao.maps.LatLng(35.24835895, 128.6764645)
	},
	{
		title: '합포중학교',
		latlng: new kakao.maps.LatLng(35.21578987, 128.5853702)
	},
	{
		title: '월암중학교',
		latlng: new kakao.maps.LatLng(35.82716419, 128.5238094)
	},
	{
		title: '대구동부고등학교',
		latlng: new kakao.maps.LatLng(35.87429023, 128.7190722)
	},
	{
		title: '강동고등학교',
		latlng: new kakao.maps.LatLng(35.86598296, 128.7296127)
	},
	{
		title: '강동중학교',
		latlng: new kakao.maps.LatLng(35.86694911, 128.729474)
	},
	{
		title: '새론중학교',
		latlng: new kakao.maps.LatLng(35.87917295, 128.7250938)
	},
	{
		title: '경상중학교',
		latlng: new kakao.maps.LatLng(35.85261994, 128.5853705)
	},
	{
		title: '대구관광고등학교',
		latlng: new kakao.maps.LatLng(35.89004876, 128.6323701)
	},
	{
		title: '노변중학교',
		latlng: new kakao.maps.LatLng(35.83808623, 128.694355)
	},
	{
		title: '신기중학교',
		latlng: new kakao.maps.LatLng(35.86816727, 128.7023577)
	},
	{
		title: '율원중학교',
		latlng: new kakao.maps.LatLng(35.86138631, 128.7018721)
	},
	{
		title: '안심중학교',
		latlng: new kakao.maps.LatLng(35.86674984, 128.7092322)
	},
	{
		title: '영남공업고등학교',
		latlng: new kakao.maps.LatLng(35.84842817, 128.6469293)
	},
	{
		title: '현풍중학교',
		latlng: new kakao.maps.LatLng(35.6985296, 128.4382371)
	},
	{
		title: '동변중학교',
		latlng: new kakao.maps.LatLng(35.91925722, 128.6056093)
	},
	{
		title: '성광중학교',
		latlng: new kakao.maps.LatLng(35.9075717, 128.6242288)
	},
	{
		title: '성화중학교',
		latlng: new kakao.maps.LatLng(35.9032298, 128.620265)
	},
	{
		title: '대구일중학교',
		latlng: new kakao.maps.LatLng(35.88627468, 128.5841979)
	},
	{
		title: '동원중학교',
		latlng: new kakao.maps.LatLng(35.87585642, 128.6510708)
	},
	{
		title: '대구동부중학교',
		latlng: new kakao.maps.LatLng(35.872516, 128.6442074)
	},
	{
		title: '광양백운고등학교',
		latlng: new kakao.maps.LatLng(34.94677513, 127.6911143)
	},
	{
		title: '동광양중학교',
		latlng: new kakao.maps.LatLng(34.9455099970, 127.6965072)
	},
	{
		title: '광양여자고등학교',
		latlng: new kakao.maps.LatLng(34.97649691, 127.5804126)
	},
	{
		title: '봉명중학교',
		latlng: new kakao.maps.LatLng(36.6468051, 127.4604183)
	},
	{
		title: '상일여자고등학교',
		latlng: new kakao.maps.LatLng(37.54858748, 127.1708235)
	},
	{
		title: '성내중학교',
		latlng: new kakao.maps.LatLng(37.52906191, 127.1291173)
	},
	{
		title: '동신중학교',
		latlng: new kakao.maps.LatLng(37.53676952, 127.1343666)
	},
	{
		title: '광문고등학교',
		latlng: new kakao.maps.LatLng(37.56046181, 127.1585463)
	},
	{
		title: '한영중학교',
		latlng: new kakao.maps.LatLng(37.54914056, 127.1577731)
	},
	{
		title: '둔촌고등학교',
		latlng: new kakao.maps.LatLng(37.53143258, 127.1438087)
	},
	{
		title: '한영외국어고등학교',
		latlng: new kakao.maps.LatLng(37.54914056, 127.1577731)
	},
	{
		title: '명일여자고등학교',
		latlng: new kakao.maps.LatLng(37.54977633, 127.1495815)
	},
	{
		title: '성덕여자중학교',
		latlng: new kakao.maps.LatLng(37.54996367, 127.1419039)
	},
	{
		title: '여주고등학교',
		latlng: new kakao.maps.LatLng(37.27191005, 127.6326848)
	},
	{
		title: '문수고등학교',
		latlng: new kakao.maps.LatLng(35.55569199, 129.265401)
	},
	{
		title: '천안두정고등학교',
		latlng: new kakao.maps.LatLng(36.83515306, 127.130402)
	},
	{
		title: '천안여자고등학교',
		latlng: new kakao.maps.LatLng(36.77872802, 127.1692327)
	},
	{
		title: '천안여자상업고등학교',
		latlng: new kakao.maps.LatLng(36.80367767, 127.1365589)
	},
	{
		title: '천안청수고등학교',
		latlng: new kakao.maps.LatLng(36.79141382, 127.1591804)
	},
	{
		title: '천안쌍용고등학교',
		latlng: new kakao.maps.LatLng(36.78875649, 127.114008)
	},
	{
		title: '천안용곡중학교',
		latlng: new kakao.maps.LatLng(36.78921169, 127.1332935)
	},
	{
		title: '천안신방중학교',
		latlng: new kakao.maps.LatLng(36.79015871, 127.1267493)
	},
	{
		title: '천안새샘중학교',
		latlng: new kakao.maps.LatLng(36.77625095, 127.1378975)
	},
	{
		title: '천안업성고등학교',
		latlng: new kakao.maps.LatLng(36.86166638, 127.1379306)
	},
	{
		title: '천안상업고등학교',
		latlng: new kakao.maps.LatLng(36.85835685, 127.1579054)
	},
	{
		title: '천안오성고등학교',
		latlng: new kakao.maps.LatLng(36.8415273, 127.142135)
	},
	{
		title: '천안신당고등학교',
		latlng: new kakao.maps.LatLng(36.85148352, 127.1597115)
	},
	{
		title: '문일여자고등학교',
		latlng: new kakao.maps.LatLng(37.45247978, 126.7306571)
	},
	{
		title: '부개고등학교',
		latlng: new kakao.maps.LatLng(37.49221894, 126.7380466)
	},
	{
		title: '서운고등학교',
		latlng: new kakao.maps.LatLng(37.52691454, 126.7457474)
	},
	{
		title: '백석고등학교',
		latlng: new kakao.maps.LatLng(37.58060358, 126.6742921)
	},
	{
		title: '인천여자고등학교',
		latlng: new kakao.maps.LatLng(37.42188142, 126.6903145)
	},
	{
		title: '영화국제관광고등학교',
		latlng: new kakao.maps.LatLng(37.47139745, 126.6403955)
	},
	{
		title: '인천예일고등학교',
		latlng: new kakao.maps.LatLng(37.55422032, 126.7418712)
	},
	{
		title: '숭덕여자고등학교',
		latlng: new kakao.maps.LatLng(37.46428211, 126.7339171)
	},
	{
		title: '검단고등학교',
		latlng: new kakao.maps.LatLng(37.60386225, 126.6647414)
	},
	{
		title: '고잔고등학교',
		latlng: new kakao.maps.LatLng(37.30878749, 126.8353458)
	},
	{
		title: '인천체육고등학교',
		latlng: new kakao.maps.LatLng(37.54592504, 126.6094512)
	},
	{
		title: '인천디자인고등학교',
		latlng: new kakao.maps.LatLng(37.54822343, 126.6714899)
	},
	{
		title: '계산여자고등학교',
		latlng: new kakao.maps.LatLng(37.53825318, 126.7418943)
	},
	{
		title: '부개여자고등학교',
		latlng: new kakao.maps.LatLng(37.49791578, 126.7410316)
	},
	{
		title: '인천세원고등학교',
		latlng: new kakao.maps.LatLng(37.55161396, 126.7447093)
	},
	{
		title: '석정여자고등학교',
		latlng: new kakao.maps.LatLng(37.46866507, 126.694192)
	},
	{
		title: '남인천여자중학교',
		latlng: new kakao.maps.LatLng(37.44511845, 126.6940513)
	},
	{
		title: '학익여자고등학교',
		latlng: new kakao.maps.LatLng(37.44381933, 126.6753484)
	},
	{
		title: '인명여자고등학교',
		latlng: new kakao.maps.LatLng(37.44037081, 126.6972234)
	},
	{
		title: '제물포여자중학교',
		latlng: new kakao.maps.LatLng(37.44914564, 126.6882045)
	},
	{
		title: '관교여자중학교',
		latlng: new kakao.maps.LatLng(37.44513573, 126.6889705)
	},
	{
		title: '범박고등학교',
		latlng: new kakao.maps.LatLng(37.46768281, 126.8117382)
	},
	{
		title: '소명여자고등학교',
		latlng: new kakao.maps.LatLng(37.48782298, 126.7913100325)
	},
	{
		title: '부산여자중학교',
		latlng: new kakao.maps.LatLng(35.12056195, 129.0144572)
	},
	{
		title: '부산관광고등학교',
		latlng: new kakao.maps.LatLng(35.08250055, 129.0222269)
	},
	{
		title: '반안중학교',
		latlng: new kakao.maps.LatLng(35.20337703, 129.1123947)
	},
	{
		title: '화명고등학교',
		latlng: new kakao.maps.LatLng(35.23954676, 129.0106915)
	},
	{
		title: '동주여자중학교',
		latlng: new kakao.maps.LatLng(35.10077153, 129.0013638)
	},
	{
		title: '부일외국어고등학교',
		latlng: new kakao.maps.LatLng(35.09073609, 129.0025604)
	},
	{
		title: '양동여자중학교',
		latlng: new kakao.maps.LatLng(35.1701929, 129.0810001)
	},
	{
		title: '경기모바일과학고등학교',
		latlng: new kakao.maps.LatLng(37.30556825, 126.8981471)
	},
	{
		title: '안산공업고등학교',
		latlng: new kakao.maps.LatLng(37.33634682, 126.8615892)
	},
	{
		title: '관산중학교',
		latlng: new kakao.maps.LatLng(37.335274, 126.7988246)
	},
	{
		title: '석호중학교',
		latlng: new kakao.maps.LatLng(37.29968123, 126.8522454)
	},
	{
		title: '원일중학교',
		latlng: new kakao.maps.LatLng(37.33944264, 126.8086767)
	},
	{
		title: '웅상고등학교',
		latlng: new kakao.maps.LatLng(35.37814867, 129.1450388)
	},
	{
		title: '부광중학교',
		latlng: new kakao.maps.LatLng(37.50101254, 126.7374688)
	},
	{
		title: '청란여자고등학교',
		latlng: new kakao.maps.LatLng(36.31073792, 127.4295277)
	},
	{
		title: '대전도안고등학교',
		latlng: new kakao.maps.LatLng(36.33692213, 127.3373195)
	},
	{
		title: '대전제일고등학교',
		latlng: new kakao.maps.LatLng(36.31331472, 127.3723589)
	},
	{
		title: '신탄진고등학교',
		latlng: new kakao.maps.LatLng(36.44970668, 127.4359505)
	},
	{
		title: '대전노은고등학교',
		latlng: new kakao.maps.LatLng(36.36939669, 127.3232157)
	},
	{
		title: '대전지족고등학교',
		latlng: new kakao.maps.LatLng(36.37803212, 127.3156568)
	},
	{
		title: '우송고등학교',
		latlng: new kakao.maps.LatLng(36.33562875, 127.4428489)
	},
	{
		title: '유성고등학교',
		latlng: new kakao.maps.LatLng(36.34921738, 127.334775)
	},
	{
		title: '서일고등학교',
		latlng: new kakao.maps.LatLng(36.29332636, 127.3236362)
	},
	{
		title: '대전반석고등학교',
		latlng: new kakao.maps.LatLng(36.38691878, 127.3135242)
	},
	{
		title: '중일고등학교',
		latlng: new kakao.maps.LatLng(36.42052491, 127.3886965)
	}	,
	{
		title: '대전송촌고등학교',
		latlng: new kakao.maps.LatLng(36.36346301, 127.4459274)
	},
	{
		title: '대전대성고등학교',
		latlng: new kakao.maps.LatLng(36.331971, 127.4070779)
	},
	{
		title: '대전전민고등학교',
		latlng: new kakao.maps.LatLng(36.39833683, 127.3983327)
	},
	{
		title: '대덕고등학교',
		latlng: new kakao.maps.LatLng(36.38757339, 127.3816844)
	},
	{
		title: '대전여자고등학교',
		latlng: new kakao.maps.LatLng(36.33001268, 127.4463707)
	},
	{
		title: '대전가오고등학교',
		latlng: new kakao.maps.LatLng(36.3106602, 127.4544751)
	},
	{
		title: '대전신일여자고등학교',
		latlng: new kakao.maps.LatLng(36.30866941, 127.4334058)
	},
	{
		title: '대전여자고등학교',
		latlng: new kakao.maps.LatLng(36.33001268, 127.4463707)
	},
	{
		title: '대전예술고등학교',
		latlng: new kakao.maps.LatLng(36.34695405, 127.3335599725)
	},
	{
		title: '대전대성여자고등학교',
		latlng: new kakao.maps.LatLng(36.3377246, 127.4405277)
	},
	{
		title: '동대전고등학교',
		latlng: new kakao.maps.LatLng(36.35628714, 127.4236428)
	},
	{
		title: '유성생명과학고등학교',
		latlng: new kakao.maps.LatLng(36.34823957, 127.3284216)
	},
	{
		title: '서일여자고등학교',
		latlng: new kakao.maps.LatLng(36.29429961, 127.3235457)
	},
	{
		title: '대전구봉고등학교',
		latlng: new kakao.maps.LatLng(36.29557493, 127.3310026)
	},
	{
		title: '대전괴정고등학교',
		latlng: new kakao.maps.LatLng(36.34040306, 127.3788431)
	},
	{
		title: '대전복수고등학교',
		latlng: new kakao.maps.LatLng(36.30377161, 127.3735857)
	},
	{
		title: '대전외국어고등학교',
		latlng: new kakao.maps.LatLng(36.33658566, 127.3656242)
	},
	{
		title: '대전관저고등학교',
		latlng: new kakao.maps.LatLng(36.31080711, 127.3377631)
	},
	{
		title: '유성중학교',
		latlng: new kakao.maps.LatLng(36.34589364, 127.3347496)
	},
	{
		title: '대전삼천중학교',
		latlng: new kakao.maps.LatLng(36.35833529, 127.3937223)
	},
	{
		title: '대전관평중학교',
		latlng: new kakao.maps.LatLng(36.424095, 127.3871878)
	},
	{
		title: '대전봉우중학교',
		latlng: new kakao.maps.LatLng(36.2984703, 127.3327047)
	},
	{
		title: '대전노은중학교',
		latlng: new kakao.maps.LatLng(36.37004922, 127.3242358)
	},
	{
		title: '대전봉명중학교',
		latlng: new kakao.maps.LatLng(36.34964791, 127.344931)
	},
	{
		title: '대전법동중학교',
		latlng: new kakao.maps.LatLng(36.36652684, 127.4335276)
	},
	{
		title: '대전송촌중학교',
		latlng: new kakao.maps.LatLng(36.36405796, 127.4434344)
	},
	{
		title: '평촌경영고등학교',
		latlng: new kakao.maps.LatLng(37.40107292, 126.9590273)
	},
	{
		title: '인덕원고등학교',
		latlng: new kakao.maps.LatLng(37.39997331, 126.981096)
	},
	{
		title: '안양문화고등학교',
		latlng: new kakao.maps.LatLng(37.39571621, 126.9090332)
	},
	{
		title: '양명여자고등학교',
		latlng: new kakao.maps.LatLng(37.40697627, 126.9221725)
	},
	{
		title: '안양고등학교',
		latlng: new kakao.maps.LatLng(37.40048898, 126.9013599858)
	},
	{
		title: '안양여자고등학교',
		latlng: new kakao.maps.LatLng(37.40353299, 126.9163026)
	},
	{
		title: '충훈고등학교',
		latlng: new kakao.maps.LatLng(37.41081461, 126.8931377)
	},
	{
		title: '김해율하고등학교',
		latlng: new kakao.maps.LatLng(35.17410353, 128.8069805)
	},
	{
		title: '김해영운고등학교',
		latlng: new kakao.maps.LatLng(35.25467462, 128.9057183)
	},
	{
		title: '장유고등학교',
		latlng: new kakao.maps.LatLng(35.20208744, 128.8039204)
	},
	{
		title: '김해삼방고등학교',
		latlng: new kakao.maps.LatLng(35.25534178, 128.9030254)
	},
	{
		title: '김해한일여자고등학교',
		latlng: new kakao.maps.LatLng(35.23924195, 128.9166756)
	},
	{
		title: '김해대곡중학교',
		latlng: new kakao.maps.LatLng(35.24356439, 128.898515)
	},
	{
		title: '경덕여자고등학교',
		latlng: new kakao.maps.LatLng(35.86357119, 128.5489381)
	},
	{
		title: '대진고등학교',
		latlng: new kakao.maps.LatLng(35.80569844, 128.5183763)
	},
	{
		title: '학남고등학교',
		latlng: new kakao.maps.LatLng(35.94627087, 128.5691977)
	},
	{
		title: '경북여자고등학교',
		latlng: new kakao.maps.LatLng(35.85842716, 128.5922004)
	},
	{
		title: '호산고등학교',
		latlng: new kakao.maps.LatLng(35.8490573, 128.4818071)
	},
	{
		title: '다사고등학교',
		latlng: new kakao.maps.LatLng(35.86110567, 128.4627608)
	},
	{
		title: '송현여자고등학교',
		latlng: new kakao.maps.LatLng(35.83112106, 128.5462157)
	},
	{
		title: '대원고등학교',
		latlng: new kakao.maps.LatLng(35.80668948, 128.5070767)
	},
	{
		title: '백석고등학교',
		latlng: new kakao.maps.LatLng(37.6529063, 126.7869189)
	},
	{
		title: '백신고등학교',
		latlng: new kakao.maps.LatLng(37.64248837, 126.7819557)
	},
	{
		title: '부용고등학교',
		latlng: new kakao.maps.LatLng(37.73630575, 127.0929481)
	},
	{
		title: '소사고등학교',
		latlng: new kakao.maps.LatLng(37.46496623, 126.8001855)
	},
	{
		title: '시온고등학교',
		latlng: new kakao.maps.LatLng(37.47148659, 126.8051061)
	},
	{
		title: '부천북고등학교',
		latlng: new kakao.maps.LatLng(37.51845054, 126.7890343)
	},
	{
		title: '도당고등학교',
		latlng: new kakao.maps.LatLng(37.51862256, 126.7909608)
	},
	{
		title: '원종고등학교',
		latlng: new kakao.maps.LatLng(37.52849582, 126.8004974)
	},
	{
		title: '성일여자고등학교',
		latlng: new kakao.maps.LatLng(35.08949951, 128.9800626)
	},
	{
		title: '부경고등학교',
		latlng: new kakao.maps.LatLng(35.1157788, 129.0133065)
	},
	{
		title: '다선중학교',
		latlng: new kakao.maps.LatLng(35.05271729, 128.9637818)
	},
	{
		title: '다대중학교',
		latlng: new kakao.maps.LatLng(35.05737649, 128.9682545)
	},
	{
		title: '다대고등학교',
		latlng: new kakao.maps.LatLng(35.05313679, 128.9698499)
	},
	{
		title: '부산문화여자고등학교',
		latlng: new kakao.maps.LatLng(35.16597407, 129.1435338)
	},
	{
		title: '삼성여자고등학교',
		latlng: new kakao.maps.LatLng(35.09422497, 128.9982328)
	},
	{
		title: '와룡고등학교',
		latlng: new kakao.maps.LatLng(35.86137993, 128.5036794)
	},
	{
		title: '대구보건고등학교',
		latlng: new kakao.maps.LatLng(35.85810993, 128.5726243)
	},
	{
		title: '신언중학교',
		latlng: new kakao.maps.LatLng(35.56747899, 129.1137675)
	},
	{
		title: '경남예술고등학교',
		latlng: new kakao.maps.LatLng(35.21654607, 128.1032775)
	},
	{
		title: '광영고등학교',
		latlng: new kakao.maps.LatLng(34.96187544, 127.7146684)
	},
	{
		title: '영신고등학교',
		latlng: new kakao.maps.LatLng(35.92000422, 128.646424)
	},
	{
		title: '효암고등학교',
		latlng: new kakao.maps.LatLng(35.41239092, 129.1699843)
	},
	{
		title: '서창고등학교',
		latlng: new kakao.maps.LatLng(35.41400251, 129.1741433)
	},
	{
		title: '부산백양고등학교',
		latlng: new kakao.maps.LatLng(35.19695301, 128.9975453)
	},
	{
		title: '대덕여자고등학교',
		latlng: new kakao.maps.LatLng(35.17944488, 128.9933857)
	},
	{
		title: '부산국제고등학교',
		latlng: new kakao.maps.LatLng(35.16722627, 129.0234526)
	},
	{
		title: '동주여자고등학교',
		latlng: new kakao.maps.LatLng(35.10097077, 129.0313539)
	},
	{
		title: '부경고등학교',
		latlng: new kakao.maps.LatLng(35.1157788, 129.0133065)
	},
	{
		title: '경일고등학교',
		latlng: new kakao.maps.LatLng(35.11248236, 128.9224148)
	},
	{
		title: '부산강서고등학교',
		latlng: new kakao.maps.LatLng(35.21642661, 128.9824742)
	},
	{
		title: '덕문여자고등학교',
		latlng: new kakao.maps.LatLng(35.16774439, 129.1036484)
	},
	{
		title: '부산동여자고등학교',
		latlng: new kakao.maps.LatLng(35.14602702, 129.1047285)
	},
	{
		title: '연수여자고등학교',
		latlng: new kakao.maps.LatLng(37.41103535, 126.6723295)
	},
	{
		title: '김해분성고등학교',
		latlng: new kakao.maps.LatLng(35.26547784, 128.8745534)
	},
	{
		title: '인천청라중학교',
		latlng: new kakao.maps.LatLng(37.53783941, 126.653874)
	},
	{
		title: '정발고등학교',
		latlng: new kakao.maps.LatLng(37.66365025, 126.7861372)
	},
	{
		title: '가좌고등학교',
		latlng: new kakao.maps.LatLng(37.68802952, 126.7201873)
	},
	{
		title: '대화고등학교',
		latlng: new kakao.maps.LatLng(37.66846943, 126.732143)
	},
	{
		title: '백마고등학교',
		latlng: new kakao.maps.LatLng(37.65198233, 126.7940121)
	},
	{
		title: '일산대진고등학교',
		latlng: new kakao.maps.LatLng(37.68047139, 126.7515967)
	},
	{
		title: '주엽고등학교',
		latlng: new kakao.maps.LatLng(37.67610348, 126.754359)
	},
	{
		title: '일산동고등학교',
		latlng: new kakao.maps.LatLng(37.7006519, 126.7686598)
	},
	{
		title: '저현고등학교',
		latlng: new kakao.maps.LatLng(37.67779541, 126.8159566)
	},
	{
		title: '영신여자고등학교',
		latlng: new kakao.maps.LatLng(37.2419379, 126.9669823)
	},
	{
		title: '서산여자고등학교',
		latlng: new kakao.maps.LatLng(36.77032528, 126.4676572)
	},
	{
		title: '서산여자중학교',
		latlng: new kakao.maps.LatLng(36.76881764, 126.4668512)
	},
	{
		title: '서일고등학교',
		latlng: new kakao.maps.LatLng(36.85930055, 126.4324993)
	},
	{
		title: '신천중학교',
		latlng: new kakao.maps.LatLng(37.43428739, 126.782428)
	},
	{
		title: '소래중학교',
		latlng: new kakao.maps.LatLng(37.43735861, 126.7967625)
	},
	{
		title: '덕원중학교',
		latlng: new kakao.maps.LatLng(37.54862258, 126.8290245)
	},
	{
		title: '수명중학교',
		latlng: new kakao.maps.LatLng(37.54856699, 126.8240596)
	},
	{
		title: '공항중학교',
		latlng: new kakao.maps.LatLng(37.56217751, 126.8149668)
	},
	{
		title: '마곡하늬중학교',
		latlng: new kakao.maps.LatLng(37.55812766, 126.8209848)
	},
	{
		title: '명덕여자중학교',
		latlng: new kakao.maps.LatLng(37.55394399, 126.8342914)
	},
	{
		title: '하단중학교',
		latlng: new kakao.maps.LatLng(35.11106623, 128.9599891)
	},
	{
		title: '당리중학교',
		latlng: new kakao.maps.LatLng(35.1022387, 128.9805243)
	},
	{
		title: '브니엘예술중학교',
		latlng: new kakao.maps.LatLng(35.25485306, 129.1039264)
	},
	{
		title: '삼성중학교',
		latlng: new kakao.maps.LatLng(35.09455788, 128.9991612)
	},
	{
		title: '경일중학교',
		latlng: new kakao.maps.LatLng(35.09406962, 128.9162897)
	},
	{
		title: '부산영선중학교',
		latlng: new kakao.maps.LatLng(35.08626719, 129.0446792)
	},
	{
		title: '남도여자중학교',
		latlng: new kakao.maps.LatLng(35.0870604, 129.0455444)
	},
	{
		title: '부산서여자고등학교',
		latlng: new kakao.maps.LatLng(35.11340208, 129.0213157)
	},
	{
		title: '남성여자고등학교',
		latlng: new kakao.maps.LatLng(35.10571479, 129.0344121)
	},
	{
		title: '부산예술고등학교',
		latlng: new kakao.maps.LatLng(35.24704234, 129.0981972)
	},
	{
		title: '저동고등학교',
		latlng: new kakao.maps.LatLng(37.67086575, 126.7790577)
	},
	{
		title: '응곡중학교',
		latlng: new kakao.maps.LatLng(37.38077945, 126.7832803)
	},
	{
		title: '함현고등학교',
		latlng: new kakao.maps.LatLng(37.36619361, 126.7384563)
	},
	{
		title: '정왕고등학교',
		latlng: new kakao.maps.LatLng(37.35044006, 126.7284476)
	},
	{
		title: '서해고등학교',
		latlng: new kakao.maps.LatLng(37.36050976, 126.7239075)
	},
	{
		title: '만정중학교',
		latlng: new kakao.maps.LatLng(37.0086015, 127.1729856)
	},
	{
		title: '관양고등학교',
		latlng: new kakao.maps.LatLng(37.40881423, 126.9601177)
	},
	{
		title: '화홍중학교',
		latlng: new kakao.maps.LatLng(37.24728058, 127.0347228)
	},
	{
		title: '이일여자고등학교',
		latlng: new kakao.maps.LatLng(35.93458743, 126.9489825)
	},
	{
		title: '함열여자고등학교',
		latlng: new kakao.maps.LatLng(36.08295724, 126.9690849)
	},
	{
		title: '이리남성여자고등학교',
		latlng: new kakao.maps.LatLng(35.95635944, 126.9659967)
	},
	{
		title: '죽전고등학교',
		latlng: new kakao.maps.LatLng(37.33263026, 127.1060548)
	},
	{
		title: '서현고등학교',
		latlng: new kakao.maps.LatLng(37.38222205, 127.1240595)
	},
	{
		title: '경안고등학교',
		latlng: new kakao.maps.LatLng(36.56850446, 128.7204749)
	},
	{
		title: '광남중학교',
		latlng: new kakao.maps.LatLng(37.47007475, 126.8475588)
	},
	{
		title: '철산중학교',
		latlng: new kakao.maps.LatLng(37.47030832, 126.8753237)
	},
	{
		title: '하안중학교',
		latlng: new kakao.maps.LatLng(37.46738575, 126.8807721)
	},
	{
		title: '하안북중학교',
		latlng: new kakao.maps.LatLng(37.46508438, 126.8677256)
	},
	{
		title: '심원중학교',
		latlng: new kakao.maps.LatLng(37.49986182, 126.7827908)
	},
	{
		title: '계남고등학교',
		latlng: new kakao.maps.LatLng(37.49619693, 126.7726105)
	},
	{
		title: '장기고등학교',
		latlng: new kakao.maps.LatLng(37.64014174, 126.6682283)
	},
	{
		title: '함현고등학교',
		latlng: new kakao.maps.LatLng(37.36619361, 126.7384563)
	},
	{
		title: '능곡고등학교',
		latlng: new kakao.maps.LatLng(37.62396116, 126.8255017)
	},
	{
		title: '포곡고등학교',
		latlng: new kakao.maps.LatLng(37.27259121, 127.2276557)
	},
	{
		title: '청명고등학교',
		latlng: new kakao.maps.LatLng(37.26089042, 127.0773249)
	},
	{
		title: '포천고등학교',
		latlng: new kakao.maps.LatLng(37.89142616, 127.1923465)
	},
	{
		title: '서강고등학교',
		latlng: new kakao.maps.LatLng(35.17517965, 126.8680368)
	},
	{
		title: '빛고을고등학교',
		latlng: new kakao.maps.LatLng(35.21071222, 126.862344)
	},
	{
		title: '국제고등학교',
		latlng: new kakao.maps.LatLng(35.19911446, 126.8956123)
	},
	{
		title: '금호중앙중학교',
		latlng: new kakao.maps.LatLng(35.1785969, 126.8855126)
	},
	{
		title: '동아여자고등학교',
		latlng: new kakao.maps.LatLng(35.12584749, 126.9220748)
	},
	{
		title: '설월여자고등학교',
		latlng: new kakao.maps.LatLng(35.12612039, 126.9285943)
	},
	{
		title: '성덕고등학교',
		latlng: new kakao.maps.LatLng(35.19585015, 126.8174891)
	},
	{
		title: '성덕중학교',
		latlng: new kakao.maps.LatLng(35.19561959, 126.8164213)
	},
	{
		title: '일동중학교',
		latlng: new kakao.maps.LatLng(35.20274166, 126.8947545)
	},
	{
		title: '대광여자고등학교',
		latlng: new kakao.maps.LatLng(35.12524421, 126.8991024)
	},
	{
		title: '문흥중학교',
		latlng: new kakao.maps.LatLng(35.18608494, 126.9179996)
	},
	{
		title: '광주숭일고등학교',
		latlng: new kakao.maps.LatLng(35.21781348, 126.8969064)
	},
	{
		title: '숭의과학기술고등학교',
		latlng: new kakao.maps.LatLng(35.12902417, 126.9237699)
	},
	{
		title: '문산중학교',
		latlng: new kakao.maps.LatLng(35.18937805, 126.9238035)
	},
	{
		title: '수완고등학교',
		latlng: new kakao.maps.LatLng(35.19807379, 126.8259386)
	},
	{
		title: '아산중학교',
		latlng: new kakao.maps.LatLng(36.78906056, 127.0046035)
	},
	{
		title: '온양중학교',
		latlng: new kakao.maps.LatLng(36.77372418, 126.9983721)
	},
	{
		title: '온양여자중학교',
		latlng: new kakao.maps.LatLng(36.77694367, 127.0143735)
	},
	{
		title: '온양한올중학교',
		latlng: new kakao.maps.LatLng(36.78855105, 127.0105357)
	},
	{
		title: '설화중학교',
		latlng: new kakao.maps.LatLng(36.78586151, 127.0966823)
	},
	{
		title: '인천신정중학교',
		latlng: new kakao.maps.LatLng(37.4036411, 126.6461098)
	},
	{
		title: '인주중학교',
		latlng: new kakao.maps.LatLng(37.442798, 126.6598715)
	},
	{
		title: '온양용화중학교',
		latlng: new kakao.maps.LatLng(36.77487068, 127.0066451)
	},
	{
		title: '이순신고등학교',
		latlng: new kakao.maps.LatLng(36.78292183, 127.0988157)
	},
	{
		title: '충남삼성고등학교',
		latlng: new kakao.maps.LatLng(36.80653054, 127.0572398)
	},
	{
		title: '온양용화고등학교',
		latlng: new kakao.maps.LatLng(36.77371849, 127.0028101)
	}
];

// 마커 이미지의 이미지 주소입니다
var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png"; 
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기 입니다
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
        image : markerImage // 마커 이미지 
    });
}
</script>
</body>
</html>
