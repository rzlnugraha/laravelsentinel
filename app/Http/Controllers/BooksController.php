<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Alert;
use App\Http\Requests\BookRequest;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $buku = Book::where('judul_buku','like','%' . $request->cari . '%')
                ->orWhere('pengarang','like','%' . $request->cari . '%')->latest()->paginate(5);
            $view = (String) view('buku.data_buku',compact('buku'))->render();
            return response()->json([
                'view' => $view,
                'status' => 'success'
            ]);
        }
        $buku = Book::latest()->paginate(5);
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        Book::create($request->all());
        Alert::success('Berhasil menambah data','Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('buku.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('buku.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $buku = Book::findOrFail($id);
        $buku->update($request->all());
        Alert::success('Berhasil update data','Success');
        return redirect()->url('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        Alert::success('Berhasil hapus data','Success');
        return back();
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        if (!empty($cari)) {
            $buku = Book::where('judul_buku', 'like', '%' . $cari . '%')
                ->orWhere('pengarang', 'like', '%' . $cari . '%')
                ->orWhere('penerbit', 'like', '%' . $cari . '%')->paginate(5);
        } else {
            $buku = Book::paginate(5);
        }
        return view('buku.index', compact('buku'));
    }
}
