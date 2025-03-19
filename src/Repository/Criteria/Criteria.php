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
 namespace Kuteshop\Core\Repository\Criteria; use Illuminate\Database\Eloquent\Builder; use Illuminate\Http\Request; use Kuteshop\Core\Repository\Contracts\CriteriaInterface; use Kuteshop\Core\Repository\Contracts\RepositoryInterface; abstract class Criteria implements CriteriaInterface { protected $request; public function __construct(Request $oTML0) { $this->request = $oTML0; } public function apply($PB3TY, RepositoryInterface $XhPL6) { goto uVTSY; Qo1Jq: BZeLb: goto eNrbu; Vm7jp: goto PsPoG; goto kn9wG; LzrnV: goto uuW5Q; goto Qo1Jq; eNrbu: $PB3TY = $PB3TY->where(function ($oS_lB) { $this->condition($oS_lB); }); goto Vm7jp; M7nwH: goto BZeLb; goto aYhd_; kn9wG: tOYiX: goto GQ7uz; aYhd_: uuW5Q: goto qV5iQ; GQ7uz: $PB3TY = $this->before($PB3TY); goto M7nwH; uVTSY: goto tOYiX; goto f0FHH; GoueW: return $this->after($PB3TY); goto LzrnV; f0FHH: PsPoG: goto GoueW; qV5iQ: } protected function condition(Builder $oS_lB) : void { } protected function before($PB3TY) { return $PB3TY; } protected function after($H6gv7) { goto g7KHf; g_zEG: return $H6gv7; goto wrZXf; Jn0MT: $skm93 = $this->request->get("\163\x6f\162\164", "\x41\123\x43"); goto EZ57B; EigSM: $ygPOH = $this->request->get("\x73\151\144\x78", ''); goto Jn0MT; EZ57B: $H6gv7->orderBy($ygPOH, $skm93); goto tI0uz; tI0uz: y6fRz: goto g_zEG; g7KHf: if (!$this->request->get("\x73\151\144\x78", '')) { goto y6fRz; } goto EigSM; wrZXf: } }
