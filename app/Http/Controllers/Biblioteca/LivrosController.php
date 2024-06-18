<?php

namespace App\Http\Controllers\Biblioteca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\livrosbiblioteca;
use App\Models\partileira;
use App\Models\categoria;
use App\Models\User;
use App\Models\userbiblioteca;
use App\Models\sub_categoria;
use App\Models\biblioteca;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Models\emprestismos;
use App\Models\rfid;
use App\Events\RfidTagReceived;


class LivrosController extends Controller
{
    public $rfid;
    //
    public function index(){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
        ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
        ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
        ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
        ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
        ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
        ->get();
        
        $dados['sub_categoria']=sub_categoria::get();
        $dados['partileiras']=partileira::get();
        $dados['categorias']=categoria::get();


        return view('biblioteca.livros.index', $dados);
    }
    public function store(Request $req){
        try{  
           // dd($req);
            // dd($req);
            $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        if($req->hasFile('vc_path') && $req->file('vc_path')->isValid() ){
        //    dd($req);
            $req_imagem=$req->vc_path;
            $extension=$req_imagem->extension();
            $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_imagem->move(public_path("imagens/galeria"), $imagem_name);
            $dir = "imagens/galeria";
            $caminho=$dir. "/". $imagem_name;

            $req_livro=$req->vc_livro;
            $extension=$req_livro->extension();
            $livro_name=md5($req_livro->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_livro->move(public_path("pdf/livro"), $livro_name);
            $dir = "pdf/livro";
            $caminho2=$dir. "/". $livro_name;

//         // Configure a URL da API e as credenciais de autenticação
// $url = 'https://api.pdf.co/v1/pdf/convert/to/html';
// $apiKey = 'gomesfranciscomateus34@gmail.com_54c7049bf8db9f3c115433a4f4560b6b1349ad51a31a63c0062ea346c74348fe3b51df29';
// // Configure o cliente Guzzle HTTP
// $client = new Client();
// // dd($caminho);
// // Abra o arquivo PDF como um fluxo de dados
// $pdfFile = fopen("$destino", 'r');

// // Envie a solicitação POST para a API PDF.co
// $response = $client->request('POST', $url, [
//     'headers' => [
//         'x-api-key' => $apiKey,
//     ],
//     'body' => $pdfFile,
// ]);

// // Obtenha o corpo da resposta da API
// $responseBody = $response->getBody()->getContents();

// // Converta a resposta em um objeto JSON
// $result = json_decode($responseBody, true);

// // Obtenha o URL do arquivo HTML resultante
// $htmlUrl = $result['url'];

// // Faça o download do arquivo HTML resultante
// $htmlContent = file_get_contents($htmlUrl);
// dd($htmlContent);
// // Salve o conteúdo do arquivo HTML em disco
// $htmlFilename = 'nome_do_arquivo.html';
// file_put_contents($htmlFilename, $htmlContent);


            livrosbiblioteca::create([
                'vc_nome'=>$req->vc_nome,
                'autor'=>$req->autor,
                'editora'=>$req->editora,
                'isbn'=>$req->isbn,
                'quantidade'=>$req->quantidade,
                'vc_desc'=>$req->vc_desc,
                'tag'=>$req->tag,
                'ano'=>$req->ano,
                'qt_page'=>$req->qt_page,
                'id_biblioteca'=>$id_biblioteca,
                'id_sub_categoria'=>$req->genero,
                'id_categoria'=>$req->categoria,
                'id_partileira'=>$req->id_partileira,
                'preco'=>$req->preco,
                'vc_path'=>$caminho,
                'vc_livro'=>$caminho2,
         
            ]);
            // dd("d0559ba34c8f44ddbf371c6f6cd0f905");
             // Configurações da API
         

             // ...
             
         
             
            
        
        return redirect()->back()->with('status',1);
        }
        else{
            return redirect()->back()->with('status_f',1);
        }}
        catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with("status_f", '1');
        }
   
    }
    public function update(Request $req){
        try{
            $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;

        if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
            $req_imagem=$req->vc_path;
            $extension=$req_imagem->extension();
            $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_imagem->move(public_path("imagens/galeria"), $imagem_name);
            $dir = "imagens/galeria";
            $caminho=$dir. "/". $imagem_name;
            livrosbiblioteca::create([
                'vc_nome'=>$req->vc_nome,
                'autor'=>$req->autor,
                'editora'=>$req->editora,
                'tag'=>$req->tag,
                'id_partileira'=>$req->id_partileira,
                'isbn'=>$req->isbn,
                'quantidade'=>$req->quantidade,
                'vc_desc'=>$req->vc_desc,
                'ano'=>$req->ano,
                'qt_page'=>$req->qt_page,
                'id_categoria'=>$req->categoria,
                'id_biblioteca'=>$id_biblioteca,
                'id_sub_categoria'=>$req->genero,
                'preco'=>$req->preco,
                'vc_path'=>$caminho,
            ]);
        return redirect()->back()->with('status',1);
        }
        else{
            livrosbiblioteca::create([
                'vc_nome'=>$req->vc_nome,
                'autor'=>$req->autor,
                'editora'=>$req->editora,
                'isbn'=>$req->isbn,
                'tag'=>$req->tag,
                'quantidade'=>$req->quantidade,
                'vc_desc'=>$req->vc_desc,
                'id_partileira'=>$req->id_partileira,
                'id_categoria'=>$req->categoria,
                'ano'=>$req->ano,
                'qt_page'=>$req->qt_page,
                'id_sub_categoria'=>$req->genero,
                'preco'=>$req->preco,
               ]);
                return redirect()->back()->with('status',1);
                }
        }
    catch (\Throwable $th) {
        return redirect()->back()->with("status_f", '1');
    }
    } public function delete($id){
        try{
        livrosbiblioteca::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }

    public function associarRfid(Request $request)
    {
            $rfid = $request->rfid;                    
                rfid::create([
                    'vc_nome'=>$request->rfid
                ]);
                           
            return response()->json(['rfid' => $rfid]);
     
    }

    public function rfid(){
        $tag = rfid::orderBy('id', 'desc')->first();
        $null = livrosbiblioteca::where('tag', $tag->vc_nome)->first();
        
        if ($null==null) {
            $rfid = $tag->vc_nome;
            return response()->json(['valor' => $rfid]);
        } else {
            return  $tag = rfid::orderBy('id', 'desc')->first();
            $null = livrosbiblioteca::where('tag', $tag->vc_nome)->first();response()->json(['valor' => " "]);
        }
     
        return response()->json(['valor' => " "]);
       
    }
    public function e_rfid(){
        $tag = rfid::orderBy('id', 'desc')->first();
        $null = livrosbiblioteca::where('tag', $tag->vc_nome)->first();

        $null2=emprestismos::where('id_livro',$null->id)->where('estado',0)->first();
        
        if ($null2==null) {
            $rfid = $tag->vc_nome;
            return response()->json(['valor' => $rfid]);
        } else {
            return response()->json(['valor' => " "]);
        }
     
        return response()->json(['valor' => " "]);
       
    }
    public function token(){
        

        // Obtém o token CSRF
        $csrfToken = csrf_token();
     // dd($csrfToken);
        // Retorna a resposta com o token CSRF
     return response()->json(['token' => $csrfToken]);;
    }

    public function create(){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
        ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
        ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
        ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
        ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
        ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
        ->get();
        
        $dados['sub_categoria']=sub_categoria::get();
        $dados['partileiras']=partileira::get();
        $dados['categorias']=categoria::get();
        return view('biblioteca.livros.create',$dados);
    }
    

}
