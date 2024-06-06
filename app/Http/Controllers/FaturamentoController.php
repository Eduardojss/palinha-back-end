<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Exception;
use Illuminate\Http\Request;

class FaturamentoController extends Controller
{
    const DESPESAS = 1400000;
    public function getFaturametosUltimaSemana()
    {
        try {
            $contratos = Contrato::where('created_at', '>=', now()->subDays(7))->get();

            $faturamento = $contratos->sum('valor_contrato');

            $porcentagemApp = $faturamento * 0.20;

            $gateway = 5;
            $custoFiscal = 6;
            $valorReal = $faturamento - self::DESPESAS;
            return response()->json([
                "data" => [
                    "contratos" => $contratos->count(),
                    "faturamento" => $faturamento,
                    "porcentagemApp" => $porcentagemApp,
                    "valorReal" => $valorReal,
                    "gateway" => $gateway,
                    "fiscal" => $custoFiscal,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getFaturametosUltimoMes()
    {
        try {
            $contratos = Contrato::where('created_at', '>=', now()->subMonth())->get();

            $faturamento = $contratos->sum('valor_contrato');

            $porcentagemApp = $faturamento * 0.20;

            $gateway = 5;
            $custoFiscal = 6;
            $valorReal = $faturamento - self::DESPESAS;
            return response()->json([
                "data" => [
                    "contratos" => $contratos->count(),
                    "faturamento" => $faturamento,
                    "porcentagemApp" => $porcentagemApp,
                    "valorReal" => $valorReal,
                    "gateway" => $gateway,
                    "fiscal" => $custoFiscal,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getFaturametosUltimoTrimestre()
    {
        try {
            $contratos = Contrato::where('created_at', '>=', now()->subMonths(3))->get();

            $faturamento = $contratos->sum('valor_contrato');

            $porcentagemApp = $faturamento * 0.20;

            $gateway = 5;
            $custoFiscal = 6;
            $valorReal = $faturamento - self::DESPESAS;
            return response()->json([
                "data" => [
                    "contratos" => $contratos->count(),
                    "faturamento" => $faturamento,
                    "porcentagemApp" => $porcentagemApp,
                    "valorReal" => $valorReal,
                    "gateway" => $gateway,
                    "fiscal" => $custoFiscal,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getFaturametosUltimoSemestre()
    {
        try {
            $contratos = Contrato::where('created_at', '>=', now()->subMonths(6))->get();

            $faturamento = $contratos->sum('valor_contrato');

            $porcentagemApp = $faturamento * 0.20;

            $gateway = 5;
            $custoFiscal = 6;
            $valorReal = $faturamento - self::DESPESAS;
            return response()->json([
                "data" => [
                    "contratos" => $contratos->count(),
                    "faturamento" => $faturamento,
                    "porcentagemApp" => $porcentagemApp,
                    "valorReal" => $valorReal,
                    "gateway" => $gateway,
                    "fiscal" => $custoFiscal,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getFaturametosDesdeInicio()
    {
        try {
            $contratos = Contrato::get();

            $faturamento = $contratos->sum('valor_contrato');

            $porcentagemApp = $faturamento * 0.20;

            $gateway = 5;
            $custoFiscal = 6;
            $valorReal = $faturamento - self::DESPESAS;
            return response()->json([
                "data" => [
                    "contratos" => $contratos->count(),
                    "faturamento" => $faturamento,
                    "porcentagemApp" => $porcentagemApp,
                    "valorReal" => $valorReal,
                    "gateway" => $gateway,
                    "fiscal" => $custoFiscal,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
