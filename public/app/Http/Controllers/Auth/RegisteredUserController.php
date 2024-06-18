<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\categoria_biblioteca;
use App\Models\biblioteca;
use App\Models\userbiblioteca;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
class RegisteredUserController extends Controller
{
    public function __construct()
    {

        $this->Logger = new Logger();
    }
    public function loggerData($mensagem)
    {

        $this->Logger->Log('info', $mensagem);
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }
    public function biblioteca(){
        $dados['categoria']=categoria_biblioteca::get();
        return view('auth.biblioteca',$dados);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        
        if($request->vc_biblioteca!=null){
            if($request->hasFile('documento_imovel') && $request->file('documento_imovel')->isValid() && $request->hasFile('licenca') && $request->file('licenca')->isValid() ){
           
                $req_imagem=$request->documento_imovel;
                $extension=$req_imagem->extension();
                $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_imagem->move(public_path("documentos/bibliotecas"), $imagem_name);
                $dir = "documentos/bibliotecas";
                $caminho=$dir. "/". $imagem_name;
    
                $req_livro=$request->licenca;
                $extension=$req_livro->extension();
                $livro_name=md5($req_livro->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_livro->move(public_path("documentos/bibliotecas"), $livro_name);
                $dir = "documentos/bibliotecas";
                $caminho2=$dir. "/". $livro_name;
            
            //    dd($caminho2);
            $biblioteca=biblioteca::create([
                'vc_nome'=>$request->vc_biblioteca,
                'nif'=>$request->nif,
      
                'endereco'=>$request->endereco_biblioteca,
                'dc_imovel'=>$caminho,
                'lc_imovel'=>$caminho2,
                'id_categoria'=>$request->tipo_biblioteca,
                
            ]);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'vc_tipo_utilizador'=>2,
                'password' => Hash::make($request->password),
                 ]);

                 biblioteca::where('id',$biblioteca->id)->update([
                    'id_user'=>$user->id,
                 ]);
                 userbiblioteca::create([
                    'acesso'=>1,
                    'id_biblioteca'=>$biblioteca->id,
                    'id_user'=>$user->id,
                 ]);
                 $this->loggerData("$user->name Criou um conta Biblioteca em que a Biblioteca chama-se $biblioteca->vc_nome");
           
        }
            
        }
        else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                 ]);
                 $this->loggerData("$user->name Criou um conta ");
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    
    
}
