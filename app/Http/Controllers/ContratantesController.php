<?php

namespace App\Http\Controllers;

use App\Models\Contratante;
use Exception;
use Illuminate\Http\Request;

class ContratantesController extends Controller
{
    public function getContratantesUltimaSemana()
    {
        try {
            $fisicos = Contratante::where('created_at', '>=', now()->subDays(7))->get();
            $fisicosPeriodoAnterior = Contratante::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $fisicosCadastrados = $fisicos->count() - $fisicosPeriodoAnterior->count();

            $juridico = Contratante::where('created_at', '>=', now()->subDays(7))->get();
            $juridicoPeriodoAnterior = Contratante::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $juridicoCadastrados = $juridico->count() - $juridicoPeriodoAnterior->count();

            return response()->json([
                "data" => [
                    "cntFisicos" => $fisicos->count(),
                    "cntFisicosPerCent" => $fisicosCadastrados / $fisicosPeriodoAnterior->count() * 100,
                    "cntJuridico" => $juridico->count(),
                    "cntJuridicoPerCent" => $juridicoCadastrados / $juridicoPeriodoAnterior->count() * 100
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getContratantesUltimoMes()
    {
        try {
            $fisicos = Contratante::where('created_at', '>=', now()->subDays(7))->get();
            $fisicosPeriodoAnterior = Contratante::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $fisicosCadastrados = $fisicos->count() - $fisicosPeriodoAnterior->count();

            $juridico = Contratante::where('created_at', '>=', now()->subDays(7))->get();
            $juridicoPeriodoAnterior = Contratante::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $juridicoCadastrados = $juridico->count() - $juridicoPeriodoAnterior->count();

            return response()->json([
                "data" => [
                    "cntFisicos" => $fisicos->count(),
                    "cntFisicosPerCent" => $fisicosCadastrados / $fisicosPeriodoAnterior->count() * 100,
                    "cntJuridico" => $juridico->count(),
                    "cntJuridicoPerCent" => $juridicoCadastrados / $juridicoPeriodoAnterior->count() * 100
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getContratantesUltimoTrimestre()
    {
        try {
            $fisicos = Contratante::where('created_at', '>=', now()->subDays(7))->get();
            $fisicosPeriodoAnterior = Contratante::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $fisicosCadastrados = $fisicos->count() - $fisicosPeriodoAnterior->count();

            $juridico = Contratante::where('created_at', '>=', now()->subDays(7))->get();
            $juridicoPeriodoAnterior = Contratante::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $juridicoCadastrados = $juridico->count() - $juridicoPeriodoAnterior->count();

            return response()->json([
                "data" => [
                    "cntFisicos" => $fisicos->count(),
                    "cntFisicosPerCent" => $fisicosCadastrados / $fisicosPeriodoAnterior->count() * 100,
                    "cntJuridico" => $juridico->count(),
                    "cntJuridicoPerCent" => $juridicoCadastrados / $juridicoPeriodoAnterior->count() * 100
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getContratantesUltimoSemestre()
    {
        try {
            $fisicos = Contratante::where('created_at', '>=', now()->subDays(7))->get();
            $fisicosPeriodoAnterior = Contratante::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $fisicosCadastrados = $fisicos->count() - $fisicosPeriodoAnterior->count();

            $juridico = Contratante::where('created_at', '>=', now()->subDays(7))->get();
            $juridicoPeriodoAnterior = Contratante::where('created_at', '>=', now()->subDays(15), 'and', '<', now()->subDays(7))->get();
            $juridicoCadastrados = $juridico->count() - $juridicoPeriodoAnterior->count();

            return response()->json([
                "data" => [
                    "cntFisicos" => $fisicos->count(),
                    "cntFisicosPerCent" => $fisicosCadastrados / $fisicosPeriodoAnterior->count() * 100,
                    "cntJuridico" => $juridico->count(),
                    "cntJuridicoPerCent" => $juridicoCadastrados / $juridicoPeriodoAnterior->count() * 100
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getContratantesDesdeInicio()
    {
        try {
            $fisicos = Contratante::get();
            $juridico = Contratante::get();

            return response()->json([
                "data" => [
                    "cntFisicos" => $fisicos->count(),
                    "cntFisicosPerCent" => false,
                    "cntJuridico" => $juridico->count(),
                    "cntJuridicoPerCent" => false
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
