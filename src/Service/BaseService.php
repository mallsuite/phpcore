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
 namespace Kuteshop\Core\Service; use App\Exceptions\ErrorException; use Illuminate\Http\Request; class BaseService { public $repository; public function __construct($pBIHk) { $this->repository = $pBIHk; } public function list(Request $qDXUb, $rV3aw) { goto D3orZ; jbjge: return $data; goto gv_zC; RGY9b: $data = $this->repository->list($rV3aw, $FeV5Q); goto jbjge; D3orZ: $FeV5Q = $qDXUb->get("\x73\151\172\145") ?? 10; goto RGY9b; gv_zC: } public function add($qDXUb) { try { $data = $this->formatData($qDXUb); return $this->repository->add($data); } catch (\Exception $fMr5r) { throw new ErrorException(__("\xe6\xb7\xbb\345\x8a\xa0\xe5\244\xb1\xe8\264\xa5\x3a\x20") . $fMr5r->getMessage()); } } public function formatData($qDXUb) { goto e97C1; e97C1: if ($qDXUb instanceof Request) { goto ibJVB; } goto Gd3Nk; sGK_C: throw new ErrorException(__("\xe8\xaf\xb7\xe6\261\202\345\217\x82\xe6\225\xb0\xe5\277\x85\351\xa1\xbb\xe6\x98\257\346\225\xb0\347\xbb\204\346\x88\226\x52\145\x71\x75\x65\163\x74\345\257\xb9\xe8\xb1\xa1")); goto NX8Q4; NX8Q4: goto wI4IS; goto gTDm4; h6Y9e: wI4IS: goto AmSM3; QnrhH: $data = $qDXUb; goto h6Y9e; jJC62: goto wI4IS; goto TlxS8; Gd3Nk: if (is_array($qDXUb)) { goto drXX8; } goto sGK_C; TlxS8: drXX8: goto QnrhH; AiniN: $data = $qDXUb->all(); goto jJC62; gTDm4: ibJVB: goto AiniN; AmSM3: return $data; goto Qp1eO; Qp1eO: } public function edit($RxOxB, $qDXUb) { try { goto knDhe; knDhe: $data = $this->formatData($qDXUb); goto n0Wzv; Wi0mM: unset($data[$CPW3O]); goto ovHRi; ovHRi: return $this->repository->edit($RxOxB, $data); goto QIxKP; n0Wzv: $CPW3O = $this->repository->getKeyName(); goto Wi0mM; QIxKP: } catch (\Exception $fMr5r) { throw new ErrorException(__("\xe4\277\256\xe6\224\271\xe5\xa4\xb1\xe8\xb4\245\x3a\40") . $fMr5r->getMessage()); } } public function remove($RxOxB) { goto RKi6G; sIKQk: throw new ErrorException(__("\345\210\xa0\351\x99\xa4\345\244\261\xe8\264\245")); goto JPZfM; RKi6G: $cZAgj = $this->repository->remove($RxOxB); goto kfGpj; kfGpj: if ($cZAgj) { goto L_e8v; } goto sIKQk; nOXFI: pUrB9: goto a9AzL; wPGXw: return true; goto nOXFI; OD9US: L_e8v: goto wPGXw; JPZfM: goto pUrB9; goto OD9US; a9AzL: } public function get($RxOxB) { $data = $this->repository->getOne($RxOxB); return $data; } public function editState($RxOxB, $I7IU0) { $cZAgj = $this->repository->edit($RxOxB, $I7IU0); return $cZAgj; } }
