<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransfersController extends Controller
{
    protected $breadcrumbs;

    public function __construct()
    {
        $this->breadcrumbs['name'][0] = 'transfer';
        $this->breadcrumbs['route'][0] = 'transfer';
    }

    public function index()
    {
        $this->breadcrumbs['name'][1]='transfer';
        $this->breadcrumbs['route'][1]='transfer';

        return view('transfers.index')->with([
            'name' => 'Transfers',
            'breadcrumbs'=>$this->breadcrumbs
        ]);

    }
}
