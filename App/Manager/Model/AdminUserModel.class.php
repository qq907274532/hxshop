<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		文章模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class AdminUserModel extends Model {
	const STATUS_ENABLE="1";
	const STATUS_DISABLE="2";
	protected $_validate = array(
     array('email','require','邮箱必须填写'),  // 都有时间都验证
     array('email','','邮箱已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
     array('password','require','密码必须填写'),  // 只在登录时候验证
     array('repassword','password','确认密码和密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
   );
	public static $STATUS_MAP=array(
		self::STATUS_ENABLE=>'启用',
		self::STATUS_DISABLE=>'禁用',
		);

	/**
	 * [userInfo 查询用户是否存在]
	 * @return [type] [description]
	 */
	public function userInfo($email){
		return $this->where(['email'=>$email])->find();
	}

	/**
	 * [check_verify 验证验证码是否正确]
	 * @param  [type] $code [验证码]
	 * @param  string $id   [description]
	 * @return [type]       [description]
	 */
	public function check_verify($code, $id = ''){
      $verify = new \Think\Verify();
      return $verify->check($code, $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getAdminUserInfoById($id){
        return $this->where(['id'=>$id])->find();
    }


}
?>