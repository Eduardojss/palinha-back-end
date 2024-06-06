<?php

namespace App\Http\Controllers;

use App\Models\Musico;
use Exception;
use Illuminate\Http\Request;

class MusicosController extends Controller
{
    public function getMusicosUltimaSemana()
    {
        try {
            $cadastros = Musico::where('created_at', '>=', now()->subDays(7))->get();
            $ativos = Musico::where('created_at', '>=', now()->subDays(7))->where('ativo', 1)->get();
            $perfisCompletos = Musico::where('created_at', '>=', now()->subDays(7))->where('perfil_completo', 1)->get();

            $cadastrosPeriodoAnterior = Musico::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $compCadastros = $cadastros->count() - $cadastrosPeriodoAnterior->count();

            $inativos = Musico::where('created_at', '>=', now()->subDays(7))->where('ativo', 0)->get();
            $inativosPeriodoAnterior = Musico::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->where('ativo', 0)->get();
            $churn = Musico::onlyTrashed()->where('created_at', '>=', now()->subDays(7))->get();
            $churnPeriodoAnterior = Musico::onlyTrashed()->where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();

            $inativosCount = $churn->count() + $inativos->count();
            $inativosCountPeriodoAterior = $churnPeriodoAnterior->count() + $inativosPeriodoAnterior->count();
            return response()->json([
                "data" => [
                    "cadastros" => $cadastros->count(),
                    "ativos" => $ativos->count(),
                    "perfisCompletos" => $perfisCompletos->count(),
                    "compCadastros" => $compCadastros,
                    "compCadastrosPerCent" => $compCadastros / $cadastrosPeriodoAnterior->count() * 100,
                    "compInativos" => $inativosCount,
                    "compInativosPerCent" => ($inativosCount - $inativosCountPeriodoAterior) / $inativosCountPeriodoAterior * 100,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getMusicosUltimoMes()
    {
        try {
            $cadastros = Musico::where('created_at', '>=', now()->subMonth())->get();
            $ativos = Musico::where('created_at', '>=', now()->subMonth())->where('ativo', 1)->get();
            $perfisCompletos = Musico::where('created_at', '>=', now()->subMonth())->where('perfil_completo', 1)->get();

            $cadastrosPeriodoAnterior = Musico::where('created_at', '>=', now()->subMonths(2), 'and', '<', now()->subMonth())->get();
            $compCadastros = $cadastros->count() - $cadastrosPeriodoAnterior->count();

            $inativos = Musico::where('created_at', '>=', now()->subMonth())->where('ativo', 0)->get();
            $inativosPeriodoAnterior = Musico::where('created_at', '>=', now()->subMonths(2), 'and', '<', now()->subMonth())->where('ativo', 0)->get();
            $churn = Musico::onlyTrashed()->where('created_at', '>=', now()->subMonth())->get();
            $churnPeriodoAnterior = Musico::onlyTrashed()->where('created_at', '>=', now()->subMonths(2), 'and', '<', now()->subMonth())->get();

            $inativosCount = $churn->count() + $inativos->count();
            $inativosCountPeriodoAterior = $churnPeriodoAnterior->count() + $inativosPeriodoAnterior->count();
            return response()->json([
                "data" => [
                    "cadastros" => $cadastros->count(),
                    "ativos" => $ativos->count(),
                    "perfisCompletos" => $perfisCompletos->count(),
                    "compCadastros" => $compCadastros,
                    "compCadastrosPerCent" => $compCadastros / $cadastrosPeriodoAnterior->count() * 100,
                    "compInativos" => $inativosCount,
                    "compInativosPerCent" => ($inativosCount - $inativosCountPeriodoAterior) / $inativosCountPeriodoAterior * 100,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getMusicosUltimoTrimestre()
    {
        try {
            $cadastros = Musico::where('created_at', '>=', now()->subMonths(3))->get();
            $ativos = Musico::where('created_at', '>=', now()->subMonths(3))->where('ativo', 1)->get();
            $perfisCompletos = Musico::where('created_at', '>=', now()->subMonths(3))->where('perfil_completo', 1)->get();

            $cadastrosPeriodoAnterior = Musico::where('created_at', '>=', now()->subMonths(6), 'and', '<', now()->subMonths(3))->get();
            $compCadastros = $cadastros->count() - $cadastrosPeriodoAnterior->count();

            $inativos = Musico::where('created_at', '>=', now()->subMonths(3))->where('ativo', 0)->get();
            $inativosPeriodoAnterior = Musico::where('created_at', '>=', now()->subMonths(6), 'and', '<', now()->subMonths(3))->where('ativo', 0)->get();
            $churn = Musico::onlyTrashed()->where('created_at', '>=', now()->subMonths(3))->get();
            $churnPeriodoAnterior = Musico::onlyTrashed()->where('created_at', '>=', now()->subMonths(6), 'and', '<', now()->subMonths(3))->get();

            $inativosCount = $churn->count() + $inativos->count();
            $inativosCountPeriodoAterior = $churnPeriodoAnterior->count() + $inativosPeriodoAnterior->count();
            return response()->json([
                "data" => [
                    "cadastros" => $cadastros->count(),
                    "ativos" => $ativos->count(),
                    "perfisCompletos" => $perfisCompletos->count(),
                    "compCadastros" => $compCadastros,
                    "compCadastrosPerCent" => $compCadastros / $cadastrosPeriodoAnterior->count() * 100,
                    "compInativos" => $inativosCount,
                    "compInativosPerCent" => ($inativosCount - $inativosCountPeriodoAterior) / $inativosCountPeriodoAterior * 100,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getMusicosUltimoSemestre()
    {
        try {
            $cadastros = Musico::where('created_at', '>=', now()->subMonths(6))->get();
            $ativos = Musico::where('created_at', '>=', now()->subMonths(6))->where('ativo', 1)->get();
            $perfisCompletos = Musico::where('created_at', '>=', now()->subMonths(6))->where('perfil_completo', 1)->get();

            $cadastrosPeriodoAnterior = Musico::where('created_at', '>=', now()->subYear(), 'and', '<', now()->subMonths(6))->get();
            $compCadastros = $cadastros->count() - $cadastrosPeriodoAnterior->count();

            $inativos = Musico::where('created_at', '>=', now()->subMonths(6))->where('ativo', 0)->get();
            $inativosPeriodoAnterior = Musico::where('created_at', '>=', now()->subYear(), 'and', '<', now()->subMonths(6))->where('ativo', 0)->get();
            $churn = Musico::onlyTrashed()->where('created_at', '>=', now()->subMonths(6))->get();
            $churnPeriodoAnterior = Musico::onlyTrashed()->where('created_at', '>=', now()->subYear(), 'and', '<', now()->subMonths(6))->get();

            $inativosCount = $churn->count() + $inativos->count();
            $inativosCountPeriodoAterior = $churnPeriodoAnterior->count() + $inativosPeriodoAnterior->count();
            return response()->json([
                "data" => [
                    "cadastros" => $cadastros->count(),
                    "ativos" => $ativos->count(),
                    "perfisCompletos" => $perfisCompletos->count(),
                    "compCadastros" => $compCadastros,
                    "compCadastrosPerCent" => $compCadastros / $cadastrosPeriodoAnterior->count() * 100,
                    "compInativos" => $inativosCount,
                    "compInativosPerCent" => ($inativosCount - $inativosCountPeriodoAterior) / $inativosCountPeriodoAterior * 100,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getMusicosDesdeInicio()
    {
        try {
            $cadastros = Musico::get();
            $ativos = Musico::where('ativo', 1)->get();
            $perfisCompletos = Musico::where('perfil_completo', 1)->get();
            return response()->json([
                "data" => [
                    "cadastros" => $cadastros->count(),
                    "ativos" => $ativos->count(),
                    "perfisCompletos" => $perfisCompletos->count(),
                    "compCadastros" => false,
                    "compInativos" => false,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
