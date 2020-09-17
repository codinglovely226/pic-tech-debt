<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DocsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('doc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.docs.index');
    }
}
