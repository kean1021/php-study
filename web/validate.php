<?php
$errors =[];
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($name === ''){
        $errors[] = '이름을 입력해 주세요.';
    } elseif(mb_strlen($name) > 20){
        $errors[] = '이름은 20자 이하로 입력해 주세요.';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = '이메일 형식이 올바르지 않습니다.';
    }

    if(count($errors) > 0){
        foreach ($errors as $error){
            echo "<p style='color:red'>". htmlspecialchars($error) . "</p>";
        }
    } else {
        echo "<p>통과! 저장을 진행합니다.</p>";
    }
}
?>
<form method="post" action="validate.php">
    <input name="name" placeholder="이름"> <input name="email" placeholder="이메일">
    <button type="submit">보내기</button>