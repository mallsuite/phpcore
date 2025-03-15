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
 namespace Kuteshop\Core\Service; use App\Exceptions\ErrorException; use Illuminate\Http\Request; class BaseService { public $repository; public function __construct($FV3UU) { $this->repository = $FV3UU; } public function list(Request $GzbzM, $sAGPB) { goto rZvxj; rZvxj: $HKQ3y = $GzbzM->get("\x73\x69\x7a\145") ?? 10; goto f2Fhk; kGx1o: return $data; goto dLGON; f2Fhk: $data = $this->repository->list($sAGPB, $HKQ3y); goto kGx1o; dLGON: } public function lists(Request $GzbzM, $sAGPB) { return $this->list($GzbzM, $sAGPB); } public function find(array $Ttgr0, $f5yOz = array(), $zViGW = null, $t2HVJ = null) { return $this->repository->find($Ttgr0, $f5yOz, $zViGW, $t2HVJ); } public function count(array $Ttgr0 = array(), $tNliO = "\x2a") { return $this->repository->count($Ttgr0, $tNliO); } public function add($GzbzM) { try { $data = $this->formatData($GzbzM); return $this->repository->add($data); } catch (\Exception $N_7LW) { throw new ErrorException(__("\346\xb7\273\xe5\212\240\xe5\xa4\xb1\xe8\264\xa5\72\40") . $N_7LW->getMessage()); } } public function formatData($GzbzM) { goto DGe_J; DGe_J: if ($GzbzM instanceof Request) { goto sszIr; } goto S_fEn; paOH_: $data = $GzbzM->all(); goto KcUNI; S_fEn: if (is_array($GzbzM)) { goto b1eQd; } goto e4tnD; p7MxS: $data = $GzbzM; goto NaMJV; Fux2A: sszIr: goto paOH_; H3N0G: b1eQd: goto p7MxS; KcUNI: goto ng_6n; goto H3N0G; VowTY: return $data; goto Z0JcK; QvkpS: goto ng_6n; goto Fux2A; NaMJV: ng_6n: goto VowTY; e4tnD: throw new ErrorException(__("\xe8\xaf\267\xe6\261\202\xe5\x8f\x82\346\225\xb0\xe5\277\x85\351\241\xbb\346\x98\257\346\x95\260\347\xbb\204\xe6\x88\226\x52\x65\161\165\145\163\x74\xe5\xaf\xb9\350\xb1\241")); goto QvkpS; Z0JcK: } public function edit($VAeRA, $GzbzM) { try { goto eBTLd; cOcHJ: HRgL1: goto GB11t; Nh3KE: unset($data[$Tp6wz]); goto cOcHJ; GB11t: return $this->repository->edit($VAeRA, $data); goto MBdE_; eBTLd: $data = $this->formatData($GzbzM); goto KLlDK; KLlDK: $Tp6wz = $this->repository->getKeyName(); goto PycSD; PycSD: if (!isset($data[$Tp6wz])) { goto HRgL1; } goto Nh3KE; MBdE_: } catch (\Exception $N_7LW) { throw new ErrorException(__("\xe4\277\xae\xe6\x94\xb9\xe5\xa4\xb1\xe8\xb4\xa5\x3a\x20") . $N_7LW->getMessage()); } } public function remove($VAeRA) { goto CQNNu; tP8c2: throw new ErrorException(__("\xe5\210\xa0\351\x99\244\xe5\244\xb1\350\264\xa5")); goto wZALb; xzZ_k: return true; goto R4bVf; mk7ye: whqUc: goto xzZ_k; wZALb: goto fFiXU; goto mk7ye; CQNNu: $KALQt = $this->repository->remove($VAeRA); goto tONcx; tONcx: if ($KALQt) { goto whqUc; } goto tP8c2; R4bVf: fFiXU: goto ugAts; ugAts: } public function get($VAeRA) { $data = $this->repository->getOne($VAeRA); return $data; } public function gets($wRmC0) { $data = $this->repository->gets($wRmC0); return $data; } }
