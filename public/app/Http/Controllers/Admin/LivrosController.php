<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sub_categoria;
use App\Models\categoria;
use App\Models\livros;
use Spatie\PdfToText\Pdf;
use \Gufy\PdfToHtml\Html;
use Spatie\PdfToHtml\Pdf as Css;
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Http;
class LivrosController extends Controller
{
    //
    public function index(){
        $dados['livros']=livros::join('sub_categorias','livros.id_sub_categoria','sub_categorias.id')
        ->join('categorias','livros.id_categoria','categorias.id')
        ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livros.*')
        ->get();
        
        $dados['sub_categoria']=sub_categoria::get();
        $dados['categorias']=categoria::get();
        return view('admin.livros.index', $dados);
    }
    public function get_access_token($client_id, $client_secret) {
        $auth_url = 'https://login.microsoftonline.com/common/oauth2/v2.0/token';
        $response = file_get_contents($auth_url . '?client_id=' . $client_id . '&client_secret=' . $client_secret . '&grant_type=client_credentials&scope=https://api.aspose.cloud/auth/token');
    
        $response_data = json_decode($response, true);
        dd($response);
        return $response_data['access_token'];
    }
    public function store(Request $req){
 
        if($req->hasFile('vc_path') && $req->file('vc_path')->isValid() ){
           
            $req_imagem=$req->vc_path;
            $extension=$req_imagem->extension();
            $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_imagem->move(public_path("pdf/livro"), $imagem_name);
            $dir = "pdf/livro";
            $caminho=$dir. "/". $imagem_name;

            $req_livro=$req->vc_livro;
            $extension=$req_livro->extension();
            $livro_name=md5($req_livro->getClientOriginalName() . strtotime('now')) . "." . $extension;
            // $livro_html=md5($req_livro->getClientOriginalName() . strtotime('now')) . ".html";
            
            $destino=$req_livro->move(public_path("pdf/livro"), $livro_name);
            $dir = "pdf/livro";
            $caminho2=$dir. "/". $livro_name;

            $pdf = new Pdf();
            $ola=$pdf->setPdf(public_path($caminho2));
          
            $d="/home/gomes/Documentos/Projectos/Biblioteca/public/$caminho2";
           
            
            // return view('pdf-to-html', ['html_content' => $html_content]);
        
            
            // // Defina os dados de autenticação e o URL da API
            //     $client_id = '8e6a0ed3-841d-40ce-84df-d6803db39ea1';
            //     $client_secret = 'e660f4997512b17170b17328e5ba577c';
            //     $api_url = 'https://api.aspose.cloud/v4.0/words/convert?format=html';

                // Defina o nome do arquivo PDF a ser convertido
                // $pdf_file = $d;

                // Leia o conteúdo do arquivo PDF em uma string
                // $pdf_content = file_get_contents($pdf_file);

                // Construa a solicitação POST para a API
                // $request = curl_init($api_url);
                // curl_setopt($request, CURLOPT_POST, true);
                // curl_setopt($request, CURLOPT_POSTFIELDS, $pdf_content);
                // curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
                // curl_setopt($request, CURLOPT_HTTPHEADER, array(
                //     'Content-Type: application/pdf',
                //     'Accept: text/html',
                //     'Authorization: Bearer ' . $this->get_access_token($client_id, $client_secret)
                // ));

                // Envie a solicitação e obtenha a resposta da API
                // $response = curl_exec($request);
                // dd($response);
                // Salve o arquivo HTML de saída
                // $html_file = 'arquivo.html';
             
                // file_put_contents($html_file, $response);

// Função para obter o token de acesso usando o ID do cliente e o segredo do cliente



            livros::create([
                'vc_nome'=>$req->vc_nome,
                'autor'=>$req->autor,
                'editora'=>$req->editora,
                'isbn'=>$req->isbn,
                'quantidade'=>$req->quantidade,
                'vc_desc'=>$req->vc_desc,
                'ano'=>$req->ano,
                'qt_page'=>$req->qt_page,
                'id_sub_categoria'=>$req->genero,
                'id_categoria'=>$req->categoria,
                'preco'=>$req->preco,
                'vc_path'=>$caminho,
                'vc_livro'=>$caminho2
            ]);
        return redirect()->back()->with('status',1);
        }
        else{
            return redirect()->back()->with('status_f',1);
        }
   
    }
  
    public function update(Request $req){
        try{

        if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
            $req_imagem=$req->vc_path;
            $extension=$req_imagem->extension();
            $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_imagem->move(public_path("pdf/livro"), $imagem_name);
            $dir = "pdf/livro";
            $caminho=$dir. "/". $imagem_name;
            livros::create([
                'vc_nome'=>$req->vc_nome,
                'autor'=>$req->autor,
                'editora'=>$req->editora,
                'isbn'=>$req->isbn,
                'quantidade'=>$req->quantidade,
                'vc_desc'=>$req->vc_desc,
                'ano'=>$req->ano,
                'qt_page'=>$req->qt_page,
                'id_sub_categoria'=>$req->genero,
                'id_categoria'=>$req->categoria,
                'preco'=>$req->preco,
                'vc_path'=>$caminho,
            ]);
        return redirect()->back()->with('status',1);
        }
        else{
            livros::create([
                'vc_nome'=>$req->vc_nome,
                'autor'=>$req->autor,
                'editora'=>$req->editora,
                'isbn'=>$req->isbn,
                'quantidade'=>$req->quantidade,
                'vc_desc'=>$req->vc_desc,
                'ano'=>$req->ano,
                'qt_page'=>$req->qt_page,
                'id_sub_categoria'=>$req->genero,
                'id_categoria'=>$req->categoria,
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
        livros::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }

        function convertPDFtoHTML($inputPath, $outputPath, $client_id, $client_secret) {
            // Criar uma instância do cliente HTTP Guzzle
            $client = new Client([
                'base_uri' => 'https://api.aspose.cloud/v4.0/words/',
                'headers' => [
                    'Content-Type' => 'application/pdf',
                    'Accept' => 'text/html',
                    'Authorization' => 'Bearer ' . getAccessToken($client_id, $client_secret)
                ]
            ]);

            // Realizar a chamada à API para converter o PDF em HTML
            $response = $client->post('convert?format=html', [
                'body' => file_get_contents($inputPath)
            ]);

            // Salvar o conteúdo HTML de saída em um arquivo
            file_put_contents($outputPath, $response->getBody());
        }

        function getAccessToken($client_id, $client_secret) {
            // Criar uma instância do cliente HTTP Guzzle
            $client = new Client();

            // Realizar a chamada à API de autorização da Aspose Cloud para obter um token de acesso
            $response = $client->post('https://login.microsoftonline.com/common/oauth2/v2.0/token', [
                'form_params' => [
                    'client_id' => $client_id,
                    'client_secret' => $client_secret,
                    'grant_type' => 'client_credentials',
                    'scope' => 'https://api.aspose.cloud/auth/token'
                ]
            ]);

            // Extrair o token de acesso do corpo da resposta e retorná-lo
            $data = json_decode($response->getBody(), true);
            return $data['access_token'];
        }
}
