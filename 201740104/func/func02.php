<?php
# 인사말1
/*
echo "안녕하세요.<br>";
print "대림대학교의 ";
print "대숙이 입니다." . "<br>";
*/
// 함수를 실행하기 위해서는 호출이라는 과정이 필요
//함수는 선언 => 실행 2단계 필요하다
hello(); // 함수명();

# 인사말2
/*
echo "안녕하세요.<br>";
print "대림대학교의 ";
print "대숙이 입니다.<br>";
*/
hello();

# 인사말3

//코드를 묶고 싶다
// 중괄호 이용

//코드블록 여러개 존재....
//함수....
//fuction 키워드를 이용해서, 코드를 묶는 것을 함수의 선언.
function hello()
{
   //들여쓰기, -> tap
    echo "안녕하세요.<br>";
    print "대림대학교의 ";
    print "대숙이 입니다.<br>";
    return true;
}