<?php
// +----------------------------------------------------------------------
// | ShopSuite商城系统 [ 赋能开发者，助力企业发展 ]
// +----------------------------------------------------------------------
// | 版权所有 随商信息技术（上海）有限公司
// +----------------------------------------------------------------------
// | 未获商业授权前，不得将本软件用于商业用途。禁止整体或任何部分基础上以发展任何派生版本、
// | 修改版本或第三方版本用于重新分发。
// +----------------------------------------------------------------------
// | 官方网站: https://www.shopsuite.cn  https://www.kuteshop.cn
// +----------------------------------------------------------------------
// | 版权和免责声明:
// | 本公司对该软件产品拥有知识产权（包括但不限于商标权、专利权、著作权、商业秘密等）
// | 均受到相关法律法规的保护，任何个人、组织和单位不得在未经本团队书面授权的情况下对所授权
// | 软件框架产品本身申请相关的知识产权，禁止用于任何违法、侵害他人合法权益等恶意的行为，禁
// | 止用于任何违反我国法律法规的一切项目研发，任何个人、组织和单位用于项目研发而产生的任何
// | 意外、疏忽、合约毁坏、诽谤、版权或知识产权侵犯及其造成的损失 (包括但不限于直接、间接、
// | 附带或衍生的损失等)，本团队不承担任何法律责任，本软件框架只能用于公司和个人内部的
// | 法律所允许的合法合规的软件产品研发，详细见https://www.shopsuite.cn/policy
// +----------------------------------------------------------------------
 namespace Kuteshop\Core\Repository\Criteria; use Illuminate\Database\Eloquent\Builder; use Illuminate\Http\Request; use Kuteshop\Core\Repository\Contracts\CriteriaInterface; use Kuteshop\Core\Repository\Contracts\RepositoryInterface; abstract class Criteria implements CriteriaInterface { protected $request; public function __construct(Request $oTML0) { $this->request = $oTML0; } public function apply($PB3TY, RepositoryInterface $XhPL6) { goto VNtYC; yBo9c: goto BZeLb; goto MQdQy; o79X5: goto PsPoG; goto edVOq; MQdQy: uuW5Q: goto FWRzS; LAbwh: BZeLb: goto zZhsp; zZhsp: $PB3TY = $PB3TY->where(function ($oS_lB) { $this->condition($oS_lB); }); goto o79X5; edVOq: tOYiX: goto VvxKh; VNtYC: goto tOYiX; goto sYKBA; VlsPi: return $this->after($PB3TY); goto jj1tT; jj1tT: goto uuW5Q; goto LAbwh; VvxKh: $PB3TY = $this->before($PB3TY); goto yBo9c; sYKBA: PsPoG: goto VlsPi; FWRzS: } protected function condition(Builder $oS_lB) : void { } protected function before($PB3TY) { return $PB3TY; } protected function after($PB3TY) { return $PB3TY; } }
