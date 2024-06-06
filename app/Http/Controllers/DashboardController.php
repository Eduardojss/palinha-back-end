<?php

namespace App\Http\Controllers;

use App\Models\Acessos;
use App\Models\Contratante;
use App\Models\Contrato;
use App\Models\Download;
use App\Models\Musico;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public FaturamentoController $faturamentoController;

    public function __construct(FaturamentoController $faturamentoController)
    {
        $this->faturamentoController = $faturamentoController;
    }

    public function index()
    {
        $qntDownloads = Download::count();
        $iosDownloads = Download::where('plataforma', 'ios')->count();
        $androidDownloads = Download::where('plataforma', 'android')->count();
        
        $acessos = Acessos::count();

        $qntMusicos = Musico::count();
        $musicosAtivos = Musico::where('ativo', 1)->count();
        $perfisCompletos = Musico::where('perfil_completo', 1)->count();

        $qntcontratatesFisicos = Contratante::where('tipo', 'contratante_fisico')->count();
        $qntcontratatesJuridicos = Contratante::where('tipo', 'contratanto_juridico')->count();

        $contratos = Contrato::get();
        $qntContratos = $contratos->count();
        $faturamento = 0;
        foreach($contratos as $contrato){
            $faturamento += $contrato->valor_contrato;
        }
        $perCentApp = $faturamento * 0.20;

        $gateway = 5;
        $custoFiscal = 6;
        $lucroReal = $faturamento - $this->faturamentoController::DESPESAS;

        return response()->json([
            "data" => [
                "downloads" => $qntDownloads,
                "ios" => $iosDownloads,
                "android" => $androidDownloads,
                "acessos" => $acessos,
                "musicos" => $qntMusicos,
                "musicosAtivos" => $musicosAtivos,
                "perfisCompletos" => $perfisCompletos,
                "contratantesFisicos" => $qntcontratatesFisicos,
                "contratantesJuridicos" => $qntcontratatesJuridicos,
                "contratos" => $qntContratos,
                "faturamento" => round($faturamento, 2),
                "percentApp" => round($perCentApp, 2),
                "gateway" => $gateway,
                "fiscal" => $custoFiscal,
                "lucroReal" => round($lucroReal, 2) 
            ]
        ]);
    }
}
