お名前：<?php echo $name . PHP_EOL; ?>
メールアドレス：<?php echo $email . PHP_EOL; ?>
電話番号：<?php echo $phone . PHP_EOL; ?>
郵便番号：<?php if(isset($zip)){
			echo $zip . PHP_EOL;
			}else{
			echo '' . PHP_EOL;
			} ?>
住所：<?php if(isset($addr)){
			echo $addr . PHP_EOL;
			}else{
			echo '' . PHP_EOL;
			} ?>
種類：<?php if(isset($pet)){
			echo $pet . PHP_EOL;
			}else{
			echo '' . PHP_EOL;
			} ?>
頭数：<?php if(isset($qty)){
			echo $qty . PHP_EOL;
			}else{
			echo '' . PHP_EOL;
			} ?>
シッティング・散歩代行希望日1：<?php
			if(is_array($date1)){
			echo $date1['year'] . "/" . $date1['month'] . "/" . $date1['day'] . PHP_EOL;
			}else{
			echo $date1 . PHP_EOL;
			}
			?>
シッティング・散歩代行希望日2：<?php
			if(is_array($date2)){
			echo $date2['year'] . "/" . $date2['month'] . "/" . $date2['day'] . PHP_EOL;
			}else{
			echo $date2 . PHP_EOL;
			}
			?>
ご希望打ち合わせ日1：<?php
			if(is_array($date3)){
			echo $date3['year'] . "/" . $date3['month'] . "/" . $date3['day'] . PHP_EOL;
			}else{
			echo $date3 . PHP_EOL;
			}
			?>
ご希望打ち合わせ日2：<?php
			if(is_array($date4)){
			echo $date4['year'] . "/" . $date4['month'] . "/" . $date4['day'] . PHP_EOL;
			}else{
			echo $date4 . PHP_EOL;
			}
			?>
その他：<?php if(isset($other)){
		echo $other . PHP_EOL;
		}else{
		echo '' . PHP_EOL;
		} ?>
