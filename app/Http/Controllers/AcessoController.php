<?php

namespace App\Http\Controllers;

use App\Models\Acessos;
use Exception;
use Illuminate\Http\Request;

class AcessoController extends Controller
{
    public function getAcessosUltimaSemana()
    {
        try {
            $acessos = Acessos::where('created_at', '>=', now()->subDays(7))->get();
            return response()->json([
                "data" => [
                    "acessos" => $acessos->count()
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getAcessosUltimoMes()
    {
        try {
            $acessos = Acessos::where('created_at', '>=', now()->subMonth())->get();
            return response()->json([
                "data" => [
                    "acessos" => $acessos->count()
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getAcessosUltimoTrimestre()
    {
        try {
            $acessos = Acessos::where('created_at', '>=', now()->subMonths(3))->get();
            return response()->json([
                "data" => [
                    "acessos" => $acessos->count()
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getAcessosUltimoSemestre()
    {
        try {
            $acessos = Acessos::where('created_at', '>=', now()->subMonths(6))->get();
            return response()->json([
                "data" => [
                    "acessos" => $acessos->count()
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getAcessosDesdeInicio()
    {
        try {
            $acessos = Acessos::get();
            return response()->json([
                "data" => [
                    "acessos" => $acessos->count()
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
