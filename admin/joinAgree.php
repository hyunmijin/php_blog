<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, ../assets/img/join01@3x.png 3x"/>
                <img src="../assets/img/join01.png" alt="소개이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주세요!
            </p>
        </div>
        <!-- //intro__inner -->

        <div class="join__inner">
        <h2>이용약관</h2>
            <div class="index">
                <ul>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__agree">
                <div class="scroll">
                    제1조 (목적)<br>
                    본 약관은 [서비스 제공자] (이하 "회사")가 제공하는 인터넷 관련 서비스 (이하 "서비스")의 이용과 관련하여 회사와 회원의 권리와 의무 및 책임사항을 규정함을 목적으로
                    합니다.<br>
                    제2조 (용어의 정의)<br>
                    "서비스"라 함은 회사가 제공하는 모든 인터넷 관련 서비스를 의미합니다.<br>
                    "회원"이라 함은 서비스를 이용하기 위하여 회사와 이용계약을 체결한 자를 의미합니다.<br>
                    "아이디(ID)"라 함은 회원의 식별과 서비스 이용을 위하여 회원이 정하고 회사가 승인하는 문자와 숫자의 조합을 의미합니다.<br>
                    "비밀번호"라 함은 회원이 부여 받은 아이디와 일치된 회원임을 확인하고 비밀보호를 위해 회원 자신이 설정한 문자 또는 숫자의 조합을 의미합니다.<br>
                    제3조 (이용계약의 체결 및 해지)<br>
                    이용계약은 회원이 본 약관에 동의하고 회사가 정한 회원가입 양식에 따라 회원정보를 기입하여 이용신청을 하고 회사가 이를 승낙함으로써 체결됩니다.
                </div>
                <div class="check">
                    <input type="checkbox" id="agreecheck1" class="agreeCheck">
                    찐 블로그 이용약관
                </div>
                <div class="scroll">
                    개인정보 수집 및 이용 동의서<br>
                    [찐주식회사]은(는) 정보통신망 이용촉진 및 정보보호 등에 관한 법률 제22조 제1항에 따라 개인정보를 수집, 이용하고 있습니다. <br>
                    이에 관한 사항은 아래와 같습니다.<br>
                    수집하는 개인정보 항목<br>
                    수집항목: [이름, 생년월일, 성별, 아이디, 비밀번호, 이메일, 휴대전화번호, 직업, 거주지, 결제정보 등]<br>
                    수집방법: 홈페이지, 서면양식, 팩스, 전화, 이메일, 이벤트 응모 등<br>
                    2. 개인정보의 수집 및 이용 목적<br>
                    회원관리, 서비스 제공, 계약 이행, 요금정산 등<br>
                    이벤트 및 광고성 정보 제공<br>
                    3. 개인정보 보유 및 이용 기간<br>
                    회원 탈퇴 또는 회원이 요청할 경우 지체 없이 파기됩니다.<br>
                    상법 등 관련법령에 의하여 보존할 필요가 있는 경우에는 일정 기간 동안 보존합니다.<br>
                    4. 개인정보 제공<br>
                </div>
                <div class="check">
                    <input type="checkbox" id="agreecheck2" class="agreeCheck">
                    개인정보 수집 및 이용 동의
                </div>
            </div>
            <div>
                <p class="agreeMsg"></p>
                <a href="joinSave.php" class="btnStyle agreeBtn">동의</a>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script>
        const agreeBtn = document.querySelector('.agreeBtn');
        const agreeCheck = document.querySelectorAll('.agreeCheck');
        const agreeMsg = document.querySelector('.agreeMsg');
        
        agreeBtn.addEventListener('click', (e) => {
            agreeCheck.forEach((check) => {
                if (check.checked == false){
                    agreeMsg.innerHTML = "체크박스를 다시합번 확인해 주세요"
                    e.preventDefault();
                };
            });
        });
    </script>
    
</body>
</html>