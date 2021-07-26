<?php
error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$end = "\033[0m";
$whiteb = "\033[1;37m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$blue = "\033[1;96m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$maul = rand(31, 37);
$maui = "\033[1;".$maul."m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$nenden = "\033[40m";
$xanhd = "\033[0;36m";
$nendo = "\033[41m";
$nenxanh = "\033[42m";
$nenvang = "\033[43m";
$nenblue = "\033[44m";
$nenPurpe = "\033[45m";
$nenCyan = "\033[46m";
$nentrang = "\033[47m";
$UGreen = "\033[4;32m";
$BGreen = "\033[1;32m"; $end = "\033[0m";
$whiteb = "\033[1;37m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$maul = rand(31, 37);
$maui = "\033[1;".$maul."m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$nenden = "\033[40m";
$xanhd = "\033[0;36m";
$nendo = "\033[41m";
$nenxanh = "\033[42m";
$nenvang = "\033[43m";
$nenblue = "\033[44m";
$nenPurpe = "\033[45m";
$nenCyan = "\033[46m";
$nentrang = "\033[47m";
$UGreen = "\033[4;32m";
$BGreen = "\033[1;32m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$banner = "\r";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$datdz = $do."[".$luc."●".$do."] ".$trang."=> ";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$banner = "
\033[1;32m╔═════════════════════════════════════════════════════════╗
\033[1;32m║ \033[1;96m██╗  ██╗\033[1;91m███╗   ███╗  ║ \033[1;95m ➽ Facebook : Yohandara Magdariano Wahyudi       \033[1;32m ║
\033[1;32m║ \033[1;96m██║  ██║\033[1;91m████╗ ████║  ║\033[1;94m  ➽ Whatsapp : 085607486150           \033[1;32m ║
\033[1;32m║ \033[1;96m███████║\033[1;91m██╔████╔██║  ║\033[0;33m  ➽ Instagram : yhndr_         \033[1;32m    ║
\033[1;32m║ \033[1;96m██╔══██║\033[1;91m██║╚██╔╝██║  ║  \033[1;92m➽ Youtube : Yohandara XD          \033[1;32m║
\033[1;32m║ \033[1;96m██║  ██║\033[1;91m██║ ╚═╝ ██║  ║\033[1;97m  ➽ Bản Quyền By 🌍USER ZABO✨   \033[1;32m ║
\033[1;32m║ \033[1;96m╚═╝  ╚═╝\033[1;91m╚═╝     ╚═╝  ║     \033[0;31m KATAKAN YOHAN GANTENG SEKALI       \033[1;32m ║
\033[1;32m╚═════════════════════════════════════════════════════════╝            ";
system('clear');
echo $banner;
for ($v = 0; $v <= 13; $v++) {
    echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m- "; usleep(15000);
} echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m-"; usleep(15000); echo"\n";
echo"
                    \033[0;033m•╔═════☩══♛══☩═════╗•
                        \033[0;41m\e[1;32m◆ ĐĂNG NHẬP ◆$end
                    \033[0;033m•╚═════☩══✦══☩═════╝•$end";
echo"\n";
echo $datdz."".$luc."Vào Web ".$trang."Traodoisub.com".$luc." Bấm Cài Đặt\n"; echo $datdz."".$luc."Sao Chép ".$vang."Access_token".$luc." Dán Vào\n";
echo $datdz."".$luc."Nhập Access_token: $vang";
$tokenacc = trim(fgets(STDIN));

for ($v = 0; $v <= 13; $v++) {
    echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m- "; usleep(15000);
} echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m-"; usleep(15000); echo"\n";
$dem = 0;
//cookie
$khocookie = [];
if (file_exists('cookiefb.txt')) {
    echo $do."[".$whiteb."1".$do."]".$xanhd." Thêm Cookie Mới Facebook Để Chạy\n"; echo $do."[".$whiteb."2".$do."]".$xanhd." Chạy Cookie Facebook Cũ\n"; echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập".$trang." 1 ".$luc."Hoặc".$trang." 2 ".$luc.": $vang "; $choice = trim(fgets(STDIN));
    if ($choice == '1') {
        @system('rm cookiefb.txt');
    }
}
if (!file_exists('cookiefb.txt')) {
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$whiteb."Nhập Cookie FB - Nhấn".$do." [".$trang."Enter".$do."] ".$nentrang.$do."Để Dừng Thêm$end\n";
    for ($a = 1; $a < 999999; $a++) {
        echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Cookie Facebook Thứ $a: $vang";
        $nhapck = (string)trim(fgets(STDIN));
        if ($nhapck == '') {
            break;
        }
        array_push($khocookie, $nhapck);
    }
    $js = json_encode($khocookie);
    $demcki = count($khocookie);
    $k = fopen("cookiefb.txt", "a+");
    fwrite($k, $js);
    fclose($k);
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tìm Thấy ".$vang.$demcki." ".$luc."Cookie Facebook\n";
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Đã Lưu Cookie Facebook Vào File ".$trang."cookiefb.txt\n";
    sleep(2);
} else {
    $khocookie = json_decode(fread(fopen("cookiefb.txt", "r"), filesize("cookiefb.txt")), true);
    $demcki = count($khocookie);
}
//url
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlcx = "https://traodoisub.com/api/?fields=reaction&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
$urlpage = "https://traodoisub.com/api/?fields=page&access_token=$tokenacc";
$urllikecmt = "https://traodoisub.com/api/?fields=reactcmt&access_token=$tokenacc";
$urlgr = "https://traodoisub.com/api/?fields=group&access_token=$tokenacc";
//login
$info = api($urlinfo);
if ($info["error"]) {
    exit ($info["error"]);
}
//$thongtin
$user = strtolower($info["data"]["user"]);
$xuhientai = $info["data"]["xu"];
system('clear');

echo $banner;
for ($v = 0; $v <= 13; $v++) {
    echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m- "; usleep(15000);
} echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m-"; usleep(15000); echo"\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bạn Đang Chạy Tool: ".$vang."Cookie\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Số Facebook Chạy: ".$vang.$demcki."\n";

echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tài Khoản TDS: ".$vang.$user."\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Số Xu Hiện Tại: ".$vang.$xuhientai."\n";
for ($v = 0; $v <= 13; $v++) {
    echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m- "; usleep(15000);
} echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m-"; usleep(15000); echo"\n";
echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."1".$do."]".$blue." Để Chạy Nhiệm Vụ Like\n"; echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."2".$do."]".$blue." Để Chạy Nhiệm Vụ Follow\n"; echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."3".$do."]".$blue." Để Chạy Nhiệm Vụ Cảm Xúc\n"; echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."4".$do."]".$blue." Để Chạy Nhiệm Vụ Comment\n"; echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."5".$do."]".$blue." Để Chạy Nhiệm Vụ Fanpage\n"; echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."6".$do."]".$blue." Để Chạy Nhiệm Vụ Share\n"; echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."7".$do."]".$blue." Để Chạy Nhiệm Vụ Cảm Xúc CMT\n"; echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."8".$do."]".$blue." Để Chạy Nhiệm Vụ Tham Gia Group \n"; echo $do."[".$luc."✔".$do."] ".$trang."=> ".$blue."Nhập ".$do."[".$vang."12345678".$do."]".$blue." Để Chạy All Nhiệm Vụ\n\n"; echo $den."       Ghép Số Nhiệm Vụ Lại Để Chạy Random\n\n"; echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Số Để Chạy Nhiệm Vụ: $vang"; $nhiemvu = trim(fgets(STDIN)); echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Thời Gian Làm Nhiệm Vụ ".$nendo.$trang."Min Max$end\n"; echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Thời Gian ".$trang."Min".$luc.": $vang"; $thoigianmin = trim(fgets(STDIN)); echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Thời Gian ".$trang."Max".$luc.": $vang"; $thoigianmax = trim(fgets(STDIN)); echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau Bao Nhiêu Nhiệm Vụ Thì Chống Block: $vang"; $xxxxx = trim(fgets(STDIN)); echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang"; $delaybl = trim(fgets(STDIN)); echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chuyển Nick Sau Bao Nhiêu Nhiệm Vụ: $vang"; $doinick = trim(fgets(STDIN)); echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chạy Bao Nhiêu Nhiệm Vụ Thì Dừng Tool: $vang"; $dungtool = trim(fgets(STDIN));
while (true) {
    if (count($khocookie) == 0) {
        echo $do."[".$luc."●".$do."] ".$trang."➺❥ ".$whiteb."Nhập Cookie FB - Nhấn".$do." [".$trang."Enter".$do."] ".$nentrang.$do."Để Dừng Thêm$end\n";
        for ($a = 1; $a < 999999; $a++) {
            echo $do."[".$luc."●".$do."] ".$trang."➺❥ ".$luc."Nhập Cookie Facebook Thứ $a: $vang";
            $nhapck = (string)trim(fgets(STDIN));
            if ($nhapck == '') {
                break;
            }
            array_push($khocookie, $nhapck);
        }
        $js = json_encode($khocookie);
        $demcki = count($khocookie);
        $k = fopen("cookiefb.txt", "a+");
        fwrite($k, $js);
        fclose($k);
        echo $do."[".$luc."●".$do."] ".$trang."➺❥ ".$luc."Tìm Thấy ".$vang.$demcki." ".$luc."Cookie\n";
    }
    $themtk = 0;
    for ($xz = 0; $xz < count($khocookie); $xz++) {
        if ($themck == 1) {
            break;
        }
        $cookie = $khocookie[$xz];
        $access_token = laytoken($cookie);
        if (strpos($access_token, 'EAAAA') !== 0) {
            echo "Cookie lỗi!!?! \n";
        }
        $tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {
            'name'
        };
        $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {
            'id'
        };
        $urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
        $cauhinh = api($urlcauhinh);
        if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
            for ($v = 0; $v <= 13; $v++) {
                echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m- "; usleep(15000);
            } echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m-"; usleep(15000); echo"\n";
            echo $vang."🌍 Chạy FB : ".$luc.$tenfb; usleep(1000); echo $vang." ID : ".$luc.$idfb."\n";
            for ($v = 0; $v <= 13; $v++) {
                echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m- "; usleep(15000);
            } echo "\033[1;90m- "; usleep(15000); echo "\033[1;97m-"; usleep(15000); echo"\n";
        } else {
            echo $do."Cấu hình thất bại cookie có thể bị die thay cookie tại file ".$trang."cookiefb.txt\n";
            exit;
        }
        $spam = 0;
        while (true) {
            if ($spam == 1) {
                break;
            }
            //listlike
            if (strpos($nhiemvu, '1') !== false) {
                for ($i = 0; $i < 30; $i++) {
                    $listlike = api($urllike);
                    if (count($listlike) !== 0) {
                        break;
                    }}
            }
            //listfollow
            if (strpos($nhiemvu, '2') !== false) {
                while (true) {
                    $listsub = api($urlsub);
                    if (count($listsub) !== 0) {
                        break;
                    }
                }}
            //listreaction
            if (strpos($nhiemvu, '3') !== false) {
                for ($i = 1; $i < 30; $i++) {
                    $listcx = api($urlcx);
                    if (count($listcx) !== 0) {
                        break;
                    }}
            }
            //listcmt
            if (strpos($nhiemvu, '4') !== false) {
                for ($i = 1; $i < 30; $i++) {
                    $listcmt = api($urlcmt);
                    if (count($listcmt) !== 0) {
                        break;
                    }}
            }
            //listpage
            if (strpos($nhiemvu, '5') !== false) {
                for ($i = 1; $i < 30; $i++) {
                    $listpage = api($urlpage);
                    if (count($listpage) !== 0) {
                        break;
                    }}
            }
            //share
            if (strpos($nhiemvu, '6') !== false) {
                for ($i = 1; $i < 30; $i++) {
                    $listshare = api($urlshare);
                    if (count($listshare) > 0) {
                        break;
                    }}
            }
            //listgroup
            if (strpos($nhiemvu, '8') !== false) {
                for ($i = 1; $i < 30; $i++) {
                    $listgr = api($urlgr);
                    if (count($listgr) !== 0) {
                        break;
                    }}
            }
            //listlikecmt
            if (strpos($nhiemvu, '7') !== false) {
                for ($i = 1; $i < 30; $i++) {
                    $listlikecmt = api($urllikecmt);
                    if (count($listlikecmt) !== 0) {
                        break;
                    }}
            }
            for ($lap = 0; $lap < 20; $lap++) {
                // like
                if ($listlike !== NULL) {
                    $idlike = $listlike[$lap]["id"];
                    if ($idlike !== '') {
                        $g = like($access_token, $idlike, $cookie);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Token die !!?!\n";
                            array_splice($khoToken, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo "\033[1;91m".$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1;
                            break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "\033[1;91m"."Tài khoản bị checkpoint";
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1;
                            break;
                        }
                        $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                        if ($nhanlike["success"] == 200) {
                            $xu = $nhanlike["data"]["xu"];
                            $xujob = $nhanlike["data"]["msg"];
                            $dem++;

                            hoanthanh($dem, ' LIKE ', $idlike, $xujob, $xu);
                            if ($dem >= $dungtool) {
                                echo"\033[1;91mBạn Đã Làm Xong \033[1;93m".$dem."\033[1;91m Nhiệm Vụ, Bạn Có Muốn Tiếp Tục Không (y/n): \033[1;93m";
                                $stop = trim(fgets(STDIN));
                                if ($stop == "n") {
                                    $dungtool = 999999;
                                    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
                                    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Đạt\n";
                                    exit;
                                } else {
                                    echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
                                    $chaythem = trim (fgets(STDIN));
                                    $dungtool = $dungtool + $chaythem;
                                }
                                echo $luc."Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ (moi/cu): $vang";
                                $themtk = trim (fgets(STDIN));
                                if ($themtk == "moi") {
                                    $spam = 1;
                                    $themtk = 1;
                                    $khocookie = [];
                                    break;
                                } else {
                                    continue;
                                }
                            }
                            if ($dem % $doinick == 0) {
                                $spam = 1; break;
                            }
                            if ($dem % $xxxxx == 0) {
                                delay($delaybl);
                            }

                            $delay = rand($thoigianmin, $thoigianmax);
                            delay($delay);
                        }
                    }}
                //follow
                if ($listsub !== NULL) {
                    $idsub = $listsub[$lap]["id"];
                    if ($idsub !== '') {
                        $g = follow($access_token, $idsub, $cookie);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Cookie die !!?!\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo "\033[1;91m".$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "\033[1;91m"."Tài khoản bị checkpoint";
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                        if ($nhansub["success"] == 200) {
                            $xu = $nhansub["data"]["xu"];
                            $xujob = $nhansub["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, 'FOLLOW', $idsub, $xujob, $xu);
                            if ($dem >= $dungtool) {
                                echo"\033[1;91mBạn Đã Làm Xong \033[1;93m".$dem."\033[1;91m Nhiệm Vụ, Bạn Có Muốn Tiếp Tục Không (y/n): \033[1;93m";
                                $stop = trim(fgets(STDIN));
                                if ($stop == "n") {
                                    $dungtool = 999999;
                                    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
                                    echo $luc."Nhớ Sub Kênh Tui Nha\n";
                                    exit;
                                } else {
                                    echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
                                    $chaythem = trim (fgets(STDIN));
                                    $dungtool = $dungtool + $chaythem;
                                }
                                echo $luc."Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ (moi/cu): $vang";
                                $themtk = trim (fgets(STDIN));
                                if ($themtk == "moi") {
                                    $spam = 1;
                                    $themtk = 1;
                                    $khocookie = [];
                                    break;
                                } else {
                                    continue;
                                }
                            }
                            if ($dem % $doinick == 0) {
                                $spam = 1; break;
                            }
                            if ($dem % $xxxxx == 0) {
                                delay($delaybl);
                            }

                            $delay = rand($thoigianmin, $thoigianmax);
                            delay($delay);
                        }
                    }}
                //cảm xúc
                if ($listcx !== NULL) {
                    $idcx = $listcx[$lap]["id"];
                    $type = $listcx[$lap]["type"];
                    if ($idcx !== '') {
                        $g = camxuc($idcx, $type, $cookie);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Cookie die !!?!\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo "\033[1;91m".$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "\033[1;91m"."Tài khoản bị checkpoint";
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        $nhancx = nhantien($type, $idcx, $tokenacc);
                        if ($nhancx["success"] == 200) {
                            $xu = $nhancx["data"]["xu"];
                            $xujob = $nhancx["data"]["msg"];
                            $dem++;
                            if ($type == 'WOW') {
                                $type = 'WOW';
                            } elseif ($type == 'SAD') {
                                $type = 'SAD';
                            } elseif ($type == 'ANGRY') {
                                $type = 'ANGRY';
                            } elseif ($type == 'LOVE') {
                                $type = 'LOVE';
                            } elseif ($type == 'HAHA') {
                                $type = 'HAHA';
                            }
                            hoanthanh($dem, $type, $idcx, $xujob, $xu);
                            if ($dem >= $dungtool) {
                                echo"\033[1;91mBạn Đã Làm Xong \033[1;93m".$dem."\033[1;91m Nhiệm Vụ, Bạn Có Muốn Tiếp Tục Không (y/n): \033[1;93m";
                                $stop = trim(fgets(STDIN));
                                if ($stop == "n") {
                                    $dungtool = 999999;
                                    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
                                    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Đạt\n";
                                    exit;
                                } else {
                                    echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
                                    $chaythem = trim (fgets(STDIN));
                                    $dungtool = $dungtool + $chaythem;
                                }
                                echo $luc."Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ (moi/cu): $vang";
                                $themtk = trim (fgets(STDIN));
                                if ($themtk == "moi") {
                                    $spam = 1;
                                    $themtk = 1;
                                    $khocookie = [];
                                    break;
                                } else {
                                    continue;
                                }
                            }
                            if ($dem % $doinick == 0) {
                                $spam = 1; break;
                            }
                            if ($dem % $xxxxx == 0) {
                                delay($delaybl);
                            }

                            $delay = rand($thoigianmin, $thoigianmax);
                            delay($delay);
                        }
                    }}
                if ($listshare !== NULL) {
                    $id = $listshare[$lap]["id"];
                    $g = share($access_token, $id);
                    if ($g -> {
                        'error'
                    } -> {
                        'code'
                    } == 190) {
                        echo "Token die !!?!\n";
                        array_splice($khoToken, $xz, 1);
                        $spam = 1; break;
                    }
                    if ($g -> {
                        'error'
                    } -> {
                        'code'
                    } == 368) {
                        echo "\033[1;91m".$g-> {
                            'error'
                        }-> {
                            'message'
                        };
                        echo "\n";
                        array_splice($khoToken, $xz, 1);
                        $spam = 1; break;
                    }
                    if ($g -> {
                        'error'
                    } -> {
                        'code'
                    } == 405) {
                        echo "\033[1;91m"."Tài khoản bị checkpoint";
                        array_splice($khoToken, $xz, 1);
                        $spam = 1; break;
                    }
                    $nhanshare = nhantien('SHARE', $id, $tokenacc);
                    if ($nhanshare["success"] == 200) {
                        $xu = $nhanshare["data"]["xu"];
                        $xujob = $nhanshare["data"]["msg"];
                        $dem++;
                        hoanthanh($dem, 'SHARE', $id, $xujob, $xu);
                        if ($dem >= $dungtool) {
                            echo"\033[1;91mBạn Đã Làm Xong \033[1;93m".$dem."\033[1;91m Nhiệm Vụ, Bạn Có Muốn Tiếp Tục Không (y/n): \033[1;93m";
                            $stop = trim(fgets(STDIN));
                            if ($stop == "n") {
                                $dungtool = 999999;
                                echo $trang."➺❥ Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
                                exit;
                            } else {
                                echo $luc."➺❥ Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
                                $chaythem = trim (fgets(STDIN));
                                $dungtool = $dungtool + $chaythem;
                            }
                            echo $luc."➺❥ Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ (moi/cu): $vang";
                            $themtk = trim (fgets(STDIN));
                            if ($themtk == "moi") {
                                $spam = 1;
                                $themtk = 1;
                                $khocookie = [];
                                break;
                            } else {
                                continue;
                            }
                        }
                        if ($dem % $doinick == 0) {
                            $spam = 1; break;
                        }
                        if ($dem % $xxxxx == 0) {
                            delay($thoigiannghi);
                        }
                        $delay = rand($thoigianmin, $thoigianmax);
                        delay($delay);
                    }}
                //cmt
                if ($listcmt !== NULL) {
                    $idcmt = $listcmt[$lap]["id"];
                    $msg = $listcmt[$lap]["msg"];
                    if ($idcmt !== '') {
                        $g = cmt($access_token, $idcmt, $cookie, $msg);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Cookie die !!?!\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo "\033[1;91m".$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "\033[1;91m"."Tài khoản bị checkpoint";
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                        if ($nhancmt["success"] == 200) {
                            $xu = $nhancmt["data"]["xu"];
                            $xujob = $nhancmt["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, ' CMT  ', $idcmt, $xujob, $xu);
                            if ($dem >= $dungtool) {
                                echo"\033[1;91mBạn Đã Làm Xong \033[1;93m".$dem."\033[1;91m Nhiệm Vụ, Bạn Có Muốn Tiếp Tục Không (y/n): \033[1;93m";
                                $stop = trim(fgets(STDIN));
                                if ($stop == "n") {
                                    $dungtool = 999999;
                                    echo $trang."➺❥ Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
                                    exit;
                                } else {
                                    echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
                                    $chaythem = trim (fgets(STDIN));
                                    $dungtool = $dungtool + $chaythem;
                                }
                                echo $luc."Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ (moi/cu): $vang";
                                $themtk = trim (fgets(STDIN));
                                if ($themtk == "moi") {
                                    $spam = 1;
                                    $themtk = 1;
                                    $khocookie = [];
                                    break;
                                } else {
                                    continue;
                                }
                            }
                            if ($dem % $doinick == 0) {
                                $spam = 1; break;
                            }
                            if ($dem % $xxxxx == 0) {
                                delay($delaybl);
                            }

                            $delay = rand($thoigianmin, $thoigianmax);
                            delay($delay);
                        }
                    }}
                //page
                if ($listpage !== NULL) {
                    $idpage = $listpage[$lap]["id"];
                    if ($idpage !== '') {
                        $g = page($idpage, $cookie);
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 190) {
                            echo "Cookie die !!?!\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 368) {
                            echo "\033[1;91m".$g-> {
                                'error'
                            }-> {
                                'message'
                            };
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        if ($g -> {
                            'error'
                        } -> {
                            'code'
                        } == 405) {
                            echo "\033[1;91m"."Tài khoản bị checkpoint";
                            echo "\n";
                            array_splice($khocookie, $xz, 1);
                            $spam = 1; break;
                        }
                        $nhanpage = nhantien('PAGE', $idpage, $tokenacc);
                        if ($nhanpage["success"] == 200) {
                            $xu = $nhanpage["data"]["xu"];
                            $xujob = $nhanpage["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, ' PAGE ', $idpage, $xujob, $xu);
                            if ($dem >= $dungtool) {
                                echo"\033[1;91mBạn Đã Làm Xong \033[1;93m".$dem."\033[1;91m Nhiệm Vụ, Bạn Có Muốn Tiếp Tục Không (y/n): \033[1;93m";
                                $stop = trim(fgets(STDIN));
                                if ($stop == "n") {
                                    $dungtool = 999999;
                                    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
                                    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Đạt\n";
                                    exit;
                                } else {
                                    echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
                                    $chaythem = trim (fgets(STDIN));
                                    $dungtool = $dungtool + $chaythem;
                                }
                                echo $luc."Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ (moi/cu): $vang";
                                $themtk = trim (fgets(STDIN));
                                if ($themtk == "moi") {
                                    $spam = 1;
                                    $themtk = 1;
                                    $khocookie = [];
                                    break;
                                } else {
                                    continue;
                                }
                            }
                            if ($dem % $doinick == 0) {
                                $spam = 1; break;
                            }
                            if ($dem % $xxxxx == 0) {
                                delay($delaybl);
                            }

                            $delay = rand($thoigianmin, $thoigianmax);
                            delay($delay);
                        }
                    }
                }
                //likecmt
                if ($listlikecmt !== NULL) {
                    $idlikecmt = $listlikecmt[$lap]["id"];
                    $type = $listlikecmt[$lap]["type"];
                    if ($idlikecmt !== '') {
                        if ($type == 'LIKE') {
                            like($access_token, $idlikecmt, $cookie);
                        } else {
                            camxuc($idlikecmt, $type, $cookie);
                        }
                        $nhanpage = nhantien($type.'CMT', $idlikecmt, $tokenacc);
                        if ($nhanpage["success"] == 200) {
                            $xu = $nhanpage["data"]["xu"];
                            $xujob = $nhanpage["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, $type.' CMT', $idlikecmt, $xujob, $xu);
                            if ($dem >= $dungtool) {
                                echo"\033[1;91mBạn Đã Làm Xong \033[1;93m".$dem."\033[1;91m Nhiệm Vụ, Bạn Có Muốn Tiếp Tục Không (y/n): \033[1;93m";
                                $stop = trim(fgets(STDIN));
                                if ($stop == "n") {
                                    $dungtool = 999999;
                                    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
                                    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Đạt\n";
                                    exit;
                                } else {
                                    echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
                                    $chaythem = trim (fgets(STDIN));
                                    $dungtool = $dungtool + $chaythem;
                                }
                                echo $luc."Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ (moi/cu): $vang";
                                $themtk = trim (fgets(STDIN));
                                if ($themtk == "moi") {
                                    $spam = 1;
                                    $themtk = 1;
                                    $khocookie = [];
                                    break;
                                } else {
                                    continue;
                                }
                            }
                            if ($dem % $doinick == 0) {
                                $spam = 1; break;
                            }
                            if ($dem % $xxxxx == 0) {
                                delay($delaybl);
                            }

                            $delay = rand($thoigianmin, $thoigianmax);
                            delay($delay);
                        }
                    }
                }
                //group
                if ($listgr !== NULL) {
                    $idgr = $listgr[$lap]["id"];
                    if ($idgr !== '') {
                        joingr($idgr, $cookie);
                        $nhancmt = nhantien('GROUP', $idgr, $tokenacc);
                        if ($nhancmt["success"] == 200) {
                            $xu = $nhangr["data"]["xu"];
                            $xujob = $nhangr["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, 'GROUP ', $idgr, $xujob, $xu);
                            if ($dem >= $dungtool) {
                                echo"\033[1;91mBạn Đã Làm Xong \033[1;93m".$dem."\033[1;91m Nhiệm Vụ, Bạn Có Muốn Tiếp Tục Không (y/n): \033[1;93m";
                                $stop = trim(fgets(STDIN));
                                if ($stop == "n") {
                                    $dungtool = 999999;
                                    echo $trang."Bạn Đã Chọn Dừng Tool Số Xu Của Bạn Là: ".$vang.$xu."\n";
                                    echo $luc."Cảm Ơn Bạn Đã Sử Dụng Tool Của Đạt\n";
                                    exit;
                                } else {
                                    echo $luc."Bạn Muốn Chạy Thêm Bao Nhiệm Nhiệm Vụ Nữa: $vang";
                                    $chaythem = trim (fgets(STDIN));
                                    $dungtool = $dungtool + $chaythem;
                                }
                                echo $luc."Bạn Muốn Chạy Cookie Mới Hay Cookie Cũ (moi/cu): $vang";
                                $themtk = trim (fgets(STDIN));
                                if ($themtk == "moi") {
                                    $spam = 1;
                                    $themtk = 1;
                                    $khocookie = [];
                                    break;
                                } else {
                                    continue;
                                }
                            }
                            if ($dem % $doinick == 0) {
                                $spam = 1; break;
                            }
                            if ($dem % $xxxxx == 0) {
                                delay($delaybl);
                            }

                            $delay = rand($thoigianmin, $thoigianmax);
                            delay($delay);
                        }
                    }}
            }
        }}}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/E7FBAF",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        //"accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}
function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}


function share($access_token, $id) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    $data = array(
        'privacy' => '{"value":"EVERYONE"}',
        'message' => '',
        'link' => 'https://mbasic.facebook.com/'.$id.'',
        'access_token' => $access_token
    );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $a = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $a;
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function page($idpage, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$idpage);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0]) {
        $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0];
        $link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$idpage.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
    }
    curl_close($ch);

}
function camxuc($idcx, $type, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$idcx);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $cx = curl_exec($ch);
    $haha = explode('<a href="', $cx);
    if ($type == 'LOVE') {
        $haha2 = explode('" style="display:block"', $haha[2])[0];
    } else if ($type == 'WOW') {
        $haha2 = explode('" style="display:block"', $haha[5])[0];
    } else if ($type == 'HAHA') {
        $haha2 = explode('" style="display:block"', $haha[4])[0];
    } else if ($type == 'SAD') {
        $haha2 = explode('" style="display:block"', $haha[6])[0];
    } else {
        $haha2 = explode('" style="display:block"', $haha[7])[0];
    }
    $link2 = html_entity_decode($haha2);
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}
function hoanthanh($dem, $type, $id, $xujob, $xu) {
    $maul = rand(31, 37);
    $maui = "\033[1;".$maul."m";
    $a = "\033[1;91m 『\033[0;33m\033[41mHải Magic\033[0m\033[1;91m』"."\033[1;93m ● \033[1;91m[\033[1;93m".$dem."\033[1;91m] ● \033[1;92m".date("H:i")."\033[1;91m ●\033[1;96m $type\033[1;97m ● \033[1;92m$id\033[0m\033[1;91m ●".$xujob."\033[1;37m ● \033[1;92m".$xu."\033[0m\e[0m\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(1000);
    }
}
function delay($delay) {
    for ($time = $delay; $time > -1; $time--) {
        echo "\r\033[1;92m〘\033[1;94mHải \033[1;31mMagic\033[1;93m〙(☞^o^) ☞\033[0;33m👉        \033[0;37m Lo          \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);

        echo "\r\033[1;91m〘\033[1;95mHải \033[1;32mMagic\033[1;94m〙(☞^o^) ☞\033[0;33m   👉     \033[0;37m Load        \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;92m〘\033[1;94mHải \033[1;31mMagic\033[1;93m〙(☞^o^) ☞\033[0;33m     👉   \033[0;37m Loading❤     \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;94m〘\033[1;92mHải \033[1;37mMagic\033[1;92m〙(☞^o^) ☞\033[0;33m       👉 \033[0;37m Loading❤️❤   \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m〘\033[1;95mHải \033[1;32mMagic\033[1;94m〙(☞^o^) ☞\033[0;33m        👉\033[0;37m Loading❤️❤️❤️  \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m〘\033[1;94mHải \033[1;31mMagic\033[1;93m〙(☞^o^) ☞\033[0;33m        👉\033[0;37m Loading❤️❤️❤️❤️ \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m〘\033[1;92mHải \033[1;37mMagic\033[1;92m〙(☞^o^) ☞\033[0;33m        👉\033[0;37m Yohandara Ganteng❤️❤️❤️❤️❤️\033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(100000);
        echo "\r                                          \r";
    }}
function laytoken($cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    curl_close($ch);
    if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
        $access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0];
    }
    return $access_token;
}
function joingr($id, $cookie) {
    $ch = curl_init();
    $head_fb = array(
        "Host:mbasic.facebook.com",
        "cache-control:max-age=0",
        "upgrade-insecure-requests:1",
        "save-data:on",
        "user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site:cross-site",
        "sec-fetch-mode:navigate",
        "sec-fetch-user:?1",
        "sec-fetch-dest:document",
        "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
        "cookie:".$cookie);
    curl_setopt_array ($ch, array (
        CURLOPT_URL => "https://mbasic.facebook.com/groups/$id?_rdr",
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head_fb,
        CURLOPT_HEADER => true,
        CURLOPT_ENCODING => TRUE));
    $data = curl_exec($ch);
    // var_dump($data);
    if (strpos($data, "xs=deleted") == true) {
        echo ($red."Cookie die rồi\n");
    }
    $tìm = explode("/a/group/join/?", $data);
    $tìm1 = explode('"', $tìm[1]);
    $fb = explode('name="fb_dtsg" value="', $data);
    $fb = explode('"', $fb[1]);
    $fbdtsg = htmlspecialchars_decode($fb[0]);
    $jaz = explode('name="jazoest" value="', $data);
    $jaz = explode('"', $jaz[1]);
    $url = "https://mbasic.facebook.com/a/group/join/?".htmlspecialchars_decode($tìm1[0]);
    $data = "fb_dtsg=$fbdtsg&jazoest=".$jaz[0];
    curl_setopt_array ($ch, array (
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head_fb));
    $xxx = curl_exec($ch);
}
?>