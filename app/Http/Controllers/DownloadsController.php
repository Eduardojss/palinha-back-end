<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Exception;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function getDownloadsUltimaSemana()
    {
        try {
            $downloads = Download::where('created_at', '>=', now()->subDays(7))->get();
            $ios = $downloads->where('plataforma', 'ios');
            $android = $downloads->where('plataforma', 'android');
            return response()->json([
                "data" => [
                    "downloads" => $downloads->count(),
                    "ios" => $ios->count(),
                    "android" => $android->count(),
                    "conversaoIos" => 100,
                    "conversaoAndroid" => 100,
                    "acessosIos" => $ios->count() * 2 ,
                    "acessosAndroid" => $android->count() * 2,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getDownloadsUltimoMes()
    {
        try {
            $downloads = Download::where('created_at', '>=', now()->subMonth())->get();
            $ios = $downloads->where('plataforma', 'ios');
            $android = $downloads->where('plataforma', 'android');
            return response()->json([
                "data" => [
                    "downloads" => $downloads->count(),
                    "ios" => $ios->count(),
                    "android" => $android->count(),
                    "conversaoIos" => 100,
                    "conversaoAndroid" => 100,
                    "acessosIos" => $ios->count() * 2,
                    "acessosAndroid" => $android->count() * 2,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getDownloadsUltimoTrimestre()
    {
        try {
            $downloads = Download::where('created_at', '>=', now()->subMonths(3))->get();
            $ios = $downloads->where('plataforma', 'ios');
            $android = $downloads->where('plataforma', 'android');
            return response()->json([
                "data" => [
                    "downloads" => $downloads->count(),
                    "ios" => $ios->count(),
                    "android" => $android->count(),
                    "conversaoIos" => 100,
                    "conversaoAndroid" => 100,
                    "acessosIos" => $ios->count() * 2,
                    "acessosAndroid" => $android->count() * 2,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getDownloadsUltimoSemestre()
    {
        try {
            $downloads = Download::where('created_at', '>=', now()->subMonths(6))->get();
            $ios = $downloads->where('plataforma', 'ios');
            $android = $downloads->where('plataforma', 'android');
            return response()->json([
                "data" => [
                    "downloads" => $downloads->count(),
                    "ios" => $ios->count(),
                    "android" => $android->count(),
                    "conversaoIos" => 100,
                    "conversaoAndroid" => 100,
                    "acessosIos" => $ios->count() * 2,
                    "acessosAndroid" => $android->count() * 2,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getDownloadsDesdeInicio()
    {
        try {
            $downloads = Download::get();
            $ios = $downloads->where('plataforma', 'ios');
            $android = $downloads->where('plataforma', 'android');
            return response()->json([
                "data" => [
                    "downloads" => $downloads->count(),
                    "ios" => $ios->count(),
                    "android" => $android->count(),
                    "conversaoIos" => 100,
                    "conversaoAndroid" => 100,
                    "acessosIos" => $ios->count() * 2,
                    "acessosAndroid" => $android->count() * 2,
                ]
            ], 200);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
