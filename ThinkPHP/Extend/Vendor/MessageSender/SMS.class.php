<?php
	/*
	 *	@Author: Li Jingyi
	 *	@Date:	2014-5-15 9:25:24
	 *	@
	*/
	class SMS {
		private $account;
		private $password;
		private $mobile;
		private $content;
		
		public function __construct($account, $password, $mobile, $content){
			$this->account = $account;
			$this->password = $password;
			$this->mobile = $mobile;
			$this->content = $content;
		}
		
		// public function Post($curlPost,$url){
			// $curl = curl_init();
			// curl_setopt($curl, CURLOPT_URL, $url);
			// curl_setopt($curl, CURLOPT_HEADER, false);
			// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			// curl_setopt($curl, CURLOPT_NOBODY, true);
			// curl_setopt($curl, CURLOPT_POST, true);
			// curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
			// $return_str = curl_exec($curl);
			// curl_close($curl);
			// return $return_str;
		// }
		
		public function Post($curlPost, $url){
			return file_get_contents($url."&".$curlPost);
		}
		
		public function xml_to_array($xml){
			$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
			if(preg_match_all($reg, $xml, $matches)){
				$count = count($matches[0]);
				for($i = 0; $i < $count; $i++){
				$subxml= $matches[2][$i];
				$key = $matches[1][$i];
					if(preg_match( $reg, $subxml )){
						$arr[$key] = $this->xml_to_array( $subxml );
					}else{
						$arr[$key] = $subxml;
					}
				}
			}
			return $arr;
		}
		
		function random($length = 6 , $numeric = 0) {
			PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
			if($numeric) {
				$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
			} else {
				$hash = '';
				$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
				$max = strlen($chars) - 1;
				for($i = 0; $i < $length; $i++) {
					$hash .= $chars[mt_rand(0, $max)];
				}
			}
			return $hash;
		}
			
		public function send(){
		
			$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
			$mobile = $this->mobile;
			$mobile_code = $this->random(4,1);
			if(empty($mobile)){
				exit('手机号码不能为空');
			}
			$account = $this->account;
			$password = $this->password;
			$content = $this->content;
			
			
			$post_data = "account=$account&password=$password&mobile=$mobile&content=".rawurlencode($content);
			$gets =  $this->xml_to_array($this->Post($post_data, $target));
			echo $gets['SubmitResult']['msg']."!";
		}
		
		public function testSend(){
			$mobile_code = $this->random(4,1);
			$content = "您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。";
			$sender = new SMS($this->account, $this->password, $this->mobile, $content);
			$sender->send();
		}
	}
	$x = new SMS("cf_lidaqi","15155672782","18580468684","asd");
	$x->testSend();
?>