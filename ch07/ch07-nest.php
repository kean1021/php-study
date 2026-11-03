<?php
$isLoggedIn = true;
$role = "admin";

if($isLoggedIn) {
    if($role === "admin"){
        echo "관리자 메뉴를 표시합니다.";
    }else{
        echo "일반 회원 메뉴를 표시합니다.";
    }
} else {
    echo "로그인 버튼을 표시합니다.";
}