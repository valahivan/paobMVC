<?php 
require_once 'app/model/Osis.php';
require_once 'app/core/function.php';
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class OsisController {

    public function home(){
        return view('view/home.php');
    }

    public function index()
    {
        $data = new Osis();
        $osis = $data->orderBy('nama', 'ASC')->get();
        return view('view/data_osis.php"', ['osis' => $osis]);
    }

    public function create()
    {
        return view('view/daftar.php');
    }

    public function store($request)
    {   
        $osis = new Osis();
        $osis->create($request['nama'], $request['tanggal_lahir'],
               $request['gender'], $request['kelas'], $request['no_hp'],
               $request['alasan']);

        session_start();
        $_SESSION['success'] = true;

        return redirect('index.php?route=daftar');
    }

    public function download($id)
    {
        $osis = new Osis();
        $data = $osis->find($id);

        ob_start();
        view('view/surat_bukti_pendaftaran.php', ['data' => $data]);
        $fileSurat = ob_get_clean();

        $pdf = new Dompdf();
        $pdf->loadHtml($fileSurat);
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        $pdf->stream('view/surat_bukti_pendaftaran.pdf');

        $options = new Options();
        $options->set('isRemoteEnabled', true);
    }

    public function delete($id)
    {
        $osis = new Osis();
        $osis->where('id', '=', $id)->delete();

        session_start();
        $_SESSION['success'] = true;
        return redirect('view/admin.php');
      
    }

    public function panduan()
    {
        return view('view/panduan.php');
    }

}  


