<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
        {
            $query = $request->input('query');
            $order = $request->input('order', 'jumlah_barang');
            $sort = $request->input('sort',"asc"); // Nilai default adalah 'asc' jika tidak ada parameter sort atau nilai sort tidak valid
    
            $penjualans = Penjualan::where($order, 'like', '%'.$query.'%')
                            ->orderBy($order, $sort)
                            ->paginate(3);
        return view('penjualan.index',compact('penjualans'));
        }

    /**
     * Show the form for creating a new resource.
     */
        public function create()
        {
        return view('penjualan.create');
        }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
        {
        $request->validate([
            'jumlah_barang' =>'required|integer',
            'harga_satuan' =>'required|numeric',
        ]);
        //return dd($request->all());
        Penjualan::create($request->all());

        return redirect()->route('penjualan.index')->with('succes','Penjualan telah di tambahkan');
        }

    /**
     * Display the specified resource.
     */
        public function show($id)
        {
        $penjualan=Penjualan::find($id);
        return view('penjualan.show',compact('penjualan'));
        }

    /**
     * Show the form for editing the specified resource.
     */
        public function edit(string $id)
        {
        $penjualan=Penjualan::find($id);
        return view('penjualan.edit',compact('penjualan'));
        }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request,$id)
        {
        $request->validate([
            'jumlah_barang' =>'required|integer',
            'harga_satuan' =>'required|numeric',
        ]);
        $penjualan = Penjualan::find($id);
        $penjualan->update($request->all());
        return redirect()->route('penjualan.index')->with('succes','Penjualan telah di update');
        }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(string $id)
        {
        $penjualan=Penjualan::find($id);
        $penjualan->delete();

        return redirect()->route('penjualan.index')->with('succes','Penjualan telah di hapus');
        }
        public function list_penjualan()
        {
            $penjualan = Penjualan::all();
            return response()->json($penjualan);
        }
    
        // Menampilkan detail produk berdasarkan ID
        public function detail_penjualan($id)
        {
            $penjualan = Penjualan::find($id);
            if (!$penjualan) {
                return response()->json(['message' => 'Penjualan tidak ditemukan'], 404);
            }
            return response()->json($penjualan);
        }
    
        // Menyimpan produk baru
        public function create_penjualan(Request $request)
        {
            $request->validate([
                'jumlah_barang' =>'required|integer',
                'harga_satuan' =>'required|numeric',
            ]);
    
            Penjualan::create($request->all());
            
            return response()->json(['message' => 'Penjualan berhasil disimpan'], 201);
        }
    
        // Mengupdate produk berdasarkan ID
        public function update_penjualan(Request $request, $id)
        {
            $penjualan = Penjualan::find($id);
            if (!$penjualan) {
                return response()->json(['message' => 'Penjualan tidak ditemukan'], 404);
            }
            $request->validate([
                'jumlah_barang' =>'required|integer',
                'harga_satuan' =>'required|numeric',
            ]);

            $penjualan->update($request->all());
    
            return response()->json(['message' => 'Penjualan berhasil diupdate'], 200);
        }
    
        // Menghapus produk berdasarkan ID
        public function delete_penjualan($id)
        {
            $penjualan = Penjualan::find($id);
            if (!$penjualan) {
                return response()->json(['message' => 'Penjualan tidak ditemukan'], 404);
            }
    
            $penjualan->delete();
    
            return response()->json(['message' => 'Penjualan berhasil dihapus'], 200);
        }
        public function search(Request $request)
        {
        $query = $request->input('query'); // Mendapatkan kata kunci pencarian dari input form

        $penjualans = Penjualan::where('jumlah_barang', 'like', '%'.$query.'%')->paginate(3); // Menampilkan 10 produk per halaman

        return view('penjualan.index', compact('penjualans'));
        }
}
