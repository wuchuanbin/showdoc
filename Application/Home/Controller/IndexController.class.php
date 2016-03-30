<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
    	$this->checkLogin(false);
    	$login_user = session("login_user");
    	$this->assign("login_user" ,$login_user);

    	//assign items
    	$this->assign('list',M('item')->where("is_view = 1")->select());
        $this->display();
    }
}