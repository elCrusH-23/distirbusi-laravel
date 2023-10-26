<?php

namespace App\Http\Controllers;
use App\Models\Pelangan;

use Illuminate\Http\Request;

class PelanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $order = $request->input('order', 'nama');
        $sort = $request->input('sort',"asc"); // Nilai default adalah 'asc' jika tidak ada parameter sort atau nilai sort tidak valid

        $pelangans = Pelangan::where($order, 'like', '%'.$query.'%')
                        ->orderBy($order, $sort)
                        ->paginate(3);
        return view('pelangan.index',compact('pelangans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|string|max:255',
            'kontak'=>'required|string|max:255',
            'asal'=>'required|string|max:255',
        ]);
        Pelangan::create($request->all());

        return redirect()->route('pelangan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pelangan=Pelangan::find($id);
        return view('pelangan.show',compact('pelangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelangan=Pelangan::find($id);
        //return dd($pelangan);
        return view('pelangan.edit',compact('pelangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required|string|max:255',
            'kontak'=>'required|string|max:255',
            'asal'=>'required|string|max:255',
        ]);

        $pelangan=Pelangan::find($id);
        $pelangan->update($request->all());

        return redirect()->route('pelangan.index')->with('succes','pelangan update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pelangan=Pelangan::find($id);
        $pelangan->delete();

        return redirect()->route('pelangan.index')->with('succes','pelangan deleted');
    }
    public function list_pelangan()
        {
            $pelangan = Pelangan::all();
            return response()->json($pelangan);
        }
    
        // Menampilkan detail produk berdasarkan ID
        public function detail_pelangan($id)
        {
            $pelangan = Pelangan::find($id);
            if (!$pelangan) {
                return response()->json(['message' => 'Pelangan tidak ditemukan'], 404);
            }
            return response()->json($pelangan);
        }
    
        // Menyimpan produk baru
        public function create_pelangan(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'kontak' => 'required|string|max:255',
                'asal' => 'required|string|max:255',
            ]);
    
            Pelangan::create($request->all());
    
            return response()->json(['message' => 'Pelangan berhasil disimpan'], 201);
        }
    
        // Mengupdate produk berdasarkan ID
        public function update_pelangan(Request $request, $id)
        {
            $pelangan = Pelangan::find($id);
            if (!$pelangan) {
                return response()->json(['message' => 'Pelangan tidak ditemukan'], 404);
            }
            $request->validate([
                'name' => 'required|string|max:255',
                'kontak' => 'required|string|max:255',
                'asal' => 'required|string|max:255',
            ]);

            $product->update($request->all());
    
            return response()->json(['message' => 'Pelangan berhasil diupdate'], 200);
        }
    
        // Menghapus produk berdasarkan ID
        public function delete_pelangan($id)
        {
            $pelangan = Pelangan::find($id);
            if (!$pelangan) {
                return response()->json(['message' => 'Pelangan tidak ditemukan'], 404);
            }
    
            $pelangan->delete();
    
            return response()->json(['message' => 'Pelangan berhasil dihapus'], 200);
            //menghapus semua data
        }
        public function search(Request $request)
        {
        $query = $request->input('query'); // Mendapatkan kata kunci pencarian dari input form

        $pelangans = Pelangan::where('nama', 'like', '%'.$query.'%')->paginate(3); // Menampilkan 10 produk per halaman

        return view('pelangan.index', compact('pelangans'));
        }        
}
