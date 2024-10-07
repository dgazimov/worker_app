<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
 public function index()
 {
     return 'this index action of worker controller';
 }
 public function show() {
     return 'show action of worker controller';
 }
}
