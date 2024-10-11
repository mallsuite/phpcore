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
 namespace Kuteshop\Core\Service; use App\Exceptions\ErrorException; use Illuminate\Http\Request; class BaseService { public $repository; public function __construct($pBIHk) { $this->repository = $pBIHk; } public function list(Request $qDXUb, $rV3aw) { goto MhTho; JbFLu: return $data; goto R7uyz; MhTho: $FeV5Q = $qDXUb->get("\x73\x69\172\145") ?? 10; goto HmkBJ; HmkBJ: $data = $this->repository->list($rV3aw, $FeV5Q); goto JbFLu; R7uyz: } public function add($qDXUb) { try { $data = $this->formatData($qDXUb); return $this->repository->add($data); } catch (\Exception $fMr5r) { throw new ErrorException(__("\346\267\xbb\xe5\x8a\xa0\345\xa4\261\xe8\xb4\xa5\x3a\40") . $fMr5r->getMessage()); } } public function formatData($qDXUb) { goto Eumm9; qT4mG: goto puaQj; goto I9hCx; p0mDb: throw new ErrorException(__("\xe8\xaf\267\xe6\xb1\x82\xe5\217\202\346\x95\260\xe5\xbf\205\351\241\273\346\230\257\346\225\260\xe7\273\204\xe6\x88\x96\122\145\161\x75\145\x73\x74\345\257\xb9\350\261\xa1")); goto qT4mG; JCwzU: $data = $qDXUb; goto khLHP; oC7VQ: goto puaQj; goto cCku3; cCku3: bWuyQ: goto JCwzU; Z9Agm: return $data; goto PBFh_; Eumm9: if ($qDXUb instanceof Request) { goto nESxa; } goto c2xg8; I9hCx: nESxa: goto HWTMk; khLHP: puaQj: goto Z9Agm; HWTMk: $data = $qDXUb->all(); goto oC7VQ; c2xg8: if (is_array($qDXUb)) { goto bWuyQ; } goto p0mDb; PBFh_: } public function edit($RxOxB, $qDXUb) { try { goto wq4rn; RDaC9: unset($data[$CPW3O]); goto bv_Tj; w6pA7: return $this->repository->edit($RxOxB, $data); goto cs96h; h1R8w: $CPW3O = $this->repository->getKeyName(); goto Ppxqz; wq4rn: $data = $this->formatData($qDXUb); goto h1R8w; bv_Tj: PjA59: goto w6pA7; Ppxqz: if (!isset($data[$CPW3O])) { goto PjA59; } goto RDaC9; cs96h: } catch (\Exception $fMr5r) { throw new ErrorException(__("\xe4\xbf\256\xe6\224\xb9\345\244\xb1\xe8\xb4\245\72\40") . $fMr5r->getMessage()); } } public function remove($RxOxB) { goto Ap2hj; NQMGV: dG6gU: goto CjiAb; lN7Ji: throw new ErrorException(__("\345\x88\xa0\xe9\x99\244\xe5\244\xb1\350\264\xa5")); goto UecYc; F0uA0: lqYAi: goto EOo6c; m0BZu: if ($cZAgj) { goto dG6gU; } goto lN7Ji; UecYc: goto lqYAi; goto NQMGV; CjiAb: return true; goto F0uA0; Ap2hj: $cZAgj = $this->repository->remove($RxOxB); goto m0BZu; EOo6c: } public function get($RxOxB) { $data = $this->repository->getOne($RxOxB); return $data; } }
