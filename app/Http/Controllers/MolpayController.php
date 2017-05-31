<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MolpayController extends Controller
{
    public function index(){
      $amount = '1.50';
      $merchatID = 'tamsidea_Dev';
      $orderId = 1021;
      $verifykey = "6893c78377f26e9587a3a9b6742bc7e8";
      $vcode = md5($amount.$merchatID.$orderId.$verifykey);
      return view('molpay.index', compact('vcode'));
    }
    public function data(){
      $vkey = "6893c78377f26e9587a3a9b6742bc7e8";
      return view('molpay.receive');
    }
}
