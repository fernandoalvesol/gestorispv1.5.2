<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Areas;
use App\Http\Requests\Painel\AreaFormRequest;

class SetoresController extends Controller {

    private $setores, $totalPage = 10;
    private $request;

    public function __construct(Areas $setores, Request $request) {


        $this->setores = $setores;
        $this->request = $request;
    }

    public function index() {

        $title = "Gestão de Setores";
        $setores = $this->setores->paginate($this->totalPage);


        return view('Painel.Setores.index', compact('title', 'setores'));
    }

    public function create() {

        $title = 'Gestão de Setores';

        return view('Painel.Setores.create-edit', compact('title'));
    }

    public function store(AreaFormRequest $request) {

        $dataSetor = $request->all();

        $insert = $this->setores->create($dataSetor);

        if ($insert)
            return redirect()
                            ->route('setores.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('setores.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
    }

    public function show($id) {

        $setores = $this->setores->find($id);

        $title = 'Exbir Setores';

        return view('Painel.Setores.show', compact('setores', 'title'));
    }

    public function edit($id) {

        $setores = $this->setores->find($id);

        return view('Painel.Setores.create-edit', compact('setores'));
    }

    public function update(AreaFormRequest $request, $id) {

        $dataSetor = $request->all();

        $setores = $this->setores->find($id);

        $update = $setores->update($dataSetor);


        if ($update)
            return redirect()
                            ->route('setores.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('setores.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
    }

    public function destroy($id) {

        $setores = $this->setores->find($id);

        $delete = $setores->delete();


        if ($delete) {

            return redirect()
            ->route('setores.index')
                            ->with(['sucess' => 'Setor Excluido com sucesso']);
        } else {
            return redirect()
                            ->route('setores.index', ['id' => $id])
                            ->withErrors(['errors' => 'Falha ao deletar']);
        }
    }

    public function search(Request $request) {

        $dataForm = $request->except('_token');

        $setores = $this->setores
                ->where('name', 'LIKE', "%{$dataForm['key-search']}%")
                ->orWhere('descricao', $dataForm['key-search'])
                ->paginate($this->totalPage);

        return view('Painel.Setores.index', compact('setores', 'dataForm'));
    }

}
