<?php

namespace App\Http\Controllers;

use App\Models\Autore;
use App\Models\Libro;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // GET	/libri -> index
        // Soluzione 1
        /* $sql = 'SELECT * FROM libri';
        if($request->has('id')){
            $sql .= ' WHERE id = ' . $request->get('id');
            $res = DB::select($sql);
            $obj = array_pop($res);
            return view('postdetail', ['post' => $obj]); // Ritorna una vista
            //return $obj; // Ritorna un API
        } else {
            $res = DB::select($sql);
            return view('libri', ['libri' => $res]);
        } */

        // Soluzione 2
        /* $queryBuilder = DB::table('libri');
        if($request->has('id')){
            $queryBuilder->where('id', '=', $request->get('id'));
        } */

        // Soluzione 3
        $queryBuilder = Libro::orderBy('id');
        if($request->has('id')){
            $queryBuilder->where('id', '=', $request->get('id'));
        }

        //return $queryBuilder->get();
        return view('libri', ['libri' => $queryBuilder->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libri', ['libri' => Libro::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['title', 'pages', 'year']);
        $data['libro_thumb'] = 'https://picsum.photos/id/'.fake()->randomNumber(2).'/200/300';
        $data['autore_id'] = Autore::get()->random()->id;
        $data['created_at'] = Carbon::now();

        // Soluzione 1
        /* $sql = 'INSERT INTO libri (title, pages, year, libro_thumb, autore_id, created_at)
                VALUES (:title, :description, :libro_thumb, :autore_id, :created_at)';
        $res = DB::update($sql, $data);
        //return $res ? 'Libro Created' : 'Libro not found!!!';
        return redirect()->action([LibroController::class, 'index']); */

        // Soluzione 2
        //$queryBuilder = DB::table('libri')->insert($data);

        // Soluzione 3
        $queryBuilder = Libro::create($data);

        //return $queryBuilder ? 'Libro Created' : 'Libro not found!!!';
        return redirect()->action([LibroController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return view('librodetail', ['libro' => $libro]); // Ritorna una vista
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('editlibro', ['libro' => $libro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        // Per adesso lo ignoro perche non sto facendo chiamate Ajax

        $data = $request->only(['title', 'pages', 'year', 'id']);
        $data['updated_at'] = Carbon::now();

        // Soluzione 3
        $queryBuilder = $libro->update($data);
        return $queryBuilder ? 'Libro Updated' : 'Libro not found!!!';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        // Per adesso lo ignoro perche non sto facendo chiamate Ajax

        // Soluzione 3
        $queryBuilder = $libro->delete();
        return $queryBuilder ? 'Libro Updated' : 'Libro not found!!!';
    }
}
