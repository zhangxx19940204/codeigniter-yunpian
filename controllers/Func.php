<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Func extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //云片的接口
    $this->load->library('yunpian/YunpianAutoload');
    
  }

  public function test(){

    $smsOperator = new SmsOperator();
    // 你需要调用的接口
    #。。。。。。
  }

}
