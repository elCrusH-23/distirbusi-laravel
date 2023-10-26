<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $order = $request->input('order', 'nama_barang');
        $sort = $request->input('sort',"asc"); // Nilai default adalah 'asc' jika tidak ada parameter sort atau nilai sort tidak valid

        $barangs = Barang::where($order, 'like', '%'.$query.'%')
                        ->orderBy($order, $sort)
                        ->paginate(3);
        return view('barang.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang'=>'required|string|max:255',
            'price'=>'required|numeric',
            'stock'=>'required|integer',
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('succes','Barang sudah di buat');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $barang=Barang::find($id);
        return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang=Barang::find($id);
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang'=>'required|string|max:255',
            'price'=>'required|numeric',
            'stock'=>'required|integer',
        ]);
        $barang =Barang::find($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')->with('succes','barang sudah di update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang=Barang::find($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('succes','barang sudah di hapus');
    }
    public function list_barang()
        {
            $barang = Barang::all();
            return response()->json($barang);
        }
    
        // Menampilkan detail produk berdasarkan ID
        public function detail_barang($id)
        {
            $barang = Barang::find($id);
            if (!$barang) {
                return response()->json(['message' => 'barang tidak ditemukan'], 404);
            }
            return response()->json($barang);
        }
    
        // Menyimpan produk baru
        public function create_barang(Request $request)
        {
            $request->validate([
                'nama_barang'=>'required|string|max:255',
                'price'=>'required|numeric',
                'stock'=>'required|integer',
            ]);
    
            Barang::create($request->all());
    
            return response()->json(['message' => 'barang berhasil disimpan'], 201);
        }
    
        // Mengupdate produk berdasarkan ID
        public function update_barang(Request $request, $id)
        {
            $barang = Barang::find($id);
            if (!$barang) {
                return response()->json(['message' => 'barang tidak ditemukan'], 404);
            }
            $request->validate([
                'nama_barang'=>'required|string|max:255',
                'price'=>'required|numeric',
                'stock'=>'required|integer',
            ]);

            $barang->update($request->all());
    
            return response()->json(['message' => 'barang berhasil diupdate'], 200);
        }
    
        // Menghapus produk berdasarkan ID
        public function delete_barang($id)
        {
            $barang = Barang::find($id);
            if (!$barang) {
                return response()->json(['message' => 'barang tidak ditemukan'], 404);
            }
    
            $barang->delete();
    
            return response()->json(['message' => 'barang berhasil dihapus'], 200);
        }
        public function search(Request $request)
        {
        $query = $request->input('query'); // Mendapatkan kata kunci pencarian dari input form

        $barangs = Barang::where('nama_barang', 'like', '%'.$query.'%')->paginate(3); // Menampilkan 10 produk per halaman

        return view('barang.index', compact('barangs'));
        }
        
}
