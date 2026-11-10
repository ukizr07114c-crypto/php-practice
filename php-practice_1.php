<?php
// Q1 変数と文字列
$name = '安藤';
echo '私の名前は「' . $name . '」です。' . "\n";

// Q2 四則演算
$x = 5;
$y = 4;
$num = $x * $y;

echo $num . "\n";
echo $num/2 . "\n";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です' . "\n";

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows') {
  echo '使用OSは、' . $device . 'です。' . "\n";
} elseif ($device === 'mac') {
  echo '使用OSは、' . $device . 'です。' . "\n";
} else {
  echo 'どちらでもありません。' . "\n";
}


// Q5 条件分岐-2 三項演算子
$age = 37;
$message = ($age >= 18) ? '成人です。' : '未成年です。';
echo $message . "\n";

// Q6 配列
$prefecture = ['茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県'];
echo $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。' . "\n";

// Q7 連想配列-1
$city = [
  '東京都' => '新宿区', 
  '神奈川県' => '横浜市', 
  '千葉県' => '千葉市', 
  '埼玉県' => 'さいたま市', 
  '栃木県' => '宇都宮市' , 
  '群馬県' => '前橋市', 
  '茨城県' => '水戸市',
  '岩手県' => '盛岡市',
  '宮城県' => '仙台市'
];

echo $city['東京都'] . "\n" . $city['神奈川県'] . "\n" . $city['千葉県'] . "\n" . $city['埼玉県'] . "\n" . $city['栃木県'] . "\n" . $city['群馬県'] . "\n" . $city['茨城県'] . "\n" ;

// Q8 連想配列-2
foreach ($city as $x => $y) {
  if($x === '埼玉県'){
    echo $x . 'の県庁所在地は、' . $y . 'です。' . "\n";
  }
}

// Q9 連想配列-3
foreach ($city as $a => $b) {
  if($a !== '岩手県' && $a !== '宮城県') {
    echo $a . 'の県庁所在地は、' . $b . 'です。' . "\n";
  } else {
    echo $a . 'は関東地方ではありません。' . "\n";
  }
}

// Q10 関数-1
function hello($name) {
  echo $name. 'さん、こんにちは。' . "\n";
}

hello('金谷');
hello('安藤');

// Q11 関数-2
$price = 1000;
function calcTaxInPrice ($price) {
  return $price * 1.1;
}
$taxInPrice = calcTaxInPrice($price);
echo $price . 'の商品の税込み価格は' . $taxInPrice . '円です。' . "\n";


// Q12 関数とif文
function distinguishNum ($num) {
  if ($num % 2 === 1) {
    echo $num . 'は奇数です。' . "\n";
  }else {
    echo $num . 'は偶数です。' . "\n";
  }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade ($grade) {
  switch($grade) {
    case 'A':
    case 'B':
    return '合格です。';

    case 'C':
    return '合格ですが追加課題があります。';

    case 'D':
    return '不合格です。';

    default:
    return '判定不明です。講師に問い合わせてください。';
    break;
  }
}

echo evaluateGrade('B') . "\n";
echo evaluateGrade('E');

?>