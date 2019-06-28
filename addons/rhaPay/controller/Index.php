<?php
namespace addons\rhaPay\controller;
use app\common\controller\Addon;
use app\common\model\Payment;
class Index extends Addon
{
    public $isWexinLogin=true;
    public function index(){
        $money =1;//设置金额
        $member = getMember();//获取会员信息
        $model = new Payment();
        $id = $model->addPayment($member['id'], $this->mid, $money, '微信支付演示');
        $payUrl=getWxPayUrl($this->mid,['payment_id' => $id,'view'=>$this->addonRoot.'/view/index/pay.html']);
        $this->redirect($payUrl);
    }
}