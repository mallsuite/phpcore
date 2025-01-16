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
 namespace Kuteshop\Core\Service; use App\Exceptions\ErrorException; use Illuminate\Http\Request; class BaseService { public $repository; public function __construct($FV3UU) { $this->repository = $FV3UU; } public function list(Request $GzbzM, $sAGPB) { goto CVsGW; G47bE: $data = $this->repository->list($sAGPB, $HKQ3y); goto drLDl; CVsGW: $HKQ3y = $GzbzM->get("\x73\x69\172\x65") ?? 10; goto G47bE; drLDl: return $data; goto pUi5P; pUi5P: } public function add($GzbzM) { try { $data = $this->formatData($GzbzM); return $this->repository->add($data); } catch (\Exception $N_7LW) { throw new ErrorException(__("\xe6\267\273\xe5\x8a\240\345\244\xb1\xe8\xb4\xa5\x3a\40") . $N_7LW->getMessage()); } } public function formatData($GzbzM) { goto nHuOP; CJYO1: $data = $GzbzM; goto xWd2O; R4n6B: $data = $GzbzM->all(); goto eEMwe; nHuOP: if ($GzbzM instanceof Request) { goto Oi4_d; } goto SwyFD; XlvFj: throw new ErrorException(__("\xe8\257\267\xe6\261\202\345\x8f\202\346\225\xb0\xe5\xbf\205\xe9\xa1\xbb\346\230\xaf\346\x95\260\347\273\x84\346\x88\x96\122\145\161\x75\x65\x73\164\345\257\xb9\350\xb1\241")); goto VZzq4; SwyFD: if (is_array($GzbzM)) { goto xUtKx; } goto XlvFj; a7jcP: return $data; goto coJDj; JV7JW: Oi4_d: goto R4n6B; VZzq4: goto GgXCg; goto JV7JW; hboRe: xUtKx: goto CJYO1; xWd2O: GgXCg: goto a7jcP; eEMwe: goto GgXCg; goto hboRe; coJDj: } public function edit($VAeRA, $GzbzM) { try { goto JDtKU; JDtKU: $data = $this->formatData($GzbzM); goto oVvEF; LqZnv: if (!isset($data[$Tp6wz])) { goto NGpge; } goto V5F10; UJMoY: return $this->repository->edit($VAeRA, $data); goto j_sI5; oVvEF: $Tp6wz = $this->repository->getKeyName(); goto LqZnv; Ogdv3: NGpge: goto UJMoY; V5F10: unset($data[$Tp6wz]); goto Ogdv3; j_sI5: } catch (\Exception $N_7LW) { throw new ErrorException(__("\xe4\277\256\346\224\xb9\345\244\xb1\350\264\245\72\x20") . $N_7LW->getMessage()); } } public function remove($VAeRA) { goto OaZyn; lUHYj: goto Df3y0; goto Ahvjz; OaZyn: $KALQt = $this->repository->remove($VAeRA); goto VxkkI; I2_W3: throw new ErrorException(__("\345\210\xa0\351\x99\244\345\244\xb1\350\xb4\xa5")); goto lUHYj; Ahvjz: ZAbUb: goto YaZ23; XDlSN: Df3y0: goto Ysn8I; VxkkI: if ($KALQt) { goto ZAbUb; } goto I2_W3; YaZ23: return true; goto XDlSN; Ysn8I: } public function get($VAeRA) { $data = $this->repository->getOne($VAeRA); return $data; } public function gets($wRmC0) { $data = $this->repository->gets($wRmC0); return $data; } }
