<?php
									error_reporting(E_ALL);

									ini_set("display_errors", 1);
									

									$host = 'dongguk.cfaahuakkfgn.ap-northeast-2.rds.amazonaws.com';
									$user = 'dongguk';
									$pw = '123456';
									$dbName = 'dongguk';
									$mysqli = new mysqli($host, $user, $pw, $dbName);
									if($mysqli){
									echo "MySQL 연결 성공 <br /> 이 메세지가 보이면 정상적으로 DB연결이 완료된 상태입니다.";
									}else{
									echo "MySQL 실패";
									}
									?>