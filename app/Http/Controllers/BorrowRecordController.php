<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorrowRecord;

class BorrowRecordController extends Controller
{
    public function index()
    {
   
        $borrowRecords = BorrowRecord::with(['book', 'member'])->get();

        return view('pages.borrow_records', compact('borrowRecords'));
    }
}
