<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\UserFormRequest;
use App\User;
use App\Models\Role;
use App\Models\Filial;

class UserController extends Controller {

    private $user, $totalPage = 10;
    private $request;

    public function __construct(User $user, Request $request) {

        $this->user = $user;
        $this->request = $request;
    }

    public function index() {


        $title = "Gestão de Usuários";
                

        $user = $this->user->paginate($this->totalPage);


        return view('Painel.User.index', compact('title', 'user'));
    }

    public function create() {

        $title = "Cadastrar Novo";
        
        $roles = Role::get()->pluck('name', 'name');
        
        $filial = Filial::get()->pluck('name', 'name');
        
        return view('Painel.User.create-edit', compact('title', 'roles', 'filial'));
    }

    
    public function store(UserFormRequest $request) {

        $dataUser = $request->all();
        
          //Criptografa a senha
        $dataUser['password'] = bcrypt($dataUser['password']);

        $insert = $this->user->create($dataUser);


        if ($insert)
            return redirect()
                            ->route('usuarios.index')
                            ->with(['sucess' => 'Cadastro realizado com sucesso']);
        else
            return redirect()
                            ->route('usuarios.index')
                            ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                            ->withInput();
    }

    public function show($id) {


        $user = $this->user->find($id);

        $title = 'Exbir Usuarios';

        return view('Painel.User.show', compact('user', 'title'));
    }

    public function edit($id) {
        
        $user = $this->user->find($id);
        
        $roles = Role::get()->pluck('name', 'name');
        
        $filial = Filial::get()->pluck('name', 'name');
        
        return view('Painel.User.create-edit', compact('user', 'roles', 'filial'));
        
    }

    public function update(UserFormRequest $request, $id) {
        
        $dataUser = $request->all();
        
        $user = $this->user->find($id);
        
          //Criptografa a senha
        if( isset($dataUser['password']) && $dataUser['password'] != '' )
            $dataUser['password'] = bcrypt($dataUser['password']);
        
        $update = $user->update($dataUser);        
        
        
        if($update)
            
            return redirect()
                ->route('usuarios.index')
                ->with(['sucess' => 'Cadastro realizado com sucesso']);
        
        else
            
            return redirect()
                ->route('usuarios.index')
                ->withErrors(['errors' => 'Falhar ao cadastrar...'])
                ->withInput();
        
    }

    public function destroy($id) {
        
        $user = $this->user->find($id);
        
        $delete = $user->delete();
        
        
        if( $delete ){
            
            return redirect()
                    ->route('usuarios.index')
                    ->with(['sucess' => 'Cadastro Excluido com sucesso']);
                                
        } else{
            return redirect()
                    ->route('usuarios.show', ['id' => $id])
                                ->withErrors(['errors' => 'Falha ao deletar']);
        }
        
        
    }

    public function search(Request $request) {
        
        $dataForm = $request->except('_token');
        
        $user = $this->user
                        ->where('name', 'LIKE', "%{$dataForm['key-search']}%")
                        ->orWhere('email', $dataForm['key-search'])
                        ->paginate($this->totalPage);
        
         return view('Painel.User.index', compact('user', 'dataForm'));
        
    }
    
    public function debug(Request $request){
              
        $cargos = $request->all();
        dd($cargos);
    
       
        //$nameUser = auth()->user()->name;
    
        //var_dump("<h1>{$nameUser}</h1>");
        
        //foreach( auth()->user()->roles as $role){
            
            //echo $role->name;
            
            //$permission = $role->permissions;
            
            //foreach ($permission as $permissions){
                
                //echo " $permissions->name";
            //}
        //}
            
    }

}
