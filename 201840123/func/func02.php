<?php
# 인사말1
// 반복되는 인사말...
/*
echo "안녕하세요.<br>"; // br 테그로 다음줄 전송
print "대림대학교의 ";
print "대숙이 입니다." . "<br>"; // 문자열 결합 연산자
*/
// 함수를 실행하기 위해서는 호출이라는 과정이 필요.
// 함수는 선언=>실행 2단계 필요하다.
hello(); // 함수명();

# 인사말2
// 반복되는 인사말...
/*
echo "안녕하세요.<br>"; // br 테그로 다음줄 전송
print "대림대학교의 ";
print "대숙이 입니다.<br>";
*/
hello();

# 인사말3
// 반복되는 인사말...

// 코드를 묽으고 싶다. ???
// 중괄호 이용 `{` ~~~ `}`

// 코드블럭 여러개 존재...
// 함수...
// function 키워드를 이용해서, 코드를 묽는 것을 함수의 선언.
// 선언된 함수는 선언일뿐, 실행은 되지 않아요.
function hello()
{
    // 들여쓰기, -> tab
    // 소스코드의 모양이, 들쑥날쑥...
    // 코딩 컨벤셜, 들여쓰기 (스페이스 4칸), // PSR 규격 정의
    echo "안녕하세요.<br>"; // br 테그로 다음줄 전송
    print "대림대학교의 ";
    print "대숙이 입니다.<br>";
    return true;
}
